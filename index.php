<?php  

	// let's start to resolve got conflict

	// this rasel

	// this is main

	// this 5 number line

	// Make Content Type into Text
header('Content-type: text/plain');

// Get IP Address
$IP_ADDRESS = $_SERVER['REMOTE_ADDR']; # Automatically get IP Address

// Input VPNAPI.IO API Key
// Create an account to get a free API Key
// Free API keys has a limit of 1000/requests per a day
$API_KEY = "1b2b8139f8e14b4fb926b7d1a5512b8c";

// API URL
$API_URL = 'https://vpnapi.io/api/' . $IP_ADDRESS . '?key=' . $API_KEY;

// Fetch VPNAPI.IO API 
$response = file_get_contents($API_URL);

// Decode JSON response
$response = json_decode($response);

//print_r($response);


// // Check if IP Address is VPN
if($response->security->vpn) {
	// Add code here for any IP Address that is a VPN
	echo $IP_ADDRESS, " is a VPN.\n";
} else {
	// Add code here for any IP Address that is not a VPN
	echo $IP_ADDRESS, " is not a VPN.\n";
}

// // Check if IP Address is Proxy
// if($response->security->vpn) {
// 	// Add code here for any IP Address that is a proxy
// 	echo $IP_ADDRESS, " is a proxy.\n";
// } else {
// 	// Add code here for any IP Address that is not a proxy
// 	echo $IP_ADDRESS, " is not a proxy.\n";
// }

// // Check if IP Address is TOR Exit Node
// if($response->security->vpn) {
// 	// Add code here for any IP Address that is a TOR Node
// 	echo $IP_ADDRESS, " is a TOR Node.\n";
// } else {
// 	// Add code here for any IP Address that is not a TOR Node
// 	echo $IP_ADDRESS, " is not a TOR Node.\n";
// }

 ?>