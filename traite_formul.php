<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome</title>
    <link rel="stylesheet" href="knacss.css" media="all">
    <link rel="stylesheet" href="style.css" media="all">
  </head>
  <body>

  <header id="header" role="banner" class="pam">
 Bienvenue
  </header>
  <div class="flex-container">
    <aside class="mod w20 pam aside">
      <nav id="navigation" role="navigation">
        <ul class="pam">

					<li id=bl class="pam inbl"><a href="1page.html">Menu principal</a></li>
          <li id=bl class="pam inbl"><a href="evenement.html.html">L'événement</a></li>
          <li id=bl class="pam inbl"><a href="histoire du codage.html">Le codage</a></li>
	        <li id=bl class="pam inbl"><a href="association.html">Plus sur nous</a></li>
	        <li id=bl class="pam inbl"><a href="dominfo.html">Le domaine de l'info</a></li>


        </ul>
      </nav>

    </aside>
    <main id="main" role="main" class="flex-item-fluid pam">

      <?php
          $n=$_POST['nom'];
          $p=$_POST['prenom'];
          $e=$_POST['mail'];
          $l=$_POST['an'];
          $f=$_POST['pers'];
          $t=$_POST['tel'];
          $cl=$_POST['cl'];
          echo "<p>Bonjour Mr/Mme ".$n.", vous venez de vous inscrire pour l'evenement du 08 janvier 2021, vous ".$f.".<br>Vos coordones sont celles si ".$e." et ".$t.", et vous venez en tant que ".$cl.".<br>Et veuillez confirmer votre inscription a l'adresse mail suivante:salouhouyousuf@gmail.com.<br><br>Merci et a bientot.</p>";

      ?>
<img id=img src="welc.jpg">

    </main>
  </div>
  </body>
  <footer>

<p> <a id=bl href="avis.html">N'hesitais pas deposer votre avis(Cliquez ici)</a>  / <a id=bl href="nombre.html">Ici un mini-jeux(cliquez ici)</a> </p>

  </footer>
</html>
