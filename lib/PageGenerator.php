<?php
class PageGenerator
{
	private $css_files;
	private $js_files;
	private $css_head;
	private $js_head;
	private $partials_dir;
	private $header_tpl;
	private $headerlight_tpl;
	private $footer_tpl;
	private $url_path;
	private $content_class;
	private $error_count;
	private $js_init;
	
	public function __construct($content_class="one-col")
	{
		$this->css_files = array();
		$this->js_files = array();
		$this->css_head = array();
		$this->js_head = array();
		$this->js_init = array();
		
		if (defined("URL_PATH")) {
			$this->url_path = URL_PATH;
		} else {
			$this->url_path = '.';
		}
		
		$this->partials_dir = dirname(__FILE__) . '/../_partials/';
		
		$this->content_class = $content_class;
		
		$this->header_tpl = "header.tpl";
		$this->headerlight_tpl = "headerlight.tpl";
		$this->footer_tpl = "footer.tpl";
	}
	
	// header
	public function getHeader($replace = array(), $replace_after = array())
	{
		// Read template
		$header = $this->readTemplate($this->header_tpl);
		
		// Replace variables
		foreach($replace as $key => $value){
			$header = str_replace($key, $value, $header);
		}
		
		// Replace includes in header template
		$header = $this->replaceIncludes($header);
		
		// Styles
		$header = str_replace('<EXTRA_STYLES>', $this->getExtraStyles(), $header);
		
		// Scripts
		$header = str_replace('<EXTRA_SCRIPTS>', $this->getExtraScripts(), $header);
		
		// Path
		$header = str_replace('<URL_PATH>', $this->url_path, $header);
		
		// Class
		$header = str_replace('<CONTENT_CLASS>', $this->content_class, $header);
		
		// Replace variables after variables replacement
		foreach($replace_after as $key => $value){
			$header = str_replace($key, $value, $header);
		}
		
		return $header;
	}
		// headerlight
	public function getHeaderlight($replace = array(), $replace_after = array())
	{
		// Read template
		$headerlight = $this->readTemplate($this->headerlight_tpl);
		
		// Replace variables
		foreach($replace as $key => $value){
			$headerlight = str_replace($key, $value, $headerlight);
		}
		
		// Replace includes in header template
		$headerlight = $this->replaceIncludes($headerlight);
		
		// Styles
		$headerlight = str_replace('<EXTRA_STYLES>', $this->getExtraStyles(), $headerlight);
		
		// Scripts
		$headerlight = str_replace('<EXTRA_SCRIPTS>', $this->getExtraScripts(), $headerlight);
		
		// Path
		$headerlight = str_replace('<URL_PATH>', $this->url_path, $headerlight);
		
		// Class
		$headerlight = str_replace('<CONTENT_CLASS>', $this->content_class, $headerlight);
		
		// Replace variables after variables replacement
		foreach($replace_after as $key => $value){
			$headerlight = str_replace($key, $value, $headerlight);
		}
		
		return $headerlight;
	}
	// header
	public function getFooter()
	{
		// Read footer
		$footer = $this->readTemplate($this->footer_tpl);
		
		// Path
		$footer = str_replace('<URL_PATH>', $this->url_path, $footer);
		
		// Replace includes in header template
		$footer = $this->replaceIncludes($footer);
		
		//Scripts
		$footer = str_replace('<EXTRA_SCRIPTS>', $this->getExtraScripts(), $footer);
		
		if ( $this->getJsInit() != '' ) {
			$footer = str_replace('<JS_INIT>', '<script>/* <![CDATA[ */'."\n\t".$this->getJsInit()."\r\n".'/* ]]> */</script>', $footer);
		} else {
			$footer = str_replace('<JS_INIT>', '', $footer);
		}
		
		return $footer;
	}
	
	public function getPartial($tpl_name, $replace = array())
	{
		// Search template...
		$partials_dir_path = realpath('.');
		
		// Template content
    if (file_exists($partials_dir_path . '/_partials/' . $tpl_name . '.tpl')) {
     $tpl = file_get_contents($partials_dir_path . '/_partials/' . $tpl_name . '.tpl');
     
     // Replace variables
     foreach($replace as $key => $value){
       $tpl = str_replace($key, $value, $tpl);
     }
     
     // Includes
     $tpl = $this->replaceIncludes($tpl);
    }
		
		else {
			$tpl = $this->htmlError('Partiel manquant : '. $tpl_name .'.tpl');
		}
		
		return $tpl;
	}
	
