<?php
require_once 'Twilio.php';

$url = '166.78.181.9:27017/agendas';
$dbusername = 'poster';
$dbpassword = 'pass';


$m = new Mongo("mongodb://".$dbusername.":".$dbpassword."@".$url);

$db = $m->selectDB('agendas');

$collection = new MongoCollection($db, 'people');


$zip = $_POST['zip'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$user = array(
	'phone' => $phone,
	'zip' => $zip,
	'email' => $email
	);

$query = array("phone" => $phone);


$cursor = $collection->findOne($query);

		$sid = "AC5a93d04a51ef297e78f2518892f1a939"; // Your Account SID from www.twilio.com/user/account
		$token = "6802051d3cb9f0ffdbba46c138087c8f"; // Your Auth Token from www.twilio.com/user/account

		$client = new Services_Twilio($sid, $token);

		//print_r($m);



if($cursor){


		$m = "Looks like you are already signed up for Agenda Alerts. View your Agenda: http://50.56.172.7/agenda.php?zip={$zip}";
		$message = $client->account->sms_messages->create(
				'7204632007', // From a valid Twilio number
				$phone, // Text this number
				$m
			);

} else{  

	$collection->insert($user);
	$m = "Thanks for Signing up with Agenda Alerts.  Text 'stop' to unsubscribe. View your Agenda: http://50.56.172.7/agenda.php?zip={$zip}";
	$message = $client->account->sms_messages->create(
			'7204632007', // From a valid Twilio number
			$phone, // Text this number
			$m
		);
} 








?>