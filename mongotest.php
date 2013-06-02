<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project Name</title>
 
        <!-- Browser favicon -->
        <link rel="shortcut icon" href="favicon.png">
        
        <!-- CSS files -->
        <link rel="stylesheet" href="application/css/styles.css">
 
        <!-- Uncomment to include modernizer.js
        <script src="application/js/vendor/modernizr-2.6.2.min.js"></script>
        -->
 
    </head>
    <body>

<?php
 echo "Mongo Version: " .phpversion('mongo');
?>


<pre>
<?php
$url = '166.78.181.9:27017/agendas';
$username = 'poster';
$password = 'pass';


		$m = new Mongo("mongodb://".$username.":".$password."@".$url);

		$db = $m->selectDB('agendas');

		$collection = new MongoCollection($db, 'people');

		$query = array();

		$cursor = $collection->find($query);
		
		print_r($m);
		?>
</pre>
	
<br />
Insert Testing
<pre>
<?php		

foreach ($cursor as $doc) {
	echo "***";
    print_r($doc);
}
?>

</pre>
<hr />
<pre>
<?php

//$agendas = $m->agendas;
$user = array(
	'id' => "testid_".microtime() , 
	'types' => array('Test', 'Power'),
	'zip' => '78745',
	'phone' => '5126267616',
	'email' => 'aaronmontana+hackathon2@gmail.com'
	);

$collection->insert($user);
?>
</pre>
Try Catch Testing....
<pre>
<?php
// now $person has an _id field, so if we save it 
// again, we will get an exception
try {
    $collection->insert($user, array("w" => 1));
} catch(MongoCursorException $e) {
    echo "Can't save the same person twice!\n";
}

?>
</pre>

</body>
</html>