	private function htmlError($error_msg)
	{
		return '<p style="position:absolute;z-index:9999;left:0;top:0;padding:10px;font-size:40px;white-space:nowrap;color:#EA2227;background:#fff;border:10px solid #EA2227;" title="'.$error_msg.'">'.$error_msg.'</p>';
	}
	
	private function replaceIncludes($tpl)
	{
		// Includes
		preg_match_all("/<PARTIAL:([^>]+)>/", $tpl, $matches, PREG_SET_ORDER);
		foreach ($matches as $val) {
			$tpl = str_replace('<PARTIAL:'.$val[1].'>', $this->getPartial($val[1]), $tpl);
		}
		
		return $tpl;
	}
	
	// Add a CSS file
	public function addCss($file, $parameters = array())
	{
		// Path
		$path = $this->getUrlPath($file, $this->url_path . '/styles/');
		
		// Extension
		$ext = $this->getExtension($file, 'css');
		
		// Media
		if (isset($parameters["media"])){
			$media = $parameters["media"];
		}
		else {
			$media = "screen, projection";
		}
		
		array_push($this->css_files, '<link rel="stylesheet" href="'.$path.$file.$ext.'" type="text/css" media="'.$media.'" />');
	}
	public function setInit($script){
		array_push($this->js_init, $script);
		
	}
	// Add a JS file
	public function addJs($file)
	{
		// Path
		$path = $this->getUrlPath($file, $this->url_path . '/scripts/');
		
		// Extension
		$ext = $this->getExtension($file, 'js');
		
		array_push($this->js_files, '<script src="'.$path.$file.$ext.'"></script>');
	}
	
	public function addFootJs($file)
	{
		// Path
		$path = $this->getUrlPath($file, $this->url_path . '/scripts/');
		
		// Extension
		$ext = $this->getExtension($file, 'js');
		
		array_push($this->js_files, '<script src="'.$path.$file.$ext.'"></script>');
	}
	
	// Add a CSS code in <head>
	public function addHeadCss($css_code)
	{
		array_push($this->css_head, $css_code);
	}
	
	// Add a JS code in <head>
	public function addHeadJs($js_code)
	{
		array_push($this->js_head, $js_code);
	}
	
	// Change header template
	public function setHeaderTemplate($template)
	{
		$this->header_tpl = $template . ".tpl";
	}
	
	// Change footer template
	public function setFooterTemplate($template)
	{
		$this->footer_tpl = $template . ".tpl";
	}
	
	// Add debug script for JS
	public function enableJsDebug()
	{
		$this->addJs("../../../share/js/pi.debugger.js");
		$this->addCss("../../../share/css/pi.debugger/debugger.css");
	}
	
	// Returns extra styles output
	private function getExtraStyles()
	{
		$style_output = implode("\n\t", $this->css_files);
		
		if (count($this->css_head) > 0){
			$style_output .= "\n\t".'<style media="screen, projection">'."\n\t\t" . implode("\n\t\t", $this->css_head) . "\n\t". '</style>';
		}
		
		return $style_output;
	}
	private function getJsInit()
	{
		$js_init_output = implode("\n\t", $this->js_init);
		return $js_init_output;
	}
	// Returns extra scripts output
	private function getExtraScripts()
	{
		$script_output = implode("\n\t", $this->js_files);
		
		if (count($this->js_head) > 0){
			$script_output .= "\n\t".'<script>/* <![CDATA[ */'."\n\t" . implode("\n", $this->js_head) . "\n\t". '/* ]]> */</script>';
		}
		
		return $script_output;
	}
	
	// Get default path, or not if specified
	private function getUrlPath($file, $default_path)
	{
		if (preg_match("/\//", $file)){
			return '';
		}
		else {
			return $default_path;
		}
	}
	
	// Get default extension, or not if specified
	private function getExtension($file, $default_ext)
	{
		if (preg_match('/\..+$/', $file)){
			return '';
		}
		else {
			return '.'.$default_ext;
		}
	}
	
	// Read and return a template
	private function readTemplate($file)
	{
		$tpl = file_get_contents($this->partials_dir . $file);
		return $tpl;
	}
}
?>
