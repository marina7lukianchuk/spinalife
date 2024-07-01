<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	
	/*$mail->isSMTP();                                            //Send using SMTP
	$mail->Host       = 'mail.adm.tools';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = '';                     //SMTP username
	$mail->Password   = '';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	$mail->Port       = 465;  */               
	

	//От кого письмо
	$mail->setFrom('spynalifepozniaky@gmail.com'); // Указать нужный E-mail
	//Кому отправить
	$mail->addAddress('spynalifepozniaky@gmail.com'); // Указать нужный E-mail
	//Тема письма
	$mail->Subject = 'Заявка з сайту';

	//Тело письма
	if(trim(!empty($_POST['phone'])) && trim(!empty($_POST['name']))){
		$body = "<p><b>Ім'я:</b> " . $_POST['name'] . "<br/></p>";
	    $body.= '<p><b>Телефон:</b> '. $_POST['phone'] .'<br/></p>';
	}	


	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Ошибка';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>