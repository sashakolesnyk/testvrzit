<?php
include ('oop.php');

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	$text = "Заявка с сайта лендинга от " . $name . " с номером телефона " . $phone . " и текстом сообщения " . $message . ".";
	
	mail('kolesnyksasha@gmail.com', 'Заявка с Landing page', $text);

	
	
	$db = new db_work(Connection::make());
	$isWritten = $db->writeToDb($name, $phone, $message);
	

	if($isWritten) {echo 'Writing to database is successful !';}