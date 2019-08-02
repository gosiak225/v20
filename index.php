<!DOCTYPE html>

<html lang="fr">
	
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width,initial-scale=1" name="viewport">
	
<?php
$title = "Page d'acceuil";
$metaD = "Page d'acceuil";
include './includes/header.php';
?>

  <div class="container-home">
        <div class="column previous" >
                  <div id="fixer">
                    <div id ="background"><img class="background" id="background3" src="./images/images-home/sketch-Lucie-006.jpg" height="580px" >
                      <img class="background" id="background2" src="./images/images-home/sketch-Lucie-006-2.jpg" height="580px">
                    <div><a href="portfolio.html" ><img class="slideshow" id="fusion" src="images/images-paintings/70cmx50cm(fusion).JPG"  height="125" ></a></div>
                    <div><a href="portfolio.html"><img class="slideshow" id="multi2" src="images/images-paintings/50cmx50cm multicolors 2.JPG" height="140"></a></div>
                    <div><a href="portfolio.html"><img class="slideshow" id="fire" src="images/images-paintings/30cmx40cm (Les flammes)bis.jpg" height="140" ></a></div>
                    <div><a href="portfolio.html"><img class="slideshow" id="multi1" src="images/images-paintings/50cmx50cm multicolors 1.JPG" height="140"></a></div>
                    <div><a href="portfolio.html"><img class="slideshow" id="lumiere" src="images/images-paintings/30cmx40cm (lumière).jpg" height="140"></a></div>
                    <script src="./java-script/carousel.js"></script>
                  </div>
			<script type="text/javascript"> 
				document.addEventListener("contextmenu", function(e){
				e.preventDefault();
				}, false);
			</script>
        </div></div>
        <div class="column next" id="brand-intro">
            <h1> Les tableaux </h1><h1 id="abstract">abstraits  </h1><h1> pour faire revivre </h1><h1> VOTRE </h1><h1>intérieur...</h1>
            <p> (notre boutique bientôt disponible !) </p>
        </div>
    </div>
  </div>


<?php
include './includes/footer.php';
?>
