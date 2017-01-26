<?php 
$name=$_POST['name'];
$tittle=$_POST['tittle'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$what=$_POST['what'];
$to = "n.m.trenogin@gmail.com";
$subject = "Заявка с сайта ИГРЫ";
$message = "Письмо отправлено из моей формы. <br />
Пользователь хочет: ".htmlspeciacharts($what)."<br />
ФИО: ".htmlspeciacharts($name)."<br />
Название команды: ".htmlspeciacharts($tittle)."<br />
Почта: ".htmlspeciacharts($mail)."<br />
Телефон: ".htmlspeciacharts($phone);
$headers = "from: projectgame.ru <clients@projectgame.org>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location:thanks.html');
exit();
?>