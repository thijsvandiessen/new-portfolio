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
		success: displayInstaPictures, 
		dataType: 'jsonp', 
		cache: false
	});

//-------------------------------------------------------------------------------------

function displayInstaPictures (oInstagramFeedback) {

	console.log (oInstagramFeedback)
	// laat 32 foto's zien of minder als er minder zijn
	$('#fotos').html("");
	
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
				console.log (oInstagramFeedback.data[i].location.latitude)
				console.log (oInstagramFeedback.data[i].location.longitude)
				console.log (oInstagramFeedback.data[i])
				
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