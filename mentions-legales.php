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
				</li>					<li>1.2 Lorem ipsum dolor 					<p>Quisque congue adipiscing nisi, ac egestas mi auctor et. Maecenas tempus velit ac lorem egestas in hendrerit nunc dignissim. Ut faucibus gravida facilisis. Proin semper, nisi id vestibulum adipiscing, nibh eros mattis dolor, vel molestie diam elit nec libero. Curabitur id risus quis libero tincidunt viverra. Nulla ultricies nisi in tellus mollis pellentesque vehicula magna ornare. Donec sodales tempor enim at ultricies. In risus libero, eleifend ac ultricies vel, auctor eget turpis. Pellentesque volutpat commodo dolor, eu ultrices quam feugiat sed. Nulla ullamcorper, quam a egestas commodo, libero mi dignissim tellus, non aliquet dolor diam eu quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus non leo non lorem euismod faucibus. Morbi vel mollis dui. Etiam vel lectus nisi, quis luctus lacus.</p>
				</li>
				<li>1.3 Lorem ipsum dolor 					<p>Aliquam et orci magna. Ut felis odio, bibendum vitae cursus nec, tempus ut mi. Praesent venenatis, sem non fringilla egestas, tellus dolor pretium arcu, ac elementum tellus sapien vitae metus. Nam et sapien sed massa blandit porta tempus vitae ante. Sed nibh purus, lacinia ac imperdiet eu, auctor nec nisl. Nunc eros felis, consequat sed facilisis ut, volutpat nec metus. Vivamus convallis fermentum tristique. Phasellus varius velit ac urna elementum vel tempus nisi facilisis. Donec ultricies sodales faucibus. Maecenas ultrices adipiscing porttitor. In blandit tortor sed ante facilisis rutrum. Sed justo enim, ultricies vel ultrices non, interdum sit amet nibh. Suspendisse mi nulla, cursus dignissim mattis sed epsum.</p>
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
