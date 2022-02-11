	<?php

		include 'db.php';

		if ($text == 'xp.help' || $text == 'Xp.help') {

			$msg = "<b>LIST OF ALL COMMANDS:</b> %0A%0A  <b> Satelitte Images Commands: </b> %0A     * For Infrared Satelitte send = sat.ir %0A     * For Convective Satelitte send = sat.cv %0A     * For Visible Satelitte send = sat.vis %0A     * For VIS IR Satelitte send = sat.vir  %0A%0A     * For GFS MJO send = mjo.gfs %0A     * For ECM MJO send = mjo.ecm %0A     * For Radar send = radar.bd %0A%0A   <b> Ecmwf Forecast Commands: </b> %0A     * 5 Days 850MB Wind = ecm.w8.1-5 %0A     * 5 Days 500MB Wind = ecm.w7.1-5 %0A%0A     ";
			
			$url = "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";

		}


		?>