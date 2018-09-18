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
  
      function initMap() {
        var markers= @json($locations);
      var marks = [];

   

    var lafarinera = {lat: 41.934029, lng: 2.265616};
    var vic = {lat: 41.930445, lng: 2.254321};
    var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 8,
    center: vic
    });
    var contentString = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h3 id="firstHeading" class="firstHeading">La Farinera</h3>'+
    '<img src="">'+
    '<div id="bodyContent">'+
    '<p> 84, Carrer de Sant Jordi, 82, 08500 Vic, Barcelona </p>'+
    '<button type="button" class="btn btn-primary">Informacio</button>'+
    '</div>'+
    '</div>';

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



        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 200
        });
            var marker_lafarinera = new google.maps.Marker({
            position: lafarinera,
            map: map,
            title: 'La farinera'
        });
        marker_lafarinera.addListener('click', function() {
            infowindow.open(map, marker_lafarinera);
        });
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQMzhiINq0pfDHofIycq6m_V2dRFULbPc&libraries=places&callback=initMap">
    </script>
