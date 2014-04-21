<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title>Oriflame</title> 
 <link href="stylemap.css" rel="stylesheet" type="text/css" />
 
				 <script
						src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
				</script>
<!--Starting page-->
				<script>
						function initialize()
						{
						var mapOpt = {
						  center:new google.maps.LatLng(61.6931088,27.254828),
						  zoom:12,
						  mapTypeId:google.maps.MapTypeId.ROADMAP
						  };
						var map=new google.maps.Map(document.getElementById("googleMap"),mapOpt);
						}

						google.maps.event.addDomListener(window, 'load', initialize);
				</script>
				
				
				
<!--Get current location-->		
				<script>
						function getLocation() {
							navigator.geolocation.getCurrentPosition(showPosition, showError);
						}
						function showPosition(position) {
							var latlon = position.coords.latitude + "," + position.coords.longitude;
							var img_url = "http://maps.googleapis.com/maps/api/staticmap?center=" + latlon + "&zoom=16&size=600x400&sensor=false";
							document.getElementById("googleMap").innerHTML = "<img src='" + img_url + "'>";
						}
						function showError(error) {
							switch (error.code) {
								case error.PERMISSION_DENIED:
									x.innerHTML = "User denied the request for Geolocation."
									break;
								case error.POSITION_UNAVAILABLE:
									x.innerHTML = "Location information is unavailable."
									break;
								case error.TIMEOUT:
									x.innerHTML = "The request to get user location timed out."
									break;
								case error.UNKNOWN_ERROR:
									x.innerHTML = "An unknown error occurred."
									break;
							}
						}
				</script>

				
 
</head>

<body>
	<table cellspacing="3px" align="center" >
		<!--THE FIRST ROW-->
		<tr bgcolor="#9933FF">
			<td colspan="3" height="140px" valign="center">
				<a style="text-decoration: none; color: #ffffff" href="http://karvanen.eu.gg">
					<div id="map">
						MAP
					</div>
					
					<div id="logo">
						<img src="smalllogo.png" height="100px" style="border: none;">
					</div>
				</a>
			</td>
		</tr>
		
		<tr>
			<td width="20%" bgcolor="#d5ddde" valign="top">
				<div id="aside">
				</div>
				
			</td>
		
			<td width="60%" bgcolor="#d5ddde" style="text-align: center;">
				<div id="googleMap">
				</div>
				
			</td>
			<td width="20%" bgcolor="#d5ddde" valign="top">
				<div id="aside">	
					<input type="submit" name="submit" id="button" value="Get my coordinates" onclick="getLocation()" />
				</div>
			</td>
		</tr>
	</table>	
</body>


</html>