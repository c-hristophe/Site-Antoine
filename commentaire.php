<!doctype html>
<html lang="fr">
<head>

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P37WLQMN');</script>
	<!-- End Google Tag Manager -->

    <meta charset="utf-8">
	<meta name="keywords" content="Vidéo, montage, reportage, couverture vidéo, évènementiel, évènement, photo, évènementiel Paris, Genève, Annemasse, Annecy, Grand Genève, haute savoie">
    <meta name="description" content="vidéos de reportage, sport, promotion d'entreprise, évènementiel, Paris, Lyon, Genève">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    
    
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="./css/et-line.css">
	<link rel="canonical" href="https://www.xn--cr-ation-d1a.com/index.html" />
	
	<script src="./js/jquery-2.1.0.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/blocs.js"></script>
	<script src="./js/jquery.touchSwipe.js" defer></script>
	<script src="./js/gmaps.js"></script>

    <title>LUMAAT - Nos projets de réalisations audiovisuelles sur Paris, Lyon, Genève </title>
    
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P37WLQMN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="page-container">
    
<header>
<?php
//on définit notre variable pour pouvoir inclure les fichier
define("C2SCRIPT","peut être n'importe quoi ici");
include("commentaire.php");

//on se connecte à la base de données (à adapter/remplacer avec votre système de connexion)
$BDD = array();
$BDD['serveur'] = "185.166.188.1";
$BDD['login'] = "u154233893_c_ruiz";
$BDD['pass'] = "Clvar181197";
$BDD['bdd'] = "u154233893_commentaires";
$mysqli = mysqli_connect($BDD['serveur'],$BDD['login'],$BDD['pass'],$BDD['bdd']);
if(!$mysqli) exit('Connexion MySQL non accomplie!');
?>
<div class="bloc bgc-white l-bloc " id="bloc-0">
	<div class="container bloc-sm">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="img/lumaat v2 png.png" alt="Sophrologie" height="90" /></a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1 special-dropdown-nav">
				<ul class="site-navigation nav navbar-nav">
					<li>
						<a href="index.html"><img src="img/icons8-accueil-64.png" alt="accueil" title="accueil"/></a>
					</li>
					<li>
						<a href="contact.php"><img src="img/icons8-enveloppe-64.png" alt="contact" title="contact"/></a>
					</li>
					
					<li>
						<a href="prix.html"><img src="img/icons8-billets-64.png" alt="tarifs" title="tarifs"/></a>
					</li>
					<li>
						<a href="parcours.html"><img src="img/icons8-google-images-64.png" alt="réalisations" title="réalisations"/></a>
					</li>
					
				</ul>
			</div>
		</nav>
	</div>
</div>
</header>

<div class="bloc bgc-dark-slate-blue bg-banniere d-bloc bg-t-edge bloc-bg-texture texture-paper b-parallax" id="bloc-1-hero">
	<div class="degrade2 "><br><br><br></div>
	<div class="bloc-lg">
		<div class="row tight-width-whitespace">
			<div class="col-sm-12">
				
				<div class="logo-holder">
					
					<div class="bg"></div>
					<div class="bar"></div>
					<div class="bar fill1"></div>
					<div class="bar fill2"></div>
					<div class="bar fill3"></div>
					<div class="bar fill4"></div>
					<div class="bar fill1"></div>
					<div class="bar fill5"></div>
					<div class="bar fill6"></div>
					<div class="bar"></div>
				  </div>
				
				<div class="container">
					<div class="row tight-width-whitespace black-background">
						<div class="col-sm-12">
							<div id="table">
								<h1>Exemples de prestations audiovisuelle.</h1>
							</div>
							<h2 > spots/clips vidéos publicitaires,films institutionnels, couverture évènements sportifs...</h2>
						</div>
				
					
				</div>
				</div>
  
					
				 
			</div>
		</div>
	</div>
	


</div>

<div class="large">
	<div class="container5">
	<?php
	//on affiche le formulaire pour poster un commentairetype ?id=123&... et l'id de la'rticle pour affiche les commentaire de cette article seulement, si vous utilisez ce système de commentaire pour un livre d'or par exemple, vous pouvez l'enlever et mettre seulement la page actuelle: afficherFormulaireCommentaire("page.php");
	afficherFormulaireCommentaire("commentaire.php");// indiquer la page actuelle avec ou sans query du 
	?>
			<div class="text-center white"> 
				<?php
				afficherCommentaires(123);
				?> 
			</div>
			
			
		
		
	</div>
</div>
<p class="text-center white large1">
	Ils nous ont fait confiance :
	<br><br><br>

	<img src="img/jalix.jpeg" alt="logo Jalix"/>
</p>
	<div class=" bloc-lg">
		<div class="row">
			
			<div class="col-sm-12 text-center">
				<div class="letter-image">
					<div class="animated-mail">
					  <div class="back-fold"></div>
					  <a href="contact.php" ><div class="letter">
						<div class="letter-title"></div>		
					  </div></a>
					  <div class="top-fold"></div>
					  <div class="body"></div>
					  <div class="left-fold"></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

</div>
<div class="bloc bgc-atomic-tangerine d-bloc" id="bloc-8">
	<div class="bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center white">
					LUMAAT - Réalisation, tournage, montage.<br>
				</p>
				<div class="row row-no-gutters social">
					
					
					<div class="text-center">
						<a class="social" href="https://www.instagram.com/"><span class="fa fa-instagram icon-md"></span></a>
					</div>
				
				
			</div>
				<br/>
				<div class="footer">
						<a href="charte_qualite.html">Charte de qualité</a>
						<a href="charte_confidentialite.html">Confidentialité</a>
						<a href="cgu.pdf">C.G.V.</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bloc bgc-white l-bloc text-center" id="bloc-2-services">
	<p>Site réalisé par <a href="https://cr-éation.com">cr-éation<br/><img src="img/logo_cr.png" alt="Sophrologie" height="20" /></a></p>
</div>

</div>
    
<script src="//rum-static.pingdom.net/pa-631eff310d7ce5001100128c.js" async></script>
<script src="js/scroll.js" async></script>
<meta name="google-site-verification" content="HFhwHZLfHXE2FQWErXuhTQjRQw5ys9-NJ2hqbVVsiCo" />
</body>
</html>
