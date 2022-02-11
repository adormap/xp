		<?php
			include 'db.php';

				if ($text == '/start') {

					$msg = "<b> Welcome to XpBot.</b> %0A Send <i> xp.help </i> to see Command List and Many More. %0A Know About me: adormap.xyz";

					$url = "https://api.telegram.org/bot$api/sendMessage?chat_id=$chat_id&text=$msg&parse_mode=html";
					
				}

		?>