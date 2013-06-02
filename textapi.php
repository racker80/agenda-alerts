<?php
	require_once 'libs/Twilio.php';


	//GET THE TEXT MESSAGE
	$body = $_REQUEST['Body'];
	$from = $_REQUEST['From'];


	//FIGURE OUT IF TEXT IS A ZIP CODE
	if(is_numeric($body) && strlen($body) == 5) {

		//if user exists then update their zip code of interest
		if(user_exists($from)) {
			//UPDATE USER ZIPCODE
			update_user_helper($from, $body);

		} else {
			//ADD A USER
			add_user_helper($from, $body);
		}

	} else {

		if($body == 'stop' || $body == 'Stop') {
			delete_user_helper($from);
		}
	}




	//UNSUBSCRIBE

	function delete_user_helper($from) {

		//UNSUBSCRIBE USER
		unsubscribe_user($_REQUEST['From']);


		//send message
		$m = "You've been unsubscribed";
		send_message($m, $from);

	}


	
	//ADD USER FOR ZIP CODE
	function add_user_helper($from, $body) {
		//ADD USER
		subscribe_user($_REQUEST['From'], $_REQUEST['Body']);

		//send message
		$m = "Thanks for subscribing to Agenda Alerts.  You'll receieve alerts for zip code {$_REQUEST['Body']}.  Text 'stop' top unsubscribe.";
		send_message($m, $from);
	}


	//UPDATE USER ZIP CODE
	function update_user_helper($from, $zip) {
		//UPDATE USER
		update_user($from, $zip);

		//send message
		$m = "Agenda Alerts has updated your zip code to {$zip}.";
		send_message($m, $from);

	}


	//SEND A MESSAGE
	function send_message($m, $phone) {

		$sid = "AC5a93d04a51ef297e78f2518892f1a939"; // Your Account SID from www.twilio.com/user/account
		$token = "6802051d3cb9f0ffdbba46c138087c8f"; // Your Auth Token from www.twilio.com/user/account

		$client = new Services_Twilio($sid, $token);

		print_r($m);
		$message = $client->account->sms_messages->create(
				'7204632007', // From a valid Twilio number
				$phone, // Text this number
				$m
			);

	}

	function unsubscribe_user($phone) {
		return true;
	}

	function subscribe_user($phone, $zip) {
		return true;
	}

	function user_exists($phone) {
		return true;
	}

	function update_user($zip) {
		return true;
	}






	// $message = $client->account->sms_messages->create(
	// 	'9172439244', // From a valid Twilio number
	// 	'6465097500', // Text this number
	// 	"Hello monkey!"
	// );



?>