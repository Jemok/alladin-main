<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'app/Mage.php';
Mage::app();
echo "<pre>";	





$token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IjVkNjZhMTk0MjU3NzgzZTk4MmFjYmIzZTg5YzQyODhkMTRmNDYyZTkifQ.eyJhenAiOiI0NDQ2ODQyNjA4NTAtZWVmZm1uM2c5MWwxbmZmYTFvbjV0MzJnb2RtdGxkZWwuYXBwcy5nb29nbGV1c2VyY29udGVudC5jb20iLCJhdWQiOiI0NDQ2ODQyNjA4NTAtam1ibzR2YmFzcWNobW90MTIydDFtZmdlaWxrYmVzdmwuYXBwcy5nb29nbGV1c2VyY29udGVudC5jb20iLCJzdWIiOiIxMTY3NzE3MjQ3MzE5MjE3OTY1NjYiLCJlbWFpbCI6Im1zcy54b2xvQGdtYWlsLmNvbSIsImVtYWlsX3ZlcmlmaWVkIjp0cnVlLCJpc3MiOiJodHRwczovL2FjY291bnRzLmdvb2dsZS5jb20iLCJpYXQiOjE0OTMyMDI5NzIsImV4cCI6MTQ5MzIwNjU3MiwibmFtZSI6IkNocmlzIGhlbXN3b3J0aCIsInBpY3R1cmUiOiJodHRwczovL2xoNi5nb29nbGV1c2VyY29udGVudC5jb20vLWdVVThKTEVYdjJZL0FBQUFBQUFBQUFJL0FBQUFBQUFBQUFBL0FIYWxHaHJiTFdRWnFxeU9qbHRhdWdDMm1vR3lZMEI4M1Evczk2LWMvcGhvdG8uanBnIiwiZ2l2ZW5fbmFtZSI6IkNocmlzIiwiZmFtaWx5X25hbWUiOiJoZW1zd29ydGgiLCJsb2NhbGUiOiJlbiJ9.DS8fcJkWqzorrRWlJFvD3gZgtF-6ss9bIlRxsyqHsBYlNMIz6ZbQCf380AaTeuzl0vraaJVHRHRNjKohyWQ0XRSexZQ9CqnKBM7VWAC99iyErWIQikhUyxN5bVZqXID64MjzRK6idjg7TI_Uw7QdThz4oBrgjCHFqvX5ch9-J_1Bn-Xca0ezXgV32jwDTJxesOKWOypsf_0CAKMQXcNusP6h3Ygfi3nOEkZ4oazJ9VUVH73s0m7trAIWO1u0kzhJFoZk2e6uw8uuOQ7ViULlNZweDwOGylPNaUDW9RdtcW1KRbmL2a4Q0J0K-ulQoweCuFFuLhiKHqiEqCA_cFo1YA';

$user_details = 'https://www.googleapis.com/oauth2/v3/tokeninfo?alt=json&id_token='.$token;
		$response = file_get_contents($user_details);

		print_r($response); die;
		$response = json_decode($response);

// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, '/usr/bin/curl https://www.favoriteusa.com/cron.php');

//  //usr/bin/curl https://www.favoriteusa.com/cron.php
//   $resp = curl_exec($curl);

// curl_close($curl);
// $payments = Mage::getSingleton('payment/config')->getActiveMethods();
// 		$country_id = $this->getRequest()->getParam('country_id'); 
//         $methods = array();
//         foreach ($payments as $paymentCode=>$paymentModel) {
//         	if($paymentCode== 'mssrazorpay'){
//  				$paymentTitle = Mage::getStoreConfig('payment/'.$paymentCode.'/title');
//         		$methods[] = array(
//         					'value'   => $paymentTitle,
// 		                    'code' => $paymentCode,
// 		                );
//         	}

//         	if($paymentCode== 'cashondelivery'){
//         		if($country_id =='IN'){
//  				$paymentTitle = Mage::getStoreConfig('payment/'.$paymentCode.'/title');
//         		$methods[] = array(
//         					'value'   => $paymentTitle,
// 		                    'code' => $paymentCode,
// 		                );
//         	    }
//         	}


// 	           if(Mage::getStoreConfig('magentomobileshop_payment/'.$paymentCode.'/'.$paymentCode.'_status')):
// 	                $paymentTitle = Mage::getStoreConfig('payment/'.$paymentCode.'/title');
// 	            	if($paymentCode == 'authorizenet')
// 		                $methods[] = array(
// 		                    'value'   => $paymentTitle,
// 		                    'code' => $paymentCode,
// 		                    'cards' => array('Visa'=>'VI','Mastercard'=>'MC','American Express'=>'AE','Discover'=>'DI'),
// 		                );
// 		            else
// 		            	$methods[] = array(
// 		                    'value'   => $paymentTitle,
// 		                    'code' => $paymentCode,
// 		                );
// 	           endif;
//         }

//         print
// 		echo json_encode($methods);