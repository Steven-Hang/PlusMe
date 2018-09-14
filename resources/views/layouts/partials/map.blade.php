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
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {

        var myLatLng = {lat: -37.809277, lng: 144.960712};

        map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15
        });

        var contentString = '<div id="content">'+
            '<h1 id="firstHeading" class="firstHeading">Select Car Type</h1>'+
            '<p><b>Select Car Type</b>'+ '<br>'+
            '<a href="Car Type 1">CAR TYPE ONE</a>'+'<br>'+
            '<a href="Car Type 2">CAR TYPE TWO</a>'+'<br>'+
            '</p>';




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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQMzhiINq0pfDHofIycq6m_V2dRFULbPc&callback=initMap">
    </script>
