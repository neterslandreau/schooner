$(function() {
 //    if (!window.location.pathname.match(/home|items|types/)) {
	// 	Gmap.populateMap('2931 Griffin Rd Fort Lauderdale, FL 33312', 'David\'s Diner');
	// }
    $('[id^="slug_"]').on('click', function() {
    	var slug = this.id.split('_')[1];
    	var quantity = $('#'+slug+'_quantity').find(":selected").text();
    	var notes = $('#'+slug+'_notes').val();

    	var url = 'cart';
    	var data = {
    		slug: slug,
    		quantity: quantity,
    		notes: notes,
    		_token: Laravel.csrfToken
    	};

		$.ajaxSetup({
		   headers: {
		       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		   }
		});

    	$.post(url, data, function (response, status) {
    		console.log(response);
			location.reload();
    		// $('#cartTotal').html('$'+response['cartTotal']);
    		// if (typeof $('#row_'+response['row'].__raw_id).html() == 'undefined') {
    		// 	newRow = makeRow(response['row'], slug);
    		// 	console.log(newRow);
	    	// 	$('#cartBody').prepend(newRow);
    		// }
    	});
		// $('#cart').modal('show');

    });

    $('[id^="qty_"]').on('change', function() {
    	var slug = this.id.split('_')[1];
    	var quantity = $('#qty_'+slug+' :selected').val();
    	var notes = $('#notes_'+slug).val();

    	console.log(notes);

    	var url = 'cart/update';
    	var data = {
    		slug: slug,
    		quantity: quantity,
    		notes: notes,
    		_token: Laravel.csrfToken
    	};

		$.ajaxSetup({
		   headers: {
		       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		   }
		});

    	$.post(url, data, function (response, status) {
    		console.log(response);
    		$('#cartTotal').html('$'+response)
    	});
    });

    $('[id^="remove_"]').on('click', function() {
    	var slug = this.id.split('_')[1];

    	var url = 'cart/remove';
    	var data = {
    		slug: slug,
    		_token: Laravel.csrfToken
    	};

		$.ajaxSetup({
		   headers: {
		       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		   }
		});

    	$.post(url, data, function (response, status) {
    		console.log(response);
    		$('#row_'+slug).html('');
    		if (response < 1) {
    			$('#checkoutButton').hide();
    			$('#cartRow').html('<td colspan="4">Your cart is empty.</td>');

    		} else {
	    		$('#cartTotal').html('$'+response);
    		}
    	});
    });

    $('#jumbotron-toggle').on('click', function() {
    	$('#jumbotron').toggle();
    });

    $('#item-description').markdown({
    	autofocus:false,
    	savable:false
    })

});
function makeRow(row, slug) {
	var newRow;
	var selected;
	var url = 'cart';

	newRow = '<tr id="row_'+row.__raw_id+'"><td><label>'+row.name+'</label></td><td><label for "qty">Qty</label><select id="qty_'+row.__raw_id+'">';
	for (var x = 1; x <= 10; x++) {
		if (x == row.qty) {
			selected = 'selected';
		} else {
			selected = '';
		}
		newRow += '<option value="'+x+'" '+selected+'>'+x+'</option>';
	}
	newRow += '</select></td>';
	newRow += '<td><button id="update_'+row.__raw_id+'" class="btn btn-default" title="Update Quantity" type="button" value="update"><span class="glyphicon glyphicon-save"></span></button></td>';
	newRow += '<td><button id="remove_'+row.__raw_id+'" class="btn btn-default" title="Remove Item" type="button" value="remove"><span class="glyphicon glyphicon-remove"></span></button></td>';
	newRow += '</tr>';
	var data = {
		slug: slug,
		quantity: row.qty,
		_token: Laravel.csrfToken
	};
	$.post(url, data, function (response, status) {
		console.log('post newRow');
	});
	return newRow;

}
/**
 * Gmap application wide namespace
 */
var Gmap = {};

// Gmap.populateMap = function(addr, title, canvas) {
// 	var displayElement;
// 	if (typeof canvas != 'undefined') {
// 		displayElement = canvas;
// 	} else {
// 		displayElement = 'map_canvas';
// 	}
// 	var Geocoder = new google.maps.Geocoder();
// 	Geocoder.geocode({address: addr}, function(gcresults) {
// 		var mapProperties = {
// 			center: gcresults[0].geometry.location,
// 			zoom: 13,
// 			mapTypeId: google.maps.MapTypeId.ROADMAP
// 		};
// 		var contentString = '<div>'+'<div>'+'<h1><b>David\'s Diner</b></h1>'+'</div>'+'<div>'+'<p>This is David\'s Diner!</p>'+'</div>';
// 		var infowindow = new google.maps.InfoWindow({
// 			content: contentString
// 		});
// 		var marker = new google.maps.Marker({
// 			position: gcresults[0].geometry.location,
// 			title: title
// 		});
// 		// marker.addListener('click', fuction() {
// 		// 	console.log('info clicked');
// 		// 	infowindow.open(map, marker);
// 		// });
// 		var map = new google.maps.Map(document.getElementById(displayElement), mapProperties);
// 		marker.setMap(map);
// 	});
// }
// Gmap.getLocation = function() {
// 	if (navigator.geolocation) {
// 		browserSupportFlag = true;
// 		navigator.geolocation.getCurrentPosition(function(position, error) {
// 			initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
// 			var Geocoder = new google.maps.Geocoder();
// 			Geocoder.geocode({latLng: initialLocation}, function(gcresults) {
// 				var city_name = gcresults[0].address_components[2].long_name;
// 				var state_abbr = gcresults[0].address_components[4].short_name;
// 				$('#textPosition').html(city_name+', '+state_abbr);
// 				$('#browserLocation').html(city_name+', '+state_abbr);
// 				var pdata = {
// 					browserLocation: city_name+', '+state_abbr
// 				};
// 				var Url = 'sessions/session_handler.php';
// 				$('#confirmLocation').live('click', function() {
// 					$.post(Url, pdata, function(results, data) {
// //						console.log(results);
// 					})
// 				});
// 			});
// 		});
// 	} else {
// 		console.log('need other way to get location');
// 	}
// }
