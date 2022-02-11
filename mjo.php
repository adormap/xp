	<?php 
		include 'db.php';

 			if ($text == 'mjo.gfs' || $text == 'Mjo.gfs') {
					
				$img	= "https://www.cpc.ncep.noaa.gov/products/precip/CWlink/MJO/combphase_noCFSfull.gif";
				$url	= "https://api.telegram.org/bot$api/sendVideo?chat_id=$chat_id&photo=$img&parse_mode=html";
				
					
			} elseif ($text == 'mjo.imd' || $text == 'Mjo.imd') {
					
				$img 	= "https://www.tropmet.res.in/erpas/mme_4/MJO_anim_recent.gif";
				$url	= "https://api.telegram.org/bot$api/sendAnimation?chat_id=$chat_id&animation=$img&parse_mode=html";
				
					
			} elseif ($text == 'imd.rf' || $text == 'imd.rf') {
					
				$img 	= "https://nwp.imd.gov.in/cfs_windrf_animation.gif";
				$url	= "https://api.telegram.org/bot$api/sendAnimation?chat_id=$chat_id&animation=$img&parse_mode=html";
				
					
			}


		?>
