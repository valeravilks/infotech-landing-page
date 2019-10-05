<?php
echo $_GET['email'];
file_put_contents('1.txt', $_GET['email'] );
$message = '<html><body>';
$message .= '<h1>Заявки с лендинга Infotech</h1>';
$message .= '</body></html>';

$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr><td><strong>Планируете ли вы посещение форума?</strong> </td><td>" . strip_tags($_POST['plan']) . "</td></tr>";
$message .= "<tr><td><strong>Хотели бы вы познакомиться с решениями «Инфотех Груп»?</strong> </td><td>" . strip_tags($_POST['acquaintance']) . "</td></tr>";
$message .= "<tr><td><strong>ФИО</strong> </td><td>" . strip_tags($_POST['fio']) . "</td></tr>";
$message .= "<tr><td><strong>Компания</strong> </td><td>" . strip_tags($_POST['company']) . "</td></tr>";
$message .= "<tr><td><strong>Должность</strong> </td><td>" . strip_tags($_POST['position']) . "</td></tr>";
$message .= "<tr><td><strong>Электронная почта</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Телефон</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";



mail("valeravilks@gmail.com", "Заявка с лендинга Infotech", $message, "Content-Type: text/html; charset=ISO-8859-1\r\n");