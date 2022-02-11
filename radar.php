
			<?php 
				
					include 'db.php';

			 		if ($text == 'radar.bd' || $text == 'Radar.bd') {

			 			date_default_timezone_set("Asia/Dhaka");

						$m = date('m');
						$d = date('d');
						$h = date('H');
						$mi = date('i');

						if ($mi => '50' && $mi < '55') {

							$img1 = "https://wx.baf.mil.bd/METBSR/images/omar/Radar/20220210$h30.jpg";
							$img2 = "https://wx.baf.mil.bd/METBSR/images/omar/Radar/20220210$h31.jpg";
							$img3 = "https://wx.baf.mil.bd/METBSR/images/omar/Radar/20220210$h32.jpg";
							$img4 = "https://wx.baf.mil.bd/METBSR/images/omar/Radar/20220210$h33.jpg";
							$img5 = "https://wx.baf.mil.bd/METBSR/images/omar/Radar/20220210$h34.jpg";
							$img6 = "https://wx.baf.mil.bd/METBSR/images/omar/Radar/20220210$h35.jpg";

							$url = "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img1&parse_mode=html";
							$url = "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img2&parse_mode=html";
							$url = "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img3&parse_mode=html";
							$url = "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img4&parse_mode=html";
							$url = "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img5&parse_mode=html";
							$url = "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img6&parse_mode=html";


						}
							

						file_get_contents($url);

				}

			?>
