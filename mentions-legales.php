<?php
	require_once('lib/PageGenerator.php');
	$page = new PageGenerator("mentions");	
	/*$page->addCss('styles/ui-lightness/jquery-ui-1.8.14.custom.css');*/
	echo $page->getHeader();
?> 
	<div class="main">
		<div class="box box-main">
			<div class="box-header">
				<h1>Horaires 2012</h1>
			</div>
		</div>
		<div class="content">
			<ul class="nav">
				<li><a href="link">FAQ</a></li>
				<li><a href="link">Crédit</a></li>
				<li><a href="link">Mentions légales</a></li>
			</ul>
			<ol>
				<li>1.1 Lorem ipsum dolor
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus eleifend lectus, nec facilisis ipsum accumsan sit amet. Pellentesque non metus purus. Donec quis risus quis urna dignissim dictum. Nullam metus libero, hendrerit quis semper non, dapibus non arcu. Nullam tempor risus eu tortor posuere sagittis. Phasellus sodales consequat lacinia. Etiam vel enim feugiat nulla varius ullamcorper at non massa. Duis tempus ultrices ante, lobortis pretium nunc porttitor eu. Etiam a justo massa, mollis rhoncus ligula. Praesent a diam nec sapien sodales vestibulum ut ac mi. Phasellus vitae lectus quis sem pretium aliquet mollis eu ligula. Proin placerat rutrum fermentum. Mauris cursus pharetra mauris, sit amet vulputate mauris fringilla sit amet. Duis lobortis adipiscing cursus. Donec vel justo turpis.</p>
				</li>	
				</li>
				<li>1.3 Lorem ipsum dolor 
				</li>	
			</ol>
		</div>
		
	</div>	
<?php
	/* $page->addJs('http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js');
	$page->addJs('scripts/jquery-ui-1.8.14.custom.min.js'); */
	$page->addJs('scripts/jquery.nyroModal.custom.js');
	$page->addJs('scripts/jquery.nyroModal-ie6.min.js');
	$page->setInit('
		$(function(){
			// modals
			$(".nyroModal").nyroModal();
			// tooltips
			$("a.tooltip-help").simpletooltip({showEffect:"fadeIn", hideEffect:"fadeOut", click:true, floatingTooltip:true}).bind("mouseleave", function(){
				$(".tooltip").hide(); 
				$(document).unbind("keypress");
			});
		});
	');	
	echo $page->getFooter();
?>