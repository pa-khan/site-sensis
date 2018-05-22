<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['title'])) {$title = $_POST['title'];}
if (isset($_POST['comment'])) {$comment = $_POST['comment'];}

$message;
if ($title== true) {
	$message .= "Форма: $title";
}
if ($name== true) {
	$message .= "\nИмя: $name";
}
if ($phone== true) {
	$message .= "\nТелефон: $phone";
}
if ($email== true) {
	$message .= "\nПочта: $email";
}
if ($comment== true) {
	$message .= "\nКомментарий: $comment";
}
$to = "rr@sensis.ru";
$headers = "Content-type: text/plain; charset = UTF-8";
$subject = "Заявка с формы";
$send = mail($to, $subject, $message, $headers);
?>