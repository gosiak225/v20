<!DOCTYPE html>

<html lang="fr">

<head>
  <meta name="description" content="<?php
    if(isset($metaD) && !empty($metaD)) { 
      echo $metaD;
    } 
    else { 
      echo "Some meta description"; 
    } ?>" />

	<meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="Małgorzata Kamińska" name="author">
  <meta name="google" content="notranslate" />
  <meta name="msapplication-tap-highlight" content="no">
  <link href="./images/images-logo/LuT_0.ico" rel="icon" id="icon">
  <title>
    <?php
      if(isset($title) && !empty($title)) {
        echo $title;
      }
      else {
        echo "Lucie Thizy";
      }
    ?>
  </title>  

  <link href="./css/page-layout.css" rel="stylesheet">
  <link href="./css/button.css" rel="stylesheet">
</head>

<header>
	<div class = "topnav">
      <a href="./index.html" id="logo">
        <img src="./images/images-logo/LuT.svg" alt="LuT" height="80px" width="80px" />
    	</a>
        <div id="myTopnav">
          <a href="./index.html" id ="brand">  <strong> Lucie Thizy</strong> <br> <span id="artist"> - Artiste peintre </span></a>
  			  <a href="./portfolio.html" class="menu"><br>PORTFOLIO</a>
  			  <a href="./contact.html" class="menu"><br>Contact</a>
          <a href="./apropos.html" class="menu"><br>Á propos</a>
  			  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    			  <i class="fa fa-bars"></i>
    		  </a>
    	  </div>
  </div>
	<script src="./java-script/navigation_bar_on_small_screens.js"></script>
</header>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Marck+Script&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet"> 

<body>