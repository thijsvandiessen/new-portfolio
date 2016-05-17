			<footer class="site-footer">

				<p class="pull-left">
					<small>
						<a href="#">LinkedIn</a> <bR>
						<a href="#">Medium</a><bR>
						<a  href="#">Github</a>
					</small>
				</p>
				<center><p>Designed and developed by <br><a href="contact.php">Thijs van Diessen</p></a></center>
			</footer>
		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

	<script>

	// menu button

	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});

	// //Google analytics
 //        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 //        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 //        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 //        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 //        ga('create', 'UA-37345822-2', 'auto');
 //        ga('send', 'pageview');
 //        ga(‘set’, ‘&uid’, {{USER_ID}}); // De gebruikers-ID instellen op basis van de ingelogde user_id.


 	//onload
$(document).ready( Onload );

function Onload(event) {
	//teken de kaart
	initializeMap( );
	//laad locaties
	loadInstagramEntries( );
}

function loadInstagramEntries( ) {
	//popular
	var url = "https://api.instagram.com/v1/media/popular?client_id=5c366b820dd349748a5015857db9a927"; 
	//tags
	//var url = "https://api.instagram.com/v1/tags/amsterdam/media/recent?client_id=5c366b820dd349748a5015857db9a927";
	//location
	//var url = "https://api.instagram.com/v1/locations/search?lat=52&lng=5&client_id=5c366b820dd349748a5015857db9a927";
	
	$.ajax({
		type: 'GET',
		url: url,
		success: displayPictures, 
		dataType: 'jsonp', 
		cache: false
	});

//-------------------------------------------------------------------------------------

function displayPictures ( oInstagramFeedback ) {
	//console.log (oInstagramFeedback)
	// laat 32 foto's zien of minder als er minder zijn
	$('#fotos').html( "" );
	
	var iNumUsedPics = 0;
	var iMaxNumPictures = 2;

	for ( var i=0; i<oInstagramFeedback.data.length; i++ ) {

		var sFotoOutput = 
			'<div class="foto">'
				// haal foto's op met standaard resolutie
				+ '<img class="picture" src="' + oInstagramFeedback.data[ i ].images.standard_resolution.url + '" />'
				// haal username op
				+ '<p>' + oInstagramFeedback.data[i].user.username + '</p>';
				
				// informatie over de locatie
				//console.log (oInstagramFeedback.data[i].location.latitude)
				//console.log (oInstagramFeedback.data[i].location.longitude)
				//console.log (oInstagramFeedback.data[i])
				
//-------------------------------------------------------------------------------------

				// if profile pic is undefined post the default
				var sProfilePic = oInstagramFeedback.data[i].user.profile_picture;	
		
				// console log profile pic
				// console.log( "### " + i + ": " + sProfilePic );
					
				if ( sProfilePic == undefined ) {
				//console.log( "!!!!!!!!" );
			
				// default pic
				sFotoOutput += '<img class="profile_picture" src="profile_default.jpg" />';
				} else {
			
				// haal profile picture op
				sFotoOutput += '<img class="profile_picture" src="' + sProfilePic + '" />';
				}
		
//-------------------------------------------------------------------------------------


				// sluit div
				sFotoOutput += '</div>';
				
//-------------------------------------------------------------------------------------
				
				// als er geen locatie is
				if ( oInstagramFeedback.data[i].location != null ) {
					//console.log (oInstagramFeedback.data[i].location)
					
					// alle locaties in instagramLocation var
					var instagramLocation = oInstagramFeedback.data[i].location
					
					// alle content wordt in 1 keer geplaatst
					$('#fotos').append( sFotoOutput );
					
					// voeg marker toe aan de map
					addMarker( oInstagramFeedback.data[ i ] );
					
					iNumUsedPics++;
				}
//-------------------------------------------------------------------------------------
		
		
				// als i niet max kan zijn ga dan niet op zoek naar meer plaatjes
				if ( iNumUsedPics >= iMaxNumPictures - 1 ) break;	
			}
			
			function codeAddress() {
			var address = document.getElementById("address").value;
			geocoder.geocode( { 'address': address}, function(results, status) {
      			if (status == google.maps.GeocoderStatus.OK) {
					map.setCenter(results[1].geometry.location);
					var marker = new google.maps.Marker({
						map: map,
						position: results[1].geometry.location
					});
				} else {

					alert("Geocode was not successful for the following reason: " + status);
		
    			}
			});
		}
	}
}

//-------------------------------------------------------------------------------------

function codeAddress() {
	var address = document.getElementById("address").value;
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[1].geometry.location);
			var marker = new google.maps.Marker({
				map: map,
				position: results[1].geometry.location
			});
		} else {
			  alert("Geocode was not successful for the following reason: " + status);
      	}
	});
}
  
//-------------------------------------------------------------------------------------
// google maps
//-------------------------------------------------------------------------------------

var geocoder;
var map;
  
function initializeMap() {
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng( 15.359207153, 5.752121925);
	
	var myOptions = {
		zoom: 1,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
}

//-------------------------------------------------------------------------------------

function codeAddress() {
	var address = document.getElementById("address").value;
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[1].geometry.location);
			var marker = new google.maps.Marker({
				map: map,
				position: results[1].geometry.location
			});
		} else {
					  
			alert("Geocode was not successful for the following reason: " + status);
					
		}
	});
}

//-------------------------------------------------------------------------------------

function addMarker( fotodata ) {
	//console.log( fotodata );
	
	var coords = fotodata.location;
	console.log( coords );
	//locationsArray
	var options = {
		  //position
        position: new google.maps.LatLng( coords.latitude, coords.longitude ),
        map: map
    };
	var marker = new google.maps.Marker( options );

	google.maps.event.addListener( marker, 'click', function( marker, i ) {
        return function( ) {
          infowindow.setContent( "test" );
          infowindow.open( map, marker); 
        }
	} );
}

//-------------------------------------------------------------------------------------
        
	</script>

</body>
</html>