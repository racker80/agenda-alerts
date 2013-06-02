<?php
	// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);	

	require_once 'libs/Mongo_db.php';
	//require_once 'libs/Twilio.php';
	
	//$sid = "AC5a93d04a51ef297e78f2518892f1a939"; // Your Account SID from www.twilio.com/user/account
	//$token = "6802051d3cb9f0ffdbba46c138087c8f"; // Your Auth Token from www.twilio.com/user/account

	//$client = new Services_Twilio($sid, $token);
$m = new Mongo('166.78.181.194');
$db = $m->test;
$collection = $db->test;



//print_r($collection);

//$connection = new MongoClient();
//	phpinfo();

	// $message = $client->account->sms_messages->create(
	// 	'9172439244', // From a valid Twilio number
	// 	'6465097500', // Text this number
	// 	"Hello monkey!"
	// );



$item = array(
	'agenda_id'=>'07161980',
	'item_id'=>'1111',
	'type'=>'Austin Energy',
	'content'=>'testtestest'
	);


$item = json_encode($item);

echo $item;

$db.push($item);


?>
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
 

	<div class="hero-unit">
		<div class="container">
			<h1>Agenda Alerts</h1>
			<p class="lead">Get alerted about city council agenda items</p>


			<form class="form-inline">
				<fieldset>
					<legend>Controls Bootstrap supports</legend>
					<div class="control-group">
						<label class="control-label" for="input01">Email</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="input01">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="input01">Phone</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="input01">
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="input01">Zip</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="input01">
							<p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
						</div>
					</div>


					<div class="control-group">
						<label class="control-label" for="optionsCheckbox">Agenda Types</label>
						<div class="controls">
							<ul class="unstyled">
								<li>
									<label class="checkbox">
										<input type="checkbox" id="optionsCheckbox" value="option1">
										Agenda Type 1
									</label>
								</li>
								<li>
									<label class="checkbox">
										<input type="checkbox" id="optionsCheckbox" value="option1">
										Agenda Type 2
									</label>
								</li>
								<li>
									<label class="checkbox">
										<input type="checkbox" id="optionsCheckbox" value="option1">
										Agenda Type 3
									</label>
								</li>																
							</ul>
							
						</div>
					</div>



					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save changes</button>
						<button class="btn">Cancel</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>


 
        <!-- JavaScript libraries -->
        <script src="application/js/vendor/jquery.min.js"></script>
        <script src="application/js/vendor/bootstrap.js"></script>
        <!-- Javascripts -->
        <script src="application/js/plugins.js"></script>
        <script src="application/js/main.js"></script>

 
    </body>
</html>