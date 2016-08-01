<!doctype html>
<html>
	<head>
		<title>API experiment</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript"src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBoW9pmvi6TM68IWROqMLPo_BvU3J7prrg&sensor=false"></script>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="script.js" type="text/javascript"></script>
		<link href="stylesheet.css" rel="stylesheet" type="text/css" />
	</head>
    
	<body onLoad="initialize()">

		<nav>
			<ul>
			    <li><a href="http://www.thijsvandiessen.nl">terug</a></li>
			</ul>
		</nav>


		<div id="wrapper">
			<h1>Gotcha!</h1>
			<h2>Dit zijn de locaties van populaire instagram foto's. </br>Druk op de knop "volgende foto" om de volgende populaire instagram foto te bekijken!</h2>

			<button value="volgende foto" onClick="history.go()">Volgende Foto</button>
	
        	<div id="content">
        		<div id="fotos"></div>
        		<div id="map_canvas"></div>
        	</div>
			

		</div>
    
	</body>
    
</html>