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
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
 

<?php
$url = '166.78.181.9:27017/agendas';
$dbusername = 'poster';
$dbpassword = 'pass';


$m = new Mongo("mongodb://".$dbusername.":".$dbpassword."@".$url);

$db = $m->selectDB('agendas');

$collection = new MongoCollection($db, 'agendas');

$zip  = $_GET['zip'];


// $zip = $_POST['zip'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];

// $user = array(
// 	'phone' => $phone,
// 	'zip' => $zip,
// 	'email' => $email
// 	);

?>

<div class="hero-unit">
	<div class="container">
		<h1>Upcoming Austin City Council Agenda</h1>
		<br>
		<table class="table">
			<tbody>
				<tr>
					<th>When</th>
					<td class="lead">June 6th, 2013</td>
				</tr>
				<tr>
					<th>Where</th>
					<td class="lead"><a href="http://goo.gl/maps/t6nsP">301 W. Second Street, Austin, TX</a></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td class="lead">City Clerk, 512-974-2210</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>


	<div class="container">

<dl class="agenda-list custom-agenda">
	<dt class="category austin-energy">Newest Items Pulled from Database</dt>

<?php  

if(empty($zip)){
	$query = array('agenda_id' => '2013-06-04');
}
else { 
	$query = array('agenda_id' => '2013-06-04', 'zipcode' => $zip);
}
$agendas = $collection->find($query);

foreach ($agendas as $agenda) {

	echo '<dd class=\"item\"> <p> <a href=\"#\">'.$agenda['id'].'</a> - '.$agenda['content'].'</p><small>'.$agenda['category'].'</small> </dd>';


}

?>

</dl>




	</div>



 
        <!-- JavaScript libraries -->
        <script src="application/js/vendor/jquery.min.js"></script>
        <script src="application/js/vendor/bootstrap.js"></script>
        <!-- Javascripts -->
        <script src="application/js/plugins.js"></script>
        <script src="application/js/main.js"></script>

 
    </body>
</html>