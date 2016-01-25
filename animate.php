<!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
// var myCenter=new google.maps.LatLng(-6.869195,107.5422256);
// var myCenter=new google.maps.LatLng(-6.8727006,107.5430701);
var myCenter=new google.maps.LatLng(-6.910318,107.609667);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"Balai Kota Bandung."
  });

// infowindow.open(map,marker);

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:950px;height:600px;"></div>
</body>
</html>
