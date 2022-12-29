<?php 

	// YetiREST API

	require_once( __DIR__ . '/YetiREST/vendor/autoload.php');

	// Variables

	$firstname = $_POST["firstname"];

	$lastname = $_POST["lastname"];

	$email = $_POST["email"];

	// 'lastname' (required), 'firstname' and 'email' (optional) are the field's name on destination module in yetifore, add other other required fields if needed.

  	$recorddata = array(
    		'lastname' => $lastname,
    		'firstname' => $firstname,
    		'email' => $email
  	);

	$moduleName = 'Contacts'; // Could be replaced with Accounts, Leads, ...

	// create new record in Yetiforce CRM

	$api = new \App\Portal();
	$api->debug = true;
	$api->init();

	if ($login = $api->login()) {

	$response = $api->json('POST', $moduleName."/Record", $recorddata);

  	echo '<pre>';

  	print_r($response);

  	echo '</pre>';

	}



