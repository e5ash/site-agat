<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['comment'])) {$comment = $_POST['comment'];}
if (isset($_POST['to'])) {$to = $_POST['to'];}

$message = "Имя: $name\nТелефон: $tel";

if ($email== true) {
	$message .= "\nПочта: $email";
}
if ($comment == true) {
	$message .= "\nКомментарий: $comment";
}


// $to = "comediant1989@yandex.ru";
$headers = "Content-type: text/plain; charset = UTF-8";
$subject = "Новый заказ с сайта";
$send = mail($to, $subject, $message, $headers);
?>
