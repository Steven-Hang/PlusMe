
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
      //https://risan.io/track-user-location-google-maps.html

      var map, infoWindow;

      function initMap() {
            const $info = document.getElementById('info');
            var markers= @json($locations);
            var marks = [];

        //Allows User input to Search
        var input = document.getElementById('searchMap');

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
          var id = marker.id;

          document.getElementById("locations-near-you").innerHTML = address;


        var contentString =
            '<h5 id="firstHeading" class="firstHeading">'+ address +'</h1>'+
            '<p><b>' + state + '</b>'+ '<br>'+
            '<p><b>' + "Please Select Your Car Type" + '</b><br>' +
            '<button onclick="selectSUV()"> SUV </button>'+ "(Available)" +'<br>'+
            '<button onclick="selectSedan()"> Sedan </button>'+ "(Available)" +'<br>'+
            '<button onclick="selectHatchback()"> Hatchback </button>'+ "(Available)" +'<br>'+
            '</p>';


        var location = new google.maps.LatLng(marker.lat,marker.lng);

        var marker = new google.maps.Marker({
            position: location,
            icon: './css/icons/parkingloticon.png',
            map: map,
            });


        var infoWindow = new google.maps.InfoWindow;

        google.maps.event.addListener(marker, 'click', function(){
            infoWindow.setContent(contentString);
            infoWindow.open(map, marker);
            document.getElementById('info').innerHTML = address;
            document.getElementById('location_id').value = id;
        });


        return marker;

        }//END addMarkerToMap

        var myLatLng = {lat: -37.809277, lng: 144.960712};

        var RMITmarkeroptions = {
            url: './css/icons/RMITicon.png',
            size: new google.maps.Size(101, 101),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(30, 30)
        };

        //Marker for Near RMIT
        var marker = new google.maps.Marker({
          position: myLatLng,
          icon: RMITmarkeroptions,
          map: map,
          title: 'Location Here!'
        });

        function addClickEventListenerToMap(map) {
          // add 'tap' listener
          map.addEventListener('tap', function (evt) {
            var coords =  map.screenToGeo(evt.currentPointer.viewportX, evt.currentPointer.viewportY);
            findNearestMarker(coords);
          }, false);
        }

        marker.addListener('click', function() {
        infowindow.open(map, marker);
        });


         //User Location Marker
         var userLocation = new google.maps.Marker({
          map: map,
          icon: './css/icons/userlocationicon.png',
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


      //Radius around User Location Marker
      var radiusAroundUser = new google.maps.Circle({
                strokeColor: '#82CAFF',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '#82CAFF',
                fillOpacity: 0.35,
                map: map,
                radius: 450
                });
        radiusAroundUser.bindTo('center', userLocation, 'position');

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
      

      }//END MAPINIT

      //Handle Geolocation Errors
      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }

      function selectSUV(){
        document.getElementById('carType').innerHTML = "SUV";
        document.getElementById('carType').value = "SUV";
      }
      function selectSedan(){
        document.getElementById('carType').innerHTML = "Sedan";
        document.getElementById('carType').value = "Sedan";
      }
      function selectHatchback(){
        document.getElementById('carType').innerHTML = "Hatchback";
        document.getElementById('carType').value = "Hatchback";
      }

      function updateStartDate(){
        var getStartDate = document.getElementById('startDate').value;

        document.getElementById("startDateField").innerHTML = getStartDate;
	      document.getElementById("startDateField").value = getStartDate;

    }

    //jquery which disables booking button until location is selected
    $("form").submit(function() {
    if ( !$('#location_id')[0].value ) { return false; }
    });

    function calcHours(){

        var getEndDate = document.getElementById('endDate').value;

          document.getElementById("endDateField").innerHTML = getEndDate;
          document.getElementById("endDateField").value = getEndDate;

        var start = document.getElementById("startDateField").value;
        var end = document.getElementById("endDateField").value;
        var startDate = new Date(start);
        var endDate = new Date(end);
        var diff = Math.abs(startDate.getTime() - endDate.getTime()) / 3600000;

        document.getElementById("hoursField").innerHTML = diff;
	      document.getElementById("hoursField").value = diff;

        //jQuery which enables booking button if fields are filled


        //Calc Price Based on Hours
        var totalCost = diff * 3;
        document.getElementById("hoursField").innerHTML = "$"+totalCost;
        document.getElementById("Pricefield").value = "$"+totalCost;
    }
      //Dates Cannot be Chosen Before Today
       var today = new Date().toISOString().split('T')[0];
       document.getElementsByName("start_date")[0].setAttribute('min', today);
       document.getElementsByName("end_date")[0].setAttribute('min', today);


</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa8cbnvhb-K4OqdgY_aQbL0kHuGCa3wWA&libraries=places&callback=initMap">
</script>

