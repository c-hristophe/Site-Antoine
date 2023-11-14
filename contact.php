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
    <meta name="keywords" content="Vidéo, montage, reportage, couverture vidéo, évènementiel, évènement, photo, Genève, Annemasse, Annecy, Grand Genève, ">
    <meta name="description" content="vidéos de reportage, sport, promotion d'entreprise">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    
    
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="./css/et-line.css">
	<link rel="canonical" href="https://www.lumaat.com/index.php" />
	
	<script src="./js/jquery-2.1.0.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/blocs.js"></script>
	<script src="./js/jquery.touchSwipe.js" defer></script>
	<script src="./js/gmaps.js"></script>

    <title>LUMAAT - votre Contact pour des couvertures vidéos et reportages au meilleur prix </title>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P37WLQMN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="page-container">
   
<header>
<div class="bloc bgc-white l-bloc " id="bloc-0">
	<div class="container bloc-sm">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><img src="img/lumaat v2 png.png" alt="Sophrologie" height="90" /></a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1 special-dropdown-nav">
				<ul class="site-navigation nav navbar-nav">
        <li>
						<a href="index.php"><img src="img/icons8-accueil-64.png" alt="accueil" title="accueil"/></a>
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


<div class="bloc bg-dots-bg bg-repeat bgc-atomic-tangerine d-bloc bloc-bg-texture texture-paper" id="bloc-6">
<div class="degrade2 "><br><br><br></div>
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">
				<h1 id="table">
					Parlons création audiovisuelle !
				</h1>
				<p class="text-center mg-lg tc-white tight-width-whitespace">
					Nous sommes ravis que vous souhaitiez collaborer avec notre agence.<br>
					Parlez-nous de votre projet en complétant le formulaire ci-dessous ou en nous appelant au <br> 06 00 00 00 00.
				</p>
			</div>
		</div>
	</div><div class="degrade"><br><br><br></div>
</div>

<?php 
  if(isset($_POST['submit']) &&  $_POST['submit'] =='Envoyer' ){
    $valide=true;
    if(empty($_POST['nom'])){
      $erreur_nom = 'Veuillez indiquer votre nom .';
      $valide=false;
    }

    if(empty($_POST['email']) ){
        $erreur_email = 'Veuillez indiquer votre émail .';
        $valide=false;
    }

    if( (!empty($_POST['email'])) && !(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))){
          $erreur_email = 'Veuillez indiquer une adresse émail valide.';
          $valide=false;
    }


    if(empty($_POST['message'])){
        $erreur_message = 'Veuillez indiquer votre message .';
        $valide=false;
    }

    if($valide)
    {
        //traitement du formulaire apres validation
        $mail_To = 'c-hr@live.fr';
        $mail_Subject = "Contact depuis le site";
        $headers  = "From: ".$_POST['email']."\n"; 
        $headers .= "Reply-To: ".$_POST['email']."\n";
        $headers .= "MIME-Version: 1.0 \n";
        $headers .= "Content-Transfer-Encoding: 8bit \n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $mail_Body = nl2br($_POST['nom'])."  vous a transmis un mail depuis le site, voici son message :  ".nl2br($_POST['message']);


        if(mail($mail_To, $mail_Subject, $mail_Body, $headers)) 
           { 
              $_SESSION['message'] ='Votre email a bien été envoyé. Nous vous recontacterons rapidement !';
              
                   unset($_POST);
           } 
           else 
           { 
               $_SESSION['erreur'] ="Un problème est survenu lors de l'envoi d'email";
              
           } 
    }
  }

 ?>

  <?php if (isset($_SESSION['message'])): ?>
    <div class="message"> <?php echo $_SESSION['message']; ?></div>
    <?php unset( $_SESSION['message']); ?>
  <?php endif ?>
   <?php if (isset($_SESSION['erreur'])): ?>
    <div class="errorMessage"> <?php echo $_SESSION['erreur']; ?></div>
    <?php unset( $_SESSION['erreur']); ?>
  <?php endif ?>
  <br/><br/>
			<div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
        <form action= "contact.php" method="post">
        <p>
          
          <input class="texte" type="text" name ="nom" id="nom" placeholder="Nom" value ="<?php echo isset($_POST['nom'])?$_POST['nom']:'';?>" >
        </p>
        <?php if (!empty($erreur_nom)): ?>
          <div class="error"><?php echo $erreur_nom; ?></div>
        <?php endif ?>
         <p>
          
          <input class="texte" type="email" name ="email" id="email" placeholder="E-mail" value ="<?php echo isset($_POST['email'])?$_POST['email']:'';?>">
        </p>
         <?php if (!empty($erreur_email)): ?>
          <div class="error"><?php echo $erreur_email; ?></div>
        <?php endif ?>
         <p>
           
          <textarea class="texte" type="text" name ="message" placeholder="Message" id="message" cols="50" rows="8"> <?php echo isset($_POST['message'])?$_POST['message']:'';?></textarea>
        </p> 
        <?php if (!empty($erreur_message)): ?>
          <div class="error"><?php echo $erreur_message; ?></div>
        <?php endif ?>
        <p>
  
          <input class="btn btn-atomic-tangerine btn-clean btn-rd btn-lg cta-hero" type="submit" name ="submit" value="Envoyer">
        </p>
      </form>
					<figure>
						<blockquote>"Nous nous efforcons d'apporter une réponse sur la faisablité de votre projet dans les 24 heures"
							</blockquote>
							
					</figure>
				</div>
  
<!-- bloc-7 END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
<!-- ScrollToTop Button END-->


<!-- Footer - bloc-8 -->
<div class="bloc bgc-atomic-tangerine d-bloc" id="bloc-8">
	<div class=" bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center white">
					LUMAAT - Réalisation, tournage, montage<br>
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
</body>
</html>

