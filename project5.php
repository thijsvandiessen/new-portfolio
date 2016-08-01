<?php
	require('include/header.php');

	//page content
?>

<div class="row">
	<div class="col-lg-12">
		<div class="title">
			<h1>Mashup <br><small>Instagram and Google maps</small></h1>
		</div>
	</div>
</div>

<hr>

<div class="row">
	<div class="col-lg-12 textrow">
		<div class="page-header">
			<h1>Where are the populair Instagram pictures taken?</h1>
		</div>

		<p>For a school assignment I combined two API's (Application Programming Interface's) to lean a bit more about Javascript and jQuery and the endless possibilities of web development.</p>

		<center><a href="API/index.php"><button type="button" class="btn btn-default btn-lg">See my mashup working</button></a></center>

		<p>The first step was to find two open API's that I could use. Twitter was an easy choice, but not very meaningful. Facebooks API was very closed, so difficult to make a mashup of. But then I found the Instagram API. There were lots of ways to get data from Instagram with a simple JSON request. Not all data was complete, for example not everyone is allowing Instagram to retrieve their GPS position, but it was good enough. I also found that Instagram had an algorithm that knows the most populair photos posted on Instagram. Connecting this to a twitter feed wouldn’t be very useful, but knowing where those photos where taken would maybe be very interesting for a travel agency. Therefore I decided to connect it with the API of Google Maps.</p>

		<p>The Google Maps API is very simple; you give it a location, and it wil pinpoint it on a map of your choice. Filtering out the photos without a GPS location from the instagram data so that only the photos with a GPS location were used in the final mashup was a challenge, but in the end it worked.</p>

		<p>The final product is not pretty, but that was not the assignment. It shows a populair Instagram picture and profile together with a location, and with the Google Maps API you can see where the photo was taken. I learned that the popular photos were mostly taken by popular people, but all over the world.</p>

		<p>For me, this was a fun experiment of how I can fix problems using programming. Although I know Javascript and PHP and I like programming, I am not a programmer. Instead I like to use this knowledge to design and invent new experiences. Programming is fun, and I’m sure I’ll further develop my skills in the future.</p>

	</div>
</div>

<div class="row projectnavigation">
	<div class="col-xs-2  pull-left">
		<a href="project4.php"><img class="img-fluid" src="img/arrow-left.svg" alt="Next"></a>
	</div>
	<div class="col-xs-2  pull-right">
		<a href="project1.php"><img class="img-fluid" src="img/arrow.svg" alt="Next"></a>
	</div>
</div>



<?php
	require('include/footer.php');
?>
