<!DOCTYPE html>
<html LANG="En">
<head>

	<!-- Meta Tagz n Title-->
		<meta name=" author " content=" Ajay Chambers (aka AFT3RL1F3) ">
		<meta name=" viewport " content=" width=device-width, initial-scale=1.0 " />
		<meta charset="UTF-8">
		<meta name="description" content="State of the art Web-Development by Developer and Designer: Ajay Chambers">
		<meta name=" keywords " content=" Web-Development, Web-Design ">

	<!-- TITLE -->
		<title><?php echo ucfirst($pageTitle); ?></title>

	<!-- CDNs:  #1~JQuery 3.4.1   ||   #2~FontAwsome   -->
		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/3d9b68708a.js" crossorigin="anonymous"></script>

	<!-- Dynamic link to the requested page's style-sheet -->
		<?php echo '<link rel="stylesheet" type="text/css" href="http://localhost/RS2/PUBLIC/css/pages/' . $pageTitle . '.css">';  ?>

	<!-- LINKS - 4- Custom Widgets & Dynamic Css Variables Sheet ('BASEPATH'/RS2/PUBLIC/css/varz.css) -->
		<link rel="stylesheet" type="text/css" href="http://localhost/RS2/PUBLIC/css/varz.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/RS2/PUBLIC/css/widget/rsn.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/RS2/PUBLIC/css/widget/logo-bar.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/RS2/PUBLIC/css/widget/slide-show.css">

	<!-- GOOGLE FONTZ  (Note: Fontz Listed as Declared in ('BASEPATH'/RS2/PUBLIC/css/varz.css)) -->
		<link href="https://fonts.googleapis.com/css?family=Audiowide|Comfortaa|Cormorant+Upright|Exo|Exo+2|Josefin+Slab|Kanit|Montserrat|Montserrat+Alternates|Righteous|Ubuntu|Ubuntu+Condensed&display=swap" rel="stylesheet">
				<!--    
				--font-A: 'Audiowide', cursive;
				--font-B: 'Montserrat', sans-serif;
				--font-C: 'Montserrat Alternates', sans-serif;
				--font-D: 'Exo 2', sans-serif;
				--font-E: 'Exo', sans-serif;
				--font-F: 'Comfortaa', cursive;
				--font-G: 'Kanit', sans-serif;
				--font-H: 'Righteous', cursive;
				--font-I: 'Ubuntu', sans-serif;
				--font-J: 'Ubuntu Condensed', sans-serif;
				--font-K: 'Josefin Slab', serif;
				--font-L: 'Cormorant Upright', serif; 
				-->
		<link href="https://fonts.googleapis.com/css?family=Barriecito|Crafty+Girls|Fredericka+the+Great|Kristi|Montez|Mr+Dafoe|Mrs+Saint+Delafield|Nanum+Brush+Script|Nothing+You+Could+Do|Rock+Salt|Sedgwick+Ave+Display|Shadows+Into+Light|Sirin+Stencil|Turret+Road&display=swap" rel="stylesheet">
				<!--
				--font-M: 'Shadows Into Light', cursive;
				--font-N: 'Rock Salt', cursive;
				--font-O: 'Mr Dafoe', cursive;
				--font-P: 'Nothing You Could Do', cursive;
				--font-Q: 'Fredericka the Great', cursive;
				--font-R: 'Turret Road', cursive;
				--font-S: 'Kristi', cursive;
				--font-T: 'Nanum Brush Script', cursive;
				--font-U: 'Montez', cursive;
				--font-V: 'Crafty Girls', cursive;
				--font-W: 'Mrs Saint Delafield', cursive;
				--font-X: 'Sirin Stencil', cursive;
				--font-Y: 'Barriecito', cursive;
				--font-Z: 'Sedgwick Ave Display', cursive;
				-->





				<!--~~~~~ !!END HEAD!! ~~~~~-->
</head>
<body>
