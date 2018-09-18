<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100% !important;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100vh ;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
    <div id="map"></div>
    <script>
     
      var map, infoWindow;

      function initMap() {

            var markers= @json($locations);
            var marks = [];


        //Allows User input to Search 
        var input = document.getElementById('pac-input');

        //creates function to auto complete map searches 
        var autocomplete = new google.maps.places.Autocomplete(input);
        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);
        
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            //set zoom level after completed search
            map.setZoom(15);  
          }
        });
        
        //creates Map module 
        map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15
        });

            var directionsService = new google.maps.DirectionsService;
            var directionsDisplay = new google.maps.DirectionsRenderer;

        var contentString = 
            '<h1 id="firstHeading" class="firstHeading">Select Car Type</h1>'+
            '<p><b>Select Car Type</b>'+ '<br>'+
            '<a href="Car Type 1">CAR TYPE ONE</a>'+'<br>'+
            '<a href="Car Type 2">CAR TYPE TWO</a>'+'<br>'+
            '</p>';
        
            for(var i = 0; i < markers.length; i++){
            marks[i] = addMarkerToMap(markers[i]);
        }

        function addMarkerToMap(marker){

        var location = new google.maps.LatLng(marker.lat,marker.lng);

        marker = new google.maps.Marker({
            position: location,
            map: map,
            });
        }


        var myLatLng = {lat: -37.809277, lng: 144.960712};
        
        for (i = 0; i < markers.length; i++) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                        latit = marker.getPosition().lat();
                        longit = marker.getPosition().lng();
                        // console.log("lat: " + latit);
                        // console.log("lng: " + longit);
                    }
                })(marker, i));

                marker.addListener('click', function() {
                    directionsService.route({
                        // origin: document.getElementById('start').value,
                        origin: myLatLng,
                        // destination: marker.getPosition(),
                        destination: {
                            lat: latit,
                            lng: longit
                        },
                        travelMode: 'DRIVING'
                    }, function(response, status) {
                        if (status === 'OK') {
                            directionsDisplay.setDirections(response);
                        } else {
                            window.alert('Directions request failed due to ' + status);
                        }
                    });
                  });

              }
                

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Location Here!'
        });


        marker.addListener('click', function() {
        infowindow.open(map, marker);
        });

        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }


// To add the marker to the map, call setMap();

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQMzhiINq0pfDHofIycq6m_V2dRFULbPc&libraries=places&callback=initMap">
    </script>
