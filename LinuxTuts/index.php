<!DOCTYPE html>
<html>
<<<<<<< HEAD
 <link rel="stylesheet" href="style.css" />
<head>
</head>

<body>

	<p>
    		Cette page ne contient que du HTML.<br />
     		Veuillez taper votre prénom :
	</p>

	<form action="cible.php" method="post">
	<p>
	     <input type="text" name="prenom" />
	     <input type="submit" value="Valider" />
	</p>
	</form>


	<p> Veuillez choisir ce qui vous voudriez voir sur ce site:</p></br>
		<input type="checkbox" name="case" class="case" /> <label 			for="case">Ma case à cocher</label>
 <br />

	<input type="checkbox" name="case1" class="case1" /><label 		for="case">plus de tutaux linux"</label>

</br>

<form action="cible_envoi.php" method="post"
enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" class="push_button" />
        </p>
</form>


<br />

<div id="slide">
	<div class="slide_button">
		<a href="#">Slide Button</a>
	</div>
</div>

<br/>


</body>

</html>
=======
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Linux Tuts</title>
    </head>
	
	<body>
		<header id="header">
		
			<div id="titre_principal">
				<img src='images/tux.png' alt="Tux" id="logo"/>
				
				<h1>LT</h1>
				<h2>Linux Tuts</h2>		
			</div>
			
			<nav>
			<div id="banniere_description">
				<?php include("nav.php"); ?>
			</div>
			</nav>
	</header>
	
		
		<div id="menu-gauche">
				
				<?php include("menu.php"); ?>
				<a href="#" class="push_button">Push Me</a>

		</div>
		<div id="bloc_page">
		
		
		<section>
			
			<article id="preview">
				<h1>Overview</h1>	
				
				<div style="background-color: red; width: 200px; height: 100px; color: white;" class="corner">Ceci n'est pas un carton rouge !</div> 
					<p>
					Donc voila, on parle souvent de Linux, certain maitrisent incroyablement bien, d'autre viennent de s'y mettre et commencent a découvrir, et d'autre on carrement peur pour de la bête.</br>
					Pour résumé un peu les choses utilisé un systeme d'exploitation linux n'est plus aussi compliqué qu'il fut jadis, meme que certaine distributions rivalise de simplicité avec windows.</br>
					Sur ce site, on va essayé de poster des Tutoriaux, allant de l'installation d'une distribution Linux aux configurations les plus farouches. Tout n'est pas de la pure création, y'a bcp de traduction qu'on fait, et aussi on essayé de repondre au requetes des membres.</br>
					Sur ce amusez vous bien.
					</p>
			</article>		
			
			<article id="recent" >
				<h1>Plus Vu</h1>	
				<p> nous allons avoir ici les articles les plus lus par nos membres</p>
			</article>

		</section>
		
			
	</body>
</html>
>>>>>>> 2f42777a79cc255eb4cec340ece4021cfe07f0c3
