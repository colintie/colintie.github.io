<?php 
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
$to = "n.m.trenogin@gmail.com";
$subject = "Заявка с сайта ИГРЫ";
$message = "Письмо отправлено из моей формы. <br />
Пользователь хочет: ".htmlspeciacharts($what)."<br />
ФИО: ".htmlspeciacharts($name)."<br />
Телефон: ".htmlspeciacharts($phone);
$headers = "from: site.ru <site-email@mysite.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location:thanks.html');
exit();
?>