<?php 

$name = $_POST['user_name'];
$family = $_POST['user_family'];
$phone = $_POST['user_phone'];
$text = $_POST['user_text'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nevigadimon@gmail.com';                 // Наш логин
$mail->Password = 'asnaebrespect';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('nedvigadimon@gmail.com', 'САЙТ BUSSINES');   // От кого письмо 
$mail->addAddress('nedvigadimon@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные клиента';
$mail->Body    = 'Пользователь оставил свои данные <br> Клиент';
$mail->AltBody = $text;

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>