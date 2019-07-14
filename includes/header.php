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