<?php

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

$collection->insert($user);






?>