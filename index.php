<!DOCTYPE html>
<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(-6.2297465,106.829518),
    zoom:10,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  
  var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:1200px;height:800px;"></div>

</body>
</html>