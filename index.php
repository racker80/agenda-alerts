<?php

// 	//require_once 'libs/Mongo_db.php';
// 	require_once 'libs/Twilio.php';
	
// 	$sid = "AC5a93d04a51ef297e78f2518892f1a939"; // Your Account SID from www.twilio.com/user/account
// 	$token = "6802051d3cb9f0ffdbba46c138087c8f"; // Your Auth Token from www.twilio.com/user/account

// 	$client = new Services_Twilio($sid, $token);

// $m = new Mongo('166.78.181.9');
// $db = $m->test;
// $collection = $db->test;


// print_r($collection);

// //$mdb = new Mongo_db('166.78.181.194');

// //$connection = new MongoClient('166.78.181.194');
// //$connection = new MongoClient();
// //	phpinfo();

// 	$message = $client->account->sms_messages->create(
// 		'9172439244', // From a valid Twilio number
// 		'6465097500', // Text this number
// 		"Hello monkey!"
// 	);


// //phpinfo();

// $item = array(
// 	'agenda_id'=>'07161980',
// 	'item_id'=>'1111',
// 	'type'=>'Austin Energy',
// 	'content'=>'testtestest'
// 	);
// $item = json_encode($item);

// //echo $item;




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
			<p class="lead">Find out what Austin City Council is up to in your zip code.</p>

			<div class="well">
				<div id="hero_form" class="row-fluid">
					<div class="span6 form_content">
						<form class="form-inline" action="libs/addUser.php" method="post">
							<fieldset>
								<h2>Get Alerts!</h2>
								<p>We will text you when City Council is talking about your neighborhood.</p>
								<div class="control-group">
									<label class="control-label" for="input01">Phone</label>
									<div class="controls">
										<input type="text" class="input-xlarge" id="input01" name="phone">
									</div>

								</div>	
								<div class="control-group">
									<label class="control-label" for="input01">Zip</label>
									<div class="controls">
										<input type="text" class="input-xlarge" id="input01" name="zip">
									</div>
								</div>									
								<div class="control-group">
									<label class="control-label" for="input01">Email</label>
									<div class="controls">
										<input type="text" class="input-xlarge" id="input01" name="email">
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn btn-primary btn-large btn-block">Get Alerts</button>
								</div>
							</fieldset>
						</form>	
						<br>
						<form class="form form-unsubscribe">
							<fieldset>
								<h4>Unsubscribe from alerts right here</h4>
								<div class="control-group">

									<div class="controls">
										<label class="control-label" for="input01">Phone</label>							
										<input type="text" class="input-xlarge" id="input01">
									</div>

								</div>

								<div class="form-actions">
									<button type="submit" class="btn btn-warning btn-block">Unsubscribe from Alerts</button>
								<p class="help-block"><strong>Or...</strong> text "stop" to 917-243-9244</p>

								</div>


							</fieldset>
						</form>													
					</div>
					<div class="span6 form_image">
						<img src="application/img/text-screen.png" alt="">
					</div>
				</div>

			

			</div>

		</div>
	</div>

	<br>

	<div class="container">
		<h1>Upcoming Austin City Council Agenda</h1>
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

		<dl class="agenda-list custom-agenda">
			<dt class="category austin-energy">Agenda items for your zip code - 78702</dt>
			<dd class="item">
				<h5>Austin Energy</h5>
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with Seton Healthcare, to provide a performance-based incentive for the generation of solar energy at its facility located at 4900 Mueller Blvd., Austin, Texas 78723, over a 10-year period for an estimated $7,325 per year, for a total amount not to exceed $73,250.
				</p>
			</dd>
			<dd class="item">
				<h5>Construction Contracts</h5>
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with St. David’s Episcopal Church, to provide a performance-based incentive for the generation of solar energy at its facility located at 308 E. 8th St., Austin, Texas 78701, over a 10-year period for an estimated $26,969 per year, for a total amount not to exceed $269,690.
				</p>
			</dd>
		</dl>
	

		<dl class="agenda-list">
			<dt class="category austin-energy">Austin Energy</dt>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with Seton Healthcare, to provide a performance-based incentive for the generation of solar energy at its facility located at 4900 Mueller Blvd., Austin, Texas 78723, over a 10-year period for an estimated $7,325 per year, for a total amount not to exceed $73,250.
				</p>
			</dd>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with St. David’s Episcopal Church, to provide a performance-based incentive for the generation of solar energy at its facility located at 308 E. 8th St., Austin, Texas 78701, over a 10-year period for an estimated $26,969 per year, for a total amount not to exceed $269,690.
				</p>
			</dd>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Approve issuance of a rebate to Arts Apartments South Austin, LLC, for performing comprehensive energy efficiency upgrades at the Arts Apartments at South Austin located at 400 West St. Elmo Rd., Austin, Texas 78745, in an amount not to exceed $99,000.
				</p>
			</dd>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Approve issuance of a rebate to Arts Apartments at Turtle Creek, LLC, for performing comprehensive energy efficiency upgrades at the Arts Apartments at the Turtle Creek located at 714 Turtle Creek Blvd., Austin, Texas 78745, in an amount not to exceed $71,500.
				</p>
			</dd>	

			<dt class="category austin-energy">Austin Water Utility</dt>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with Seton Healthcare, to provide a performance-based incentive for the generation of solar energy at its facility located at 4900 Mueller Blvd., Austin, Texas 78723, over a 10-year period for an estimated $7,325 per year, for a total amount not to exceed $73,250.
				</p>
			</dd>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with St. David’s Episcopal Church, to provide a performance-based incentive for the generation of solar energy at its facility located at 308 E. 8th St., Austin, Texas 78701, over a 10-year period for an estimated $26,969 per year, for a total amount not to exceed $269,690.
				</p>
			</dd>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Approve issuance of a rebate to Arts Apartments at Turtle Creek, LLC, for performing comprehensive energy efficiency upgrades at the Arts Apartments at the Turtle Creek located at 714 Turtle Creek Blvd., Austin, Texas 78745, in an amount not to exceed $71,500.
				</p>
			</dd>	

			<dt class="category austin-energy">Aviation</dt>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an amendment to the lease and hangar facility development agreement with Ascend AUS, LLC to require the Department of Aviation to relocate a Federal Aviation Administration signal cable, refund tenant a total amount of $173,804.00, and modify other lease terms consistent with the mediated settlement agreement dated July 17, 2012.
				</p>
			</dd>

			<dt class="category austin-energy">Contract Management</dt>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with Seton Healthcare, to provide a performance-based incentive for the generation of solar energy at its facility located at 4900 Mueller Blvd., Austin, Texas 78723, over a 10-year period for an estimated $7,325 per year, for a total amount not to exceed $73,250.
				</p>
			</dd>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with St. David’s Episcopal Church, to provide a performance-based incentive for the generation of solar energy at its facility located at 308 E. 8th St., Austin, Texas 78701, over a 10-year period for an estimated $26,969 per year, for a total amount not to exceed $269,690.
				</p>
			</dd>


			<dt class="category austin-energy">Emergency Medical Services</dt>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with Seton Healthcare, to provide a performance-based incentive for the generation of solar energy at its facility located at 4900 Mueller Blvd., Austin, Texas 78723, over a 10-year period for an estimated $7,325 per year, for a total amount not to exceed $73,250.
				</p>
			</dd>
			<dd class="item">
				<p>
					<a href="#">Item 12345</a> – Authorize negotiation and execution of an agreement with St. David’s Episcopal Church, to provide a performance-based incentive for the generation of solar energy at its facility located at 308 E. 8th St., Austin, Texas 78701, over a 10-year period for an estimated $26,969 per year, for a total amount not to exceed $269,690.
				</p>
			</dd>

		</dl>

	</div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include('footer.php'); ?>

 
        <!-- JavaScript libraries -->
        <script src="application/js/vendor/jquery-1.9.1.min.js"></script>
        <script src="application/js/vendor/bootstrap.min.js"></script>
        <!-- Javascripts -->
        <script src="application/js/plugins.js"></script>
        <script src="application/js/main.js"></script>

 
    </body>
</html>