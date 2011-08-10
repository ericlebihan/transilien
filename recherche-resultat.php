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
		<div class="box-container search-result">
			<p class="info-trajet">Trajet Aller / retour sans correspondance sur une ligne Transillien ou SNCF Transilien.</p>
			<h2>Fiche(s) horaire(s) valable(s) à partir du 11 décembre 2011</h2>
			<table summary="horaires de départ de la gare de ... arrivée à la gare de...">
				<tr>
					<th class="trajet"><span>trajet</span></th>
					<th><span><img src="images/calendar.png" width="20" height="24" alt="Jours" /></span></th>
					<th><span><img src="images/train.png" width="12" height="24" alt="Ligne" /></span></th>
					<th><span><img src="images/eye.png" width="23" height="24" alt="Consultation" /></span></th>
					<th><span><img src="images/download-purple.png" width="25" height="24" alt="Téléchargement" /></span></th>
					<th><span><img src="images/mail.png" width="27" height="24" alt="Abonnement" /></span></th>					
				</tr>
				<tr class="odd">
					<td class="trajet">Haussmann St Lazare - Tournan</td>
					<td>lun à ven</td>
					<td><img src="images/rere.png" width="50" height="23" alt="Rer E" /></td>
					<td><a href="consultation.php#search-modal-container" class="nyroModal">Consulter</a></td>
					<td><a href="prehome-popup.php#search-modal-container" class="nyroModal">Télécharger</a></td>
					<td><a href="abonnement.php#search-modal-container" class="nyroModal">S'abonner</a></td>
				</tr>
				<tr class="even">
					<td class="trajet">Haussmann St Lazare - Tournan</td>
					<td>sam - dim<br />+ j. fériés</td>
					<td><img src="images/rere.png" width="" height="" alt="Rer E" /></td>
					<td><a href="link">Consulter</a></td>
					<td><a href="link">Télécharger</a></td>
					<td><a href="abonnement.php#search-modal-container" class="nyroModal">S'abonner</a></td>
				</tr>
				<tr class="odd">
					<td class="trajet">Haussmann St Lazare - Villiers sur Marne / Le Plessis Trévise</td>
					<td>lun à ven</td>
					<td><img src="images/rere.png" width="50" height="23" alt="Rer E" /></td>
					<td><a href="consultation.php#search-modal-container" class="nyroModal">Consulter</a></td>
					<td><a href="link">Télécharger</a></td>
					<td><a href="abonnement.php#search-modal-container" class="nyroModal">S'abonner</a></td>
				</tr>
				<tr class="even">
					<td class="trajet">Haussmann St Lazare - Villiers sur Marne / Le Plessis Trévise</td>
					<td>sam - dim<br />+ j. fériés</td>
					<td><img src="images/rere.png" width="50" height="23" alt="Rer E" /></td>
					<td><a href="consultation.php#search-modal-container" class="nyroModal">Consulter</a></td>
					<td><a href="link">Télécharger</a></td>
					<td><a href="abonnement.php#search-modal-container" class="nyroModal">S'abonner</a></td>
				</tr>
				<tr class="odd">
					<td class="trajet">Haussmann St Lazare / Paris Est - Chelles Gournay</td>
					<td>lun à ven</td>
					<td><img src="images/rere.png" width="50" height="23" alt="Rer E" /></td>
					<td><a href="consultation.php#search-modal-container" class="nyroModal"></td>
					<td><a href="link">Télécharger</a></td>
					<td><a href="abonnement.php#search-modal-container" class="nyroModal">S'abonner</a></td>
				</tr>
				<tr class="even">
					<td class="trajet">Haussmann St Lazare / Paris Est - Chelles Gournay</td>
					<td>sam - dim<br />+ j. fériés</td>
					<td><img src="images/rere.png" width="50" height="23" alt="Rer E" /></td>
					<td><a href="consultation.php#search-modal-container" class="nyroModal"></td>
					<td><a href="link">Télécharger</a></td>
					<td><a href="abonnement.php#search-modal-container" class="nyroModal">S'abonner</a></td>
				</tr>
				<tr class="odd">
					<td class="trajet">Haussmann St Lazare - Cergy le Haut</td>
					<td>Tous <br />les jours</td>
					<td><img src="images/rere.png" width="50" height="23" alt="Rer E" /></td>
					<td><a href="consultation.php#search-modal-container" class="nyroModal"></td>
					<td><a href="link">Télécharger</a></td>
					<td><a href="abonnement.php#search-modal-container" class="nyroModal">S'abonner</a></td>
				</tr>
			</table>
			<p class="footnote">Pour visualiser les fiches PDF, vous devez disposer du logiciel Adobe Acrobat reader. Si vous ne l’avez pas, <a href="link">Téléchargez-ici</a></p>
		</div>		
	</div>	
<?php
	/* $page->addJs('http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js');
	$page->addJs('scripts/jquery-ui-1.8.14.custom.min.js'); */
	/*$page->addJs('scripts/jquery.nyroModal.custom.js');*/
?>
<script src="scripts/jquery.nyroModal.custom.js"></script>
<!--[if IE 6]>
<script src="scripts/jquery.nyroModal-ie6.min.js"></script>
<![endif]-->
<?php
	$page->setInit('
		$(function(){
			// modals			 
			$(".nyroModal").nyroModal();
			// hover tableau
			$("tr").hover(function(){$(this).addClass("hover");}, function(){$(this).removeClass("hover");
			});
		});
	');	
	echo $page->getFooter();
?>
