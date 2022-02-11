	<?php 
		include 'db.php';

			if ($text == 'sat.vir' || $text == 'Sat.vir') {
					 
				if ($m > '15' && $m < '26') {
					 $hh = $h;
					 $mm = "00";
				} elseif ($m > '25' && $m < '36') {
					 $hh = $h;
					 $mm = "10";
				} elseif ($m > '35' && $m < '46') {
					 $hh = $h;
					 $mm = "20";
				} elseif ($m > '45' && $m < '56') {
					 $hh = $h;
					 $mm = "30";
				} elseif ($m > '55') {
					 $mm = "40";
					 $hh = $h;
				} elseif ($m < '06') {
					if ($h == '00') {
						$hh = "23";
						$mm = "40";
					} elseif ($h == '01') {
						$hh = "00";
						$mm = "40";
					} else {
						 $mm = "40";
						 $hh = $h -1;
					}
				} elseif ($m > '05' && $m < '16') {
					if ($h == '00') {
					 	$hh = '23';
					} elseif ($h == '01') {
						$hh = "00";
					} else  {
					 	$hh = $h -1;
					}
					
					$mm = "50";
				}
					$img = "https://www.data.jma.go.jp/mscweb/data/himawari/img/ha3/ha3_vir_$hh$mm.jpg";

					$url	= "https://api.telegram.org/bot$api/sendPhoto?chat_id=$chat_id&photo=$img&parse_mode=html";
			
			}


	?>