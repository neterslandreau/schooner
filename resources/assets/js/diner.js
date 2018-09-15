$(function() {
	$('[id^="slug_"]').on('click', function() {
		var slug = this.id.split('_')[1];
		var quantity = $('#'+slug+'_quantity').find(":selected").text();
		var notes = $('#'+slug+'_notes').val();
		var extras = $('[id^="'+slug+'_extra_"]');
		var mextras = [];

		extras.each(function() {
			if (document.getElementById(this.id).checked) {
				var inarr = $.inArray(this.value, mextras);
				if (inarr) {
					mextras.push(this.value);
				}

			}
			console.log(mextras);
		});

		var url = 'cart';
		var data = {
			slug: slug,
			quantity: quantity,
			notes: notes,
			extras: mextras,
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
		var mextras = [];

		extras.each(function() {
			if (document.getElementById(this.id).checked) {
				var inarr = $.inArray(this.value, mextras);
				if (inarr) {
					mextras.push(this.value);
				}

			}
			console.log(mextras);
		});

		console.log(notes);

		var url = 'cart/update';
		var data = {
			slug: slug,
			quantity: quantity,
			notes: notes,
			extras: mextras,
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
				$('#payByCard').hide();
				$('#cartRow').html('<td colspan="4">Your cart is empty.</td>');

			} else {
				$('#cartTotal').html('$'+response);
			}
		});
	});

	$('#jumbotron-toggle').on('click', function() {
		$('#jumbotron').toggle();
	});

	$('#item-description').summernote({
			// toolbar: [
			// 	// [groupName, [list of button]]
			// 	['style', ['bold', 'italic', 'underline', 'clear']],
			// 	['font', ['strikethrough', 'superscript', 'subscript']],
			// 	['fontsize', ['fontsize']],
			// 	['color', ['color']],
			// 	['para', ['ul', 'ol', 'paragraph']],
			// 	['height', ['height']]
			// 	// ['misc', ['codeview'], ['fullscreen']]
			// ]
	});

	if (!window.location.pathname.match(/home|items|types/)) {
		Gmap.populateMap('5191 S State Road 7, Davie, FL 33314', 'Schooner or Later Bar & Grill');
	}

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
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var contentString = '<div>'+'<p>Schooner or Later Bar & Grill!</p><p>always open</p>'+'</div>';
		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		var title = 'Schooner or Later Bar & Grill of Davie';
		var marker = new google.maps.Marker({
			position: gcresults[0].geometry.location,
			title: title,
			map: map
		});
		marker.addListener('click', function() {
			// console.log('info clicked');
			infowindow.open(map, marker);
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
