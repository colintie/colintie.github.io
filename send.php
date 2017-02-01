<?php 
//принимаем постовые данные
$name=$_POST['name'];
$tittle=$_POST['tittle'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$question=$_POST['question'];

// тут указываем на како ящик отправлять письмо
$to = "clients@projectgame.org";
//далее идет тема и само сообщение
$subject = "Заявка с сайта ИГРЫ";
$message = "
Письмо отправлено из формы на сайте. <br />
ФИО: ".htmlspecialchars($name)."<br />
Название команды: ".htmlspecialchars($tittle)."<br />
Почта: ".htmlspecialchars($mail)."<br />
Вопрос: ".htmlspecialchars($question)."<br />
Телефон: ".htmlspecialchars($phone);
$headers = "From: projectgame.ru <clients@projectgame.org>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit;
?>