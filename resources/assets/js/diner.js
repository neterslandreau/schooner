$( document ).ready(function() {
    if (!window.location.pathname.match(/home|items|types/)) {
		Gmap.populateMap('2931 Griffin Rd Fort Lauderdale, FL 33312', 'David\'s Diner');
	}
});
/**
 * Gmap application wide namespace
 */
var Gmap = {};

Gmap.populateMap = function(addr, title, canvas) {
	var displayElement;
	if (typeof canvas != 'undefined') {
		displayElement = canvas;
	} else {
		displayElement = 'map_canvas';
	}
	var Geocoder = new google.maps.Geocoder();
	Geocoder.geocode({address: addr}, function(gcresults) {
		var mapProperties = {
			center: gcresults[0].geometry.location,
			zoom: 12,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var marker = new google.maps.Marker({
			position: gcresults[0].geometry.location,
			title: title
		});
		var map = new google.maps.Map(document.getElementById(displayElement), mapProperties);
		marker.setMap(map);
	});
}
Gmap.getLocation = function() {
	if (navigator.geolocation) {
		browserSupportFlag = true;
		navigator.geolocation.getCurrentPosition(function(position, error) {
			initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
			var Geocoder = new google.maps.Geocoder();
			Geocoder.geocode({latLng: initialLocation}, function(gcresults) {
				var city_name = gcresults[0].address_components[2].long_name;
				var state_abbr = gcresults[0].address_components[4].short_name;
				$('#textPosition').html(city_name+', '+state_abbr);
				$('#browserLocation').html(city_name+', '+state_abbr);
				var pdata = {
					browserLocation: city_name+', '+state_abbr
				};
				var Url = 'sessions/session_handler.php';
				$('#confirmLocation').live('click', function() {
					$.post(Url, pdata, function(results, data) {
//						console.log(results);
					})
				});
			});
		});
	} else {
		console.log('need other way to get location');
	}
}
