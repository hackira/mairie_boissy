<!doctype html>
<html lang="fr">
	<head>
		<title>
		<?php 
			if(isset($_GET['page']))
			{
				echo $_GET['page']; 
			}
			else 
				echo "Accueil";
		?>
		</title>
		<meta charset="utf-8"/>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<nav id="menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Boissy l'aillerie</a>
				</div>
				<div class="container-fluid">
					<ul class="nav navbar-nav">
						<li><a href="#">Accueil</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Informations <span class="caret"></span></a></li>
								<ul class="dropdown-menu">
									<li><a href="#">Bulletin municipal</a></li>
									<li><a href="#">Flash</a></li>
									<li><a href="#">Comment obtenir ?</a></li>
									<li><a href="#">Formations-emplois</a></li>
									<li><a href="#">Pages jaunes</a></li>
									<li><a href="#">Qualité de l'eau</a></li>
									<li><a href="#">Commerces - service de proximité</a></li>
									<li><a href="#">Transports en ile-de-france</a></li>
									<li><a href="#">Voeux du maire</a></li>
									<li><a href="#">Informations du mois</a></li>
									<li><a href="#">Elections</a></li>
									<li><a href="#">Recensement militaire</a></li>
									<li><a href="#">Les échos</a></li>
									<li><a href="#">Informations générales</a></li>
								</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">Découvrir Boissy <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Blason</a></li>
									<li><a href="#">Historique</a></li>
									<li><a href="#">Village fleuri</a></li>
									<li><a href="#">Photographies anciennes</a></li>
									<li><a href="#">Plan de Boissy</a></li>
									<li><a href="#">Affaires sociales</a></li>
									<li><a href="#">Budget</a></li>
									<li><a href="#">CCAS</a></li>
									<li><a href="#">Comission animation</a></li>
									<li><a href="#">Etat civil</a></li>
									<li><a href="#">Realisations-Projets</a></li>
									<li><a href="#">Reunion du conseil</a></li>
								</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">Associations <span class="caret"></span></a></li>
								<ul class="dropdown-menu">
									<li><a href="#">Arc en ciel de la viosne</a></li>
									<li><a href="#">Club du bel automne</a></li>
									<li><a href="#">Etoile sportive de Boissy</a></li>
									<li><a href="#">Les petites canailles</a></li>
									<li><a href="#">Maison pour tous</a></li>
									<li><a href="#">Parents d'élèves de Boissy</a></li>
									<li><a href="#">Tennis club de Boissy</a></li>
									<li class="divider"></li>
									<li><a href="#">DIRAP</a></li>
									<li><a href="#">Ecole de la source</a></li>
									<li><a href="#">L'oiseau bleu/Béthel</a></li>
									<li><a href="#">Val Fleury</a></li>
								</ul>	
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">Urbanisme <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Enquête publique urbanisme</a>
									<li><a href="#">PLU 10 mars 2010</a>
									<li><a href="#">PLU modif simplifiée 23 avril 2015</a>
									<li><a href="#">Cadastre</a>
									<li><a href="#">Carte des risques majeurs</a>
								</ul>
						</li>
						<li><a href="#">Zone d'activité</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</nav>
		<p id="accueil">
			L’année 2015 restera gravée très longtemps dans la mémoire collective après les effroyables tragédies de janvier et plus proches de nous celles du 13 novembre 2015.<br />
			Face à la barbarie de ces assassins, la réaction de nos compatriotes a plutôt été exemplaire pour rendre hommage à toutes les victimes, soutenir les familles, défendre les libertés et notre démocratie.<br />
			Après de telles tragédies il est bien difficile de trouver les mots suffisamment justes et forts pour dire aux familles et aux victimes gravement atteintes toute notre compassion et nos pensées.<br />
			Cette compassion, nous la devons aussi à toutes celles et tous ceux qui ont pu échapper à ce massacre, dont les meurtrissures morales vont perdurer de longues années.<br />
			Il était important qu’un hommage, particulièrement mérité, soit rendu aux forces de l’ordre, gendarmes et policiers, dont le travail s’avère de plus en plus compliqué et dangereux et qui n’ont pas toujours été dans le passé soutenus comme ils le méritaient.<br />
			Ils sont plus que jamais en première ligne pour assurer notre sécurité. Je n’oublie pas non plus le travail des pompiers, du SAMU et plus largement le personnel médical dans les hôpitaux.<br />
			Pour autant la vie doit continuer.<br />
			<span class="citation">extrait du discours de Mr Guiard - Maire de boissy</span>
		</p>
		</div>
	</body>
</html>