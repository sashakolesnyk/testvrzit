<?php
include ('oop.php');

	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$email = 'kolesnyksasha@gmail.com';
	if (isset($_POST["email"])) {
		$email = $_POST["email"];
	}
	
	$message = $_POST["message"];
	$text = "Заявка с сайта лендинга от " . $name . " с номером телефона " . $phone . " и текстом сообщения " . $message . ".";
	
	mail($email, 'Заявка с Landing page', $text);

	
	
	$db = new db_work(Connection::make());
	$isWritten = $db->writeToDb($name, $phone, $message);
	

	if($isWritten) {echo 'Writing to database is successful !';}