	<?php 
		include 'db.php';

			if ($user == "adorsiq") {


					if ($text == 'ecm.w8.1') {

						date_default_timezone_set("Asia/Dhaka");
							$y = date('Y');
							$m = date('m');
							$d = date('d');
							$h = date('H');
							$mi = date('i');

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$y$m$d/ecmf/ecmwf_wind_850-day1.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
							} elseif ($text == 'ecm.w8.2') {
								date_default_timezone_set("Asia/Dhaka");
								$y = date('Y');
								$m = date('m');
								$d = date('d');
								$h = date('H');
								$mi = date('i');

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$y$m$d/ecmf/ecmwf_wind_850-day2.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
							} elseif ($text == 'ecm.w8.3') {

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$my$mm$md/ecmf/ecmwf_wind_850-day3.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
							} elseif ($text == 'ecm.w8.4') {

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$my$mm$md/ecmf/ecmwf_wind_850-day4.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
							} elseif ($text == 'ecm.w8.5') {

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$my$mm$md/ecmf/ecmwf_wind_850-day5.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
						}



					elseif ($text == 'ecm.w5.1') {

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$my$mm$md/ecmf/ecmwf_wind_500-day1.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
							} elseif ($text == 'ecm.w5.2') {

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$my$mm$md/ecmf/ecmwf_wind_500-day2.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
							} elseif ($text == 'ecm.w5.3') {

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$my$mm$md/ecmf/ecmwf_wind_500-day3.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
							} elseif ($text == 'ecm.w5.4') {

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$my$mm$md/ecmf/ecmwf_wind_500-day4.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
							} elseif ($text == 'ecm.w5.5') {

								if ($mh > 12) {
									$img	= "https://nwp.imd.gov.in/pp/$my$mm$md/ecmf/ecmwf_wind_500-day5.png";
									$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
								} else {
									$msg	= "Model didn't update yet.";
									$url	= "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
								}
						
						}




			} elseif ($user =! 'adorsiq') {
				$msg = "You don't have permission to access.";
				$url = "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
			}


	?>