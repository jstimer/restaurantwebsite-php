
<?php require "Restaurant.inc";	

	StartHTML( "HTML" );

	HTMLHeader();

	HTMLNav();
?>


<div class="body">

	
<p class="direction"> Get Directions!</p>
		
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;">
		<div id="gmap_canvas" style="height:500px;width:600px;"></div>
		<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
		<a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">wordpress 			themes</a></div>
		<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new 		google.maps.LatLng(41.1412911,-77.46115759999998),
		mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
		marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.1412911, -77.46115759999998)});
		infowindow = new google.maps.InfoWindow({content:"<b>HTML Hey! That's my lunch!</b><br/>404 N. Fairview St.<br/> Lock Haven" });
		google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
		infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
		</script>

<?php
	HTMLFooter();

?>
