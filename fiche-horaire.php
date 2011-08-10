<?php
	require_once('lib/PageGenerator.php');
	$page = new PageGenerator("fiche");	
	echo $page->getHeader();
?> 
	<div class="main">
		<div class="box box-main">
			<div class="box-header">
				<h1>Horaires 2012 pour <strong>Haussmann St Lazare - Tournan</strong></h1>
				<a class="sticker" href="link">
					<img src="images/pourquoi-mes-horaires.png" width="124" height="99" alt="Pourquoi mes horaires changent-ils. En savoir plus" />
				</a>
			</div>
			<div class="box-content">
				<form id="recherche-gare">
					<label for="gares">Modifiez votre recherche</label>
					<input type="text" class="autoclear input-text" id="gares" />
					<input type="submit" value="Valider" class="input-submit"/><br />
					<span><span class="asterisk">*</span> Gare non desservie par Transilien</span>
				</form>
				<form id="abo-ligne">
					<label for="news">Abonnez-vous à votre ligne</label>
					<input type="text" class="autoclear input-text" id="news" />
					<input type="submit" value="OK" class="input-submit"/>
					<a href="#tooltip1" class="tooltip-help"><img src="images/question-mark.png" width="21" height="21" alt="aide"/></a><br />
					<span><span class="asterisk">*</span> Gare non desservie par Transilien</span>
				</form>
			</div>
		</div>
	</div>
	<div class="tooltip" id="tooltip1">
		<span class="arrow"></span>
		<h1>Abonnement</h1>
		<p>Ces horaires sont communiqués à titre d’information.<br /> 
		<strong>Abonnez-vous</strong> pour recevoir les éventuelles mises à jour d’ici le <strong>10 décembre 2011.</strong>
	</div>
	<ul class="tabs">
		<li>
			<a href="fiche-horaire.php" class="week-only <?php if (!isset($_GET['weekend'])) {?>active<?php }?>"><span>Du lundi au vendredi</span></a>
		</li>
		<li>
			<a href="fiche-horaire.php?weekend" class="weekend <?php if (isset($_GET['weekend'])) {?>active<?php }?>"><span>Week-end et fêtes</span></a>
		</li>
	</ul>
	<?php if (!isset($_GET['weekend'])) {?>
	<div class="pdf-container week-only-pdf" >
		<a href="link" class="download">Téléchargez la fiche au format pdf</a>
		<iframe src="pdf.html" frameborder="0" width="100%" height="545"></iframe>
	</div>
	<?php } else {?>
	<div class="pdf-container weekend-pdf">
		<a href="link" class="download">Téléchargez la fiche au format pdf</a>
		<iframe src="pdf2.html" frameborder="0" width="100%" height="545"></iframe>
	</div>
	<?php } ?>
<?php
$page->addJs('jquery.simpletooltip.js');
$page->setInit('
	$(function(){
		// tooltip
      	$("a.tooltip-help").simpletooltip({showEffect:"fadeIn", hideEffect:"fadeOut", floatingTooltip:true, centerTooltip:false});

	});
');	
echo $page->getFooter();
?>



