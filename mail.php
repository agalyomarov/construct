<?php
ini_set('log_errors', 'On');
ini_set('error_log', 'php_errors.log');
$data = json_decode(file_get_contents("php://input"), true);
require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->Host = "smtp.yandex.ru";
$mail->SMTPAuth = true;
$mail->Username = "omaraly971215";
$mail->Password = "opbmplamrnkqpiip";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->From = "omaraly971215@yandex.ru";
$mail->FromName = "";
$mail->addAddress("omaraly971215@yandex.ru", "");
$mail->isHTML(true);
$mail->Subject = "3D конструктор авточехлов онлайн на заказ";
$content = '';
foreach ($data as $key => $val) {
   $content .= $key . " : " . $val . "<br/>";
}
$mail->Body = $content;
try {
   $result = $mail->send();
   if ($result) {
      echo true;
   } else {
      echo false;
   }
} catch (Exception $e) {
   // echo "Mailer Error: " . $mail->ErrorInfo;
   // echo $e->getMessage();
}
