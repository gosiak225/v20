<!-- specify document type -->
<!DOCTYPE html>

<!-- website's language -->
<html lang="fr">

<!-- everything that concerns the heading (MATA data) -->
<head>
	<!-- which caracter set a website is written in U from Universal Character Set with -8bit  Transformation format -->
  <meta charset="UTF-8">
  <!-- this tag allows to choose what version of Internet Explorer the page should be rendered as-->
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <!-- viewport - the user's visible area of a web page; how to control the page dimensions and scaling; setting the width of the page to follow the width of the device; initial scale sets the iitial zoom level when the page is first loaded -->
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <!-- information about the author of the website -->
  <meta content="Création Małgorzata Kamińska" name="author">
  <!-- google translation for the website is not allowed -->
  <meta name="google" content="notranslate" />

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <!-- add icon to the browser tab  -->
  <link href="./images/images-logo/LuT_0.ico" rel="icon" id="icon">
  <!-- add name the browser tab -->
  <title>Lucie Thizy</title>  

<!-- style of the website (odnośnik do strony odpowiadającej za grafikę) -->
  <link href="./css/page-layout.css" rel="stylesheet">
  <link href="./css/button.css" rel="stylesheet">
</head>


<!-- navigation bar in the heading -->
<header>
  <!-- Top Navigation Menu -->
	<div class = "topnav">
      <!-- logo -->
      <a href="./index.html" id="logo">
        <img src="./images/images-logo/LuT.svg" alt="LuT" height="80px" width="80px" />
    	</a>
        <div id="myTopnav">
          <!-- brand -->
          <a href="./index.html" id ="brand">  <strong> Lucie Thizy</strong> <br> <span id="artist"> - Artiste peintre </span></a>
          <!-- menu links (hidden by default) -->
  			  <a href="./portfolio.html" class="menu"><br>PORTFOLIO</a>
  			  <a href="./contact.html" class="menu"><br>Contact</a>
          <a href="./apropos.html" class="menu"><br>Á propos</a>
          <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  			  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    			  <i class="fa fa-bars"></i>
    		  </a>
    	  </div>
  </div>
  <!-- calling java script to for navigation bar on small screns -->
	<script src="./java-script/navigation_bar_on_small_screens.js"></script>
</header>

<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- load fonts -->
<link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet"> 
<!-- open-sans -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet"> 

<!-- the actual content -->
<body>
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
</body>

<!-- footer with instagram icon and email adress -->
<footer class="footer">
    <div class="footer-icons">
      <ul class="icons">
        <!-- aria-hidden --- Indicates that the element and all of its descendants are not visible or perceivable to any user as implemented by the author. -->
          <li> <a href="https://www.instagram.com/thizy.lucie/" class=" instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li class="email tooltip">
              <i class="fa fa-envelope" aria-hidden="true" id="mail" onclick="setClipboard('thizy.lucie@gmail.com')"><span class="tooltiptext" id="text" >Cliquez ici pour copier mon adress mail</span>
              <script src="./java-script/copy-email.js"></script> </i>
          </li>
          <li id="add-tab">|</li>
          <li id="copyright"> Copyright © <script type="text/javascript">   document.write(new Date().getFullYear()); </script> Lucie Thizy	</li>
          <li id="push"> Création <a id="my-link">M.Kamińska</a></li>
          <li><p id="disclaimer">Toutes les images présentes sur ce site nous appartiennent et restent la propriété exclusive de leurs créateurs ou propriétaires. </p></li>
      </ul>

  </div>
</footer>


</html>
