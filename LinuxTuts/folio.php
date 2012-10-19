<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Anna Kubaszewska</title>
    </head>
	
<body>
	<div id="bloc_page">
		<header>
		
			<div id="titre_principal">
				<img src='images/zozor_logo.png' alt="Logo de Zozor" id="logo"/>
				<h1>AK</h1>
				<h2>Graphic Designer</h2>		
			</div>
			
			<nav>
			<nav>
				<?php include("menu.php");?>
			</nav>
			
		</header>
		
		<div id="banniere_image">
			<div id="banniere_description">
				Latest work....
				<a href="#" class="bouton_rouge">Voir l'article<img src="images/flecheblanchedroite.png" alt=""/><a>	
			</div>
		</div>
		
		<section>
			<article>
				<h1><img src='images/ico_epingle.png' alt="Catégorie" class="ico_categorie"/>Overview</h1>
				<p>Madame, Monsieur,</br>
				</p>
			</article>
		
			<aside>
				<h1>About Me</h1>
				<img src="images/bulle.png" alt="" id="fleche_bulle"/>
				<p id="photo_anna"><img src="images/anna.jpg" alt="photo de anna"/></p>
				<p>Anna Emilia Kubaszewska</p>
				<p>Graphic Designer</p>
				<p>Am graphic designer from Poland.</br> i studied in Kazimierz Pułaski Technical University of Radom.</br>Welcome everybody.</p>
				<p><img src="images/facebook.png"alt="facebook"/><img src="images/twitter.png"alt="Twitter"/><img src="images/vimeo.png" alt="Vimeo"/><img src="images/flickr.png" alt="Flickr"/><img src="images/rss.png" alt="RSS"/></p>				
			</aside>
		</section>
		
		
		<?php include("footer.php");?>
		</div>
		</body>
</html>