<?php
	require_once('lib/PageGenerator.php');
	$page = new PageGenerator("home");	
	echo $page->getHeader();
?> 
	<div class="main">
		<div class="box box-main">
			<div class="box-header">
				<h1>Horaires 2012</h1>
				<a class="sticker" href="link">
					<img src="images/pourquoi-mes-horaires.png" width="124" height="99" alt="Pourquoi mes horaires changent-ils. En savoir plus" />
				</a>
			</div>
			<div class="box-content">
				<p>RFF et SNCF mettent en place une nouvelle circulation ferroviaire à partir du <strong>11 décembre 2011</strong>.<br />
				Pour vous permettre d'organiser vos déplacements, nous mettons dès à présent à votre disposition <br />
				les fiches horaires de vos trains. Ces informations sont susceptibles d'évoluer. Abonnez-vous aux <br />
				trajets de vos choix pour recevoir les horaires définitifs. <br />
				</p> 
				<form id="recherche-gare">
					<label for="gares">Saisissez votre gare de départ</label>
					<input type="text" class="autoclear input-text" id="gares" />
					<input type="submit" value="Valider" class="input-submit"/><br />
					<span><span class="asterisk">*</span> Gare non desservie par Transilien</span>
				</form>
			</div>
		</div>
		<div class="box-container three-boxes">
			<div class="box box-simple">
				<h2>Nécessité de s'abonner</h2>
				<p>Les projets quasi-définitifs des horaires de toutes les lignes Transilien seront mis en ligne sur le site transilien.com avec à votre disposition, des fiches horaires et surtout la possibilitée s'abonner sur le site. Vous choisissez les trajets de votre choix, cela vous permettra de recevoir par mail les horaires définitifs de vos trajets dès leur émission.</p>
			</div>
			<div class="box box-simple">
				<h2>Pourquoi mes horaires changent-ils ?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum pharetra elit sit amet viverra. Mauris non sem odio, vitae interdum nulla. Vivamus bibendum adipiscing nulla, ac hendrerit felis ultric.
Duis posuere ante quis arcu ornare accumsan. Aenean consectetur odio sed nibh accumsan scelerisque. Etiam quam dolor, pellentesque ut euismod sagittis, aliquam ut felis.</p>
			</div>
			<div class="box box-simple last">
				<h2>Informations lorem ipsum interdum vitae</h2>
				<p>Etiam quam dolor, pellentesque ut euismod sagittis, <a href="link">aliquam ut felis.</a></p>
			</div>
		</div>		
	</div>	
<?php
	/* $page->addJs('http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js');
	$page->addJs('scripts/jquery-ui-1.8.14.custom.min.js'); */
	$page->addJs('scripts/jquery.nyroModal.custom.js');
	$page->addJs('scripts/jquery.nyroModal-ie6.min.js');
	$page->addJs('scripts/jquery.equalizeheight.js');
	$page->setInit('
		$(function(){
			// modals
			$(".nyroModal").nyroModal();
			// equalize height
			$(".box-container div").equalizeHeight();
		});
	');	
	echo $page->getFooter();
?>
