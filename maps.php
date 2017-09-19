<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Cab Routes</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
    <b>Source: </b>
    <select id="start">
      <option value="Thiruvalluvar Nagar Beach, Valmiki Nagar, Chennai, Tamil Nadu 600041">Thiruvalluvar</option>
      <option value="Phoenix Mall, Plot No. 142, Velachery Rd, Indira Gandhi Nagar, Velachery, Chennai, Tamil Nadu 600042">Phoenix Mall</option>
      <option value="VIT-chennai Campus Bus Stop">Vit University Chennai</option>
	
    </select>
    <b>Destination: </b>
    <select id="end">
    <option value="Thiruvalluvar Nagar Beach, Valmiki Nagar, Chennai, Tamil Nadu 600041">Thiruvalluvar</option>
      <option value="Phoenix Mall, Plot No. 142, Velachery Rd, Indira Gandhi Nagar, Velachery, Chennai, Tamil Nadu 600042">Phoenix Mall</option>
      <option value="Tambaram">Tambaram</option>
      <option value="VIT-chennai Campus Bus Stop">Vit University Chennai</option>
    </select>
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 13.082263, lng: 80.276434}
        });
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEEyhocF-EiDiu8Ax1TXa10nsRbEwWL-Q&callback=initMap">
    </script>
  </body>
</html>