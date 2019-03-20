<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Delhivery
$config['delhivery_url'] = 'https://track.delhivery.com';
$config['delhivery_token'] = '1c7d53e103e688f064f4d8f15c1185a2d07b6575';
$config['delhivery_warehouse'] = 'PSYCHONETSOLUTIONS';
$config['delhivery_logo'] ='images/shipping/delhivery.png';
$config['company_logo'] ='images/shipping/shipping_logo.png';

//Pickup Location
$config['pickup_location'] = array(
									'add' 	=> '#35, Mane Building, 7th Main Road, Srinivagalu Tank Bed Layout, near back door Balaji Apartments',
									'city' 	=> 'Bangaluru',
									'country' => 'India',
									'name' 	=> $config['delhivery_warehouse'],  // Use client warehouse name
									'phone' 	=> '7387045828',
									'pin' 	=> '560034',
									'state' 	=> 'Karnataka'
									);

// $config['return_address'] = array(
// 									'first_name' => 'Ishkaran',
// 									'last_name' => 'Singh',
// 									'address_1' 	=> '#35, Mane Building, 7th Main Road',
// 									'address_2' => 'ST Bed Layout,',
// 									'city' 	=> 'Bengaluru',
// 									'country' => 'India',									
// 									'phone_number' 	=> '7387045828',
// 									'pincode' 	=> '560034',
// 									'state' 	=> 'Karnataka'
// 									);

?>