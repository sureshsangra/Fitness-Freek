<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmbKvsQt3_cHXIayc5FJ1hoS3sXTHaP48&callback=get_location">
</script>

<script>

function get_location()
{
    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(show_position, error);
    }
    else
    {
        //alert("Geolocation is not supported by this browser.");
        update_alert("Uh Oh, seems like there was some issue, you will have to fill up the address manually, using your own hands. All the best.", 'error');
    }
}

function show_position(position)
{	
    var geocoder = new google.maps.Geocoder;
    var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  	geocoder.geocode({'location': coords}, get_formatted_address );
}

function error(err)
{
	console.log(err);
  	update_alert("Uh Oh, seems like there was some issue, you will have to fill up the address manually, using your own hands. All the best.", 'error');
}

function update_alert(text, status)
{
	var alert = document.getElementById('alert');
	switch (status)
	{
		case 'success' :
			alert.setAttribute('class', 'alert alert-success alert-dismissible fade in');
			break;

		case 'error' :
			alert.setAttribute('class', 'alert alert-danger alert-dismissible fade in');
			break;
	}
	
	alert.childNodes[1].data = text;
	
}

function get_formatted_address(results, status)
{
	if (status === google.maps.GeocoderStatus.OK)
	{
		if (results[1])
		{
			fill_address_form(results[0].address_components);
		}
		else
		{
			window.alert('No results found');
		}
	}
	else
	{
	  window.alert('Geocoder failed due to: ' + status);
	}
}

function fill_address_form(address)
{
	var total_parts = address.length - 1;
	
	var address1 = document.getElementById('address1');
	
	address1.value = address[0].long_name + ", " + address[1].long_name;
	address2.value = address[2].long_name + ", " + address[3].long_name;
	city.value = address[total_parts - 4].long_name;
	state.value = address[total_parts - 2].long_name;

	//couontry.value = address[total_parts - 1].long_name; Country is India for now, so no need
	
	pincode.value = address[total_parts].long_name;

	update_alert("Location confirmed, please fill in the remaining info. You can improve the location details as well, to help our minions find you more easily.", 'success');
}
</script>