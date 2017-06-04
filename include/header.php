<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php 
			switch($currentPage = basename($_SERVER['REQUEST_URI'])) 
			{ 
			case 'index.php':
				$title = 'Portfolio - Work of Thijs van Diessen - UX Designer';
				$description = 'I am Thijs van Diessen, an UX Designer based in the Netherlands. Just graduated, specialised in prototyping and designing concepts and ideas.';
				break; 
<<<<<<< HEAD
=======
			case 'projects.php':
				$title = 'Portfolio - Work of Thijs van Diessen - UX Designer';
				$description = 'I am Thijs van Diessen, an UX Designer based in the Netherlands. Just graduated, specialised in prototyping and designing concepts and ideas.';
				break; 
>>>>>>> refs/remotes/origin/master
			case 'project1.php': 
				$title = 'My poster designs';
				$description = 'My personal design process of making posters and other graphic designs.';
				break;
			case 'project2.php': 
				$title = 'Improving digital parent-childcare communication';
				$description = 'My graduation project';
				break;
			case 'project3.php': 
				$title = 'Identity';
				$description = "Logo's";
				break;
			case 'project4.php': 
				$title = 'Typography';
				$description = 'Phisical letters creating an experience';
				break;
			case 'project5.php': 
				$title = 'Mashup';
				$description = 'Combining the Instagram API with the Google maps API';
				break;
			case 'writing.php': 
				$title = 'My writing';
				$description = 'My ideas about design.';
				break;
<<<<<<< HEAD
			case 'contact.php': 
				$title = 'Get to know me';
				$description = 'Contact and about me.';
				break;
			default:
				$title = 'Portfolio - Work of Thijs van Diessen - UX Designer';
				$description = 'I am Thijs van Diessen, an UX Designer based in the Netherlands. Just graduated, specialised in prototyping and designing concepts and ideas.';
=======
			case 'about.php': 
				$title = 'Get to know me';
				$description = 'About me.';
				break;
			case 'contact.php': 
				$title = 'Contact me';
				$description = 'Contact me.';
				break;
			default:
				$title = 'Portfolio - Work of Thijs van Diessen - UX Designer';
				$description = 'I am Thijs van Diessen, a Front end developer and UX Designer based in the Netherlands. Specialised in prototyping and designing concepts and ideas.';
>>>>>>> refs/remotes/origin/master
			} 
			echo '<title>'.$title.'</title>';
			echo '<meta name="description" content="'.$description.'">';
		?>

		<meta name="keywords" content="Portfolio, Profile, Experience, Design, prototyping">
		<meta name="author" content="Thijs van Diessen">

		<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
		<link rel="manifest" href="icon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

<<<<<<< HEAD
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
		
		<link href="my.css" rel="stylesheet">
</head>

=======
		<link href="css/main.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/all.min.js"></script>
</head>
>>>>>>> refs/remotes/origin/master
<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KV9S6Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KV9S6Q');</script>
<!-- End Google Tag Manager -->

<<<<<<< HEAD

	<div id="wrapper">

<?php
	require('include/array.php'); 
	require('include/nav.php');

	//page content
?>
=======
	<div id="wrapper">

	<?php
		require('include/nav.php');
	?>
	<div class="container-fluid">
>>>>>>> refs/remotes/origin/master
