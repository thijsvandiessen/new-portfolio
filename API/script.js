//onload
$(document).ready(Onload);

function Onload() {
	//laad locaties
	loadInstagramEntries();
	//teken de kaart
	//initMap();
}

var photoLocation = ''; //global

function loadInstagramEntries() {

	var token = '173649795.1677ed0.5517ce4b9f784c5b921e16f9f1a23758', userid = 173649795, num_photos = 1;
	
	$.ajax({
		url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent', 
		dataType: 'jsonp',
		type: 'GET',
		cache: false,
		data: {access_token: token, count: num_photos},

		success: function(InstagramFeedback){

	 		console.log(InstagramFeedback);

			for( i in InstagramFeedback.data ){
				$('#fotos').append('<img src="' + InstagramFeedback.data[i].images.standard_resolution.url + '"><h1>' + InstagramFeedback.data[i].location.name + '</h1><p>By <a href="'+ InstagramFeedback.data[i].link + '">'+ InstagramFeedback.data[i].user.username + '</a></p>');

				photoLocation = {lat: InstagramFeedback.data[i].location.latitude, lng: InstagramFeedback.data[i].location.longitude};
					
				console.log(photoLocation);

				initMap();

			}


		},
		error: function(InstagramFeedback){
			console.log(data); // send the error notifications to console
		}
	});
}


function initMap() {

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 10,
		center: photoLocation
	});

	var marker = new google.maps.Marker({
		position: photoLocation,
		map: map,
		title: 'Hello World!'
	});
};


//-------------------------------------------------------------------------------------

// function displayInstaPictures (InstagramFeedback) {

// 	console.log (InstagramFeedback)
// 	// laat 32 foto's zien of minder als er minder zijn
// 	$('#fotos').html("");
	
// 	var iNumUsedPics = 0;
// 	var iMaxNumPictures = 2;

// 	for ( var i=0; i<InstagramFeedback.data.length; i++ ) {

// 		var sFotoOutput = 
// 			'<div class="foto">'
// 			// haal foto's op met standaard resolutie
// 			+ '<img class="picture" src="' + InstagramFeedback.data[ i ].images.standard_resolution.url + '" />'
// 			// haal username op
// 			+ '<p>' + InstagramFeedback.data[i].user.username + '</p>';
			
// 			// informatie over de locatie
// 			console.log (InstagramFeedback.data[i].location.latitude)
// 			console.log (InstagramFeedback.data[i].location.longitude)
// 			console.log (InstagramFeedback.data[i])
				
// //-------------------------------------------------------------------------------------

// 			// if profile pic is undefined post the default
// 			var sProfilePic = InstagramFeedback.data[i].user.profile_picture;	
			
// 			// console log profile pic
// 			// console.log( "### " + i + ": " + sProfilePic );
				
// 			if ( sProfilePic == undefined ) {
// 				//console.log( "!!!!!!!!" );
				
// 				// default pic
// 				sFotoOutput += '<img class="profile_picture" src="profile_default.jpg" />';
// 			} else {
// 				// haal profile picture op
// 				sFotoOutput += '<img class="profile_picture" src="' + sProfilePic + '" />';
// 			}
		
// //-------------------------------------------------------------------------------------


// 			// sluit div
// 			sFotoOutput += '</div>';
				
// //-------------------------------------------------------------------------------------
				
// 			// als er geen locatie is
// 			if (InstagramFeedback.data[i].location != null ) {
// 				//console.log (InstagramFeedback.data[i].location)
				
// 				// alle locaties in instagramLocation var
// 				var instagramLocation = InstagramFeedback.data[i].location
				
// 				// alle content wordt in 1 keer geplaatst
// 				$('#fotos').append( sFotoOutput );
				
// 				// voeg marker toe aan de map
// 				addMarker( InstagramFeedback.data[i]);
				
// 				iNumUsedPics++;
// 			}
// //-------------------------------------------------------------------------------------
		
		
// 			// als i niet max kan zijn ga dan niet op zoek naar meer plaatjes
// 			if ( iNumUsedPics >= iMaxNumPictures - 1 ) break;	
// 		}
			
// 		function codeAddress() {
// 		var address = document.getElementById("address").value;
// 		geocoder.geocode( { 'address': address}, function(results, status) {
//       		if (status == google.maps.GeocoderStatus.OK) {
// 				map.setCenter(results[1].geometry.location);
// 				var marker = new google.maps.Marker({
// 					map: map,
// 					position: results[1].geometry.location
// 				});
// 			} else {
// 				alert("Geocode was not successful for the following reason: " + status);
//     		}
// 		});
// 		}
// 	}
// }

// //-------------------------------------------------------------------------------------

// function codeAddress() {
// 	var address = document.getElementById("address").value;
// 	geocoder.geocode( { 'address': address}, function(results, status) {
// 		if (status == google.maps.GeocoderStatus.OK) {
// 			map.setCenter(results[1].geometry.location);
// 			var marker = new google.maps.Marker({
// 				map: map,
// 				position: results[1].geometry.location
// 			});
// 		} else {
// 			  alert("Geocode was not successful for the following reason: " + status);
//       	}
// 	});
// }
  
//-------------------------------------------------------------------------------------
// google maps
//-------------------------------------------------------------------------------------

// var geocoder;
// var map;
  
// function initializeMap() {
// 	geocoder = new google.maps.Geocoder();
// 	var latlng = new google.maps.LatLng( 52, 5);
	
// 	var myOptions = {
// 		zoom: 5,
// 		center: latlng,
// 		mapTypeId: google.maps.MapTypeId.ROADMAP
// 	}
	
//     map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
// }

// //-------------------------------------------------------------------------------------

// // function codeAddress() {
// // 	var address = document.getElementById("address").value;
// // 	geocoder.geocode( { 'address': address}, function(results, status) {
// // 		if (status == google.maps.GeocoderStatus.OK) {
// // 			map.setCenter(results[1].geometry.location);
// // 			var marker = new google.maps.Marker({
// // 				map: map,
// // 				position: results[1].geometry.location
// // 			});
// // 		} 

// // 	});
// // }

// //-------------------------------------------------------------------------------------

// //console.log(photoLocationLatitude);
// //console.log(photoLocationLongitude);


// function addMarker(fotodata) {
// 	console.log( fotodata );
	
// 	var coords = fotodata.location;
// 	console.log(coords);
// 	//locationsArray
// 	var options = {
// 		  //position
//         position: new google.maps.LatLng( 52.000, 5.000 ),
//         map: map
//     };
// 	var marker = new google.maps.Marker( options );

// 	google.maps.event.addListener( marker, 'click', function( marker, i ) {
//         return function( ) {
//           infowindow.setContent( "test" );
//           infowindow.open( map, marker); 
//         }
// 	} );
// }




//-------------------------------------------------------------------------------------