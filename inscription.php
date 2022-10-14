<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="knacss.css" media="all">
    <link rel="stylesheet" href="style.css" media="all">
  </head>
  <body>

  <header id="header" role="banner" class="pam">
 Formulaire d'inscription
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

<h1>Merci de remplir le formulaire d'inscription</h1>

<form action="traite_formul.php" method="post">
	<p> 	<label>Nom :</label><input type="text" name="nom" /></p>
		<p> 	<label>Prénom :</label><input type="text" name="prenom"/></p>
		<p> 	<label>E-mail:</label><input type="email" name="mail"/></p>
	<p> 	<label>tel:</label><input type="tel" name="tel"/></p>
	<p>   <label>Date de naissance:</label><input type="text" name="an"></p>
<br>
	<p>
	       Avec combien de personne venez vous ?<br />
				  <input type="radio" name="pers" value="venez seul"  /> <label>Je suis seul</label><br />
	        <input type="radio" name="pers" value="etes moins de 5 personnes"  /> <label >Je viens avec moins de 5 personnes </label><br />
	        <input type="radio" name="pers" value="etes plus de 5 personnes"  /> <label >Je viens avec plus de 5 personnes</label><br />

	    </p>

<br>
	<p>
	     <label>Quel est votre situation</label><br />
	      <select name="cl" value="Niveau">
	           <option value=" eleve primaire" >Primaire</option>
	           <option value="Collegien">Collegien</option>
	           <option value="lyceen">Lycéen</option>
						 <option value="Etudiant en ecole superieur" >Etude superieur</option>
						 <option value="Professeur" >Professeur</option>
						 <option value="autre" >Autre</option>

	      </select>
	 	</p>
<br>
<br>
<input type="submit" value="Envoyer" />

		</form>





    </main>
  </div>
  </body>
  <footer>
<p> <a id=bl href="avis.html">N'hesitais pas deposer votre avis(Cliquez ici)</a>  / <a id=bl href="nombre.html">Ici un mini-jeux(cliquez ici)</a> </p>
  </footer>
</html>
