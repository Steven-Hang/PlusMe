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

        infoWindow = new google.maps.InfoWindow;
       
        //Creates Markers to be added from database
        for(var i = 0; i < markers.length; i++){
        marks[i] = addMarkerToMap(markers[i]);
        }

        //Creates Location Markers 
        function addMarkerToMap(marker){

          var address = marker.address;
          var state = marker.state;
          var zip = marker.zip;

        var contentString = 
            '<h5 id="firstHeading" class="firstHeading">'+ address +'</h1>'+
            '<p><b>' + state + '</b>'+ '<br>'+
            '<a href="Car Type 1">CAR TYPE ONE</a>'+'<br>'+
            '<a href="Car Type 2">CAR TYPE TWO</a>'+'<br>'+
            '</p>';
         
        var location = new google.maps.LatLng(marker.lat,marker.lng);

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            });

        var infoWindow = new google.maps.InfoWindow;
        
        google.maps.event.addListener(marker, 'click', function(){
            infoWindow.setContent(contentString);
            infoWindow.open(map, marker);
        });
        
        return marker;
        
        }//END addMarkerToMapFu

        var myLatLng = {lat: -37.809277, lng: 144.960712};
        
        //Marker for Near RMIT 
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Location Here!'
        });

        marker.addListener('click', function() {
        infowindow.open(map, marker);
        });
         //User Location Marker 
         var userLocation = new google.maps.Marker({
          map: map,
          animation: google.maps.Animation.DROP,
        });
        
        //Add a Sweet Bounce Animation To User Marker 
        function toggleBounce() {
        if (userLocation.getAnimation() !== null) {
          userLocation.setAnimation(null);
        } else {
          userLocation.setAnimation(google.maps.Animation.BOUNCE);
        }
      }

        //geolocation FIND USER LOCATION and Track.
        if (navigator.geolocation) {
          navigator.geolocation.watchPosition(function(position) {
            
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            userLocation.setPosition({
                lat: position.coords.latitude,
                lng: position.coords.longitude
            });
            userLocation.addListener('click', toggleBounce);
            map.setCenter(pos);

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        addYourLocationButton(map, userLocation);
 
      }//END MAPINIT
        
      //Handle Geolocation Errors
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    
   
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQMzhiINq0pfDHofIycq6m_V2dRFULbPc&libraries=places&callback=initMap">
</script>
