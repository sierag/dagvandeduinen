<h2>Programma en locatie</h2>
<div class="cl">

<p>Alle activiteiten vinden plaats op zaterdag 28 augustus en starten vanaf het plein onder aan het klimduin in het centrum van Schoorl.</p>

<table border="0" cellpadding="2" cellspacing="2" class="tbl">
	<tr>
		<th>Vanaf 12 uur</th>
		<td>Kunstroute door Schoorl</td>
	</tr>
	<tr>
		<th>Vanaf 16 uur</th>
		<td>Start wandeltochten</td>	</tr>
	<tr>
		<th>16.00 tot 21.00 uur</th>
		<td>Muziek op het plein</td>	</tr>
	<tr>
		<th>17.00 uur</th>
		<td>Tijdrit op mountainbikeparcours</td>	</tr>
	<tr>
		<th>18.45 uur</th>
		<td>Avontuurlijk loopevenement</td>	</tr>
	<tr>
		<td colspan="2">Plus: eten, drinken en gezelligheid bij de Schoorlse horeca.</td>	</tr>
</table><h2>Bereikbaarheid</h2>
	<p>Het klimduin is uitstekend bereikbaar per openbaar vervoer. Vanaf station Alkmaar kunt u met de bus 151 richting Schoorl, uitstappen halte Frederikslaan. Vandaar wandelt u in 10 - 15 minuten via de Laanweg naar het Klimduin.</p>
	
	<p>Wie met de auto komt kan parkeren op de voormalige sportvelden aan de Sportlaan in het centrum van Schoorl.</p></div>
<div class="cr">
  <div id="map_canvas" style="width:450px; height:400px"></div>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
	 var geocoder;
	  var map;
	  function initialize() {
	    geocoder = new google.maps.Geocoder();
	    var latlng = new google.maps.LatLng(-34.397, 150.644);
	    var myOptions = {
	      zoom: 14,
	      center: latlng,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    }
	    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	  }
	
	  function codeAddress() {
	    var address = "Klimduin, Schoorl";
	    if (geocoder) {
	      geocoder.geocode( { 'address': address}, function(results, status) {
	        if (status == google.maps.GeocoderStatus.OK) {
	          map.setCenter(results[0].geometry.location);
	          var marker = new google.maps.Marker({
	              map: map, 
	              position: results[0].geometry.location
	          });
	        } else {
	          alert("Geocode was not successful for the following reason: " + status);
	        }
	      });
	    }
	  }
	initialize();
	codeAddress();
	</script>

</div>
<div class="clear"></div>
<p>Wijzigingen voorbehouden. Kijk voor het laatste nieuws op deze website!</p>