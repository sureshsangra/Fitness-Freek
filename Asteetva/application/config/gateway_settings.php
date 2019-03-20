<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['payment_gateway'] = 'razorpay';

//Razorpay
$config['rzp_merchant_key'] = 'rzp_live_3tUkJk2hrO69R5';
$config['rzp_merchant_secret'] = 'aItSIvYq9rY4PApKWtcdmBAv';
  
//PayUMoney Settings
$config['payu_merchant_key'] = 'JBZaLc';
$config['salt'] = 'GQs7yium';
$config['service_provider'] = 'payu_paisa';
$config['gateway_url'] = 'https://test.payu.in/_payment/';
$config['success_url'] = 'http://psychostore.in/checkout/place_order';
$config['failure_url'] = 'http://psychostore.in/checkout/failure';
$config['cancel_url'] = '';

?>