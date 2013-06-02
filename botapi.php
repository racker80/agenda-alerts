<?php

	$agenda = $_REQUEST['agenda'];

	//is an agenda sent in the request
	if ($agenda) {

		//have we sent the agenda before?
		if(has_agenda_been_sent($agenda) == false) {

			//send the agenda out
			send_agenda_helper($agenda);


		}

	}



	function has_agenda_been_sent($agenda) {
		return true;
	}


	function send_agenda_helper($agenda) {

		//get users

		//loop through users

			//see if user has been sent this agenda
			has_user_received_agenda($agenda);

				//send agenda
				send_single_agenda($phone, $zip, $agenda);
				



	}

	function send_single_agenda($phone, $zip, $agenda) {

		$user = get_user($phone);

		//get zip code

					//get agenda items with that zip code
					$items = get_agenda_items($agenda, $zip);

					//count items
					$count = '';

				//generate message
				$m = "You have {$count} items in the upcoming Austin City Council meeting about your zip code {$zip}";

				//send message

				//update user's last sent agenda

	}

	function get_user() {
		
	}


	function has_user_received_agenda($agenda) {
		return false;
	}

	function get_agenda_items($zip) {
		return true;
	}

?>