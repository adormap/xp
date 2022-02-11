<?php 

	$input 		= file_get_contents('php://input');
	$data  		= json_decode($input);
	$user		= $data->message->from->username;
	$chat_id 	= $data->message->chat->id;
	$text    	= $data->message->text;
	$t			= $data->message->date;
	$api		= "5286849026:AAH_y_m55CFZMK3wHxR2sMIwox-Ub_MTzow";


	$h = date('H');
	$m = date('i');

	$my = date('Y', $t);
	$mm = date('m', $t);
	$md = date('d', $t);
	$mh = date('H', $t);
	$mmn = date('i', $t);




?>