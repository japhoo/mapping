<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Térkép</title>
  <style>
    #map {
      height: 100%;
      width: 100%;
    }

    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .label {
      color: #000;
      background-color: white;
      border: 1px solid #000;
      font-family: "Lucida Grande", "Arial", sans-serif;
      font-size: 12px;
      text-align: center;
      white-space: nowrap;
      padding: 2px;
    }

    .label.green {
      background-color: #58D400;
    }

    .label.red {
      background-color: #D80027;
      color: #fff;
    }

    .label.yellow {
      background-color: #FCCA00;
    }

    .label.turquoise {
      background-color: #00D9D2;
    }

    .label.brown {
      background-color: #BF5300;
      color: #fff;
    }
  </style>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPohe84NhPXKlVEVXxOsR9HQJkBpa6Z0o&v=3.exp" type="text/javascript"></script>
  <script src="http://cdn.sobekrepository.org/includes/gmaps-markerwithlabel/1.9.1/gmaps-markerwithlabel-1.9.1.js" type="text/javascript"></script>
</head>

<body>
  <div id="map"></div>
  <script>
    function initMap() {
      var bp = {
        lat: 47.538736,
        lng: 19.04631
      };
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: bp
      });
      var locations = [
        ['Label 1', 47.453740, 19.142052, 'green', 38, -3]
      ];
      var icons = {
        'green': {
          url: 'https://goo.gl/qvLZ4R',
          color: '#58D400'
        },
        'yellow': {
          url: 'https://goo.gl/G6HyHS',
          color: '#FCCA00'
        },
        'red': {
          url: 'https://goo.gl/6hkqX1',
          color: '#D80027'
        },
        'turquoise': {
          url: 'https://goo.gl/uLRpYZ',
          color: '#00D9D2'
        },
        'brown': {
          url: 'https://goo.gl/XTosFM',
          color: '#BF5300'
        }
      };
      var image = 'https://goo.gl/dqvvFA';
      var marker = new MarkerWithLabel({
        position: bp,
        map: map,
        icon: icons[item[3]].url,
        labelContent: item[0],
        labelAnchor: new google.maps.Point(38, -3),
        // the CSS class for the label
        labelInBackground: true
      });
    }
    initMap();
  </script>
</body>

</html>