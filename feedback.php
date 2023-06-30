<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $budget = $_POST['budget'];
    $message = $_POST['message'];

    $to = "fugopannakota@gmail.com";
    $date = date ("d.m.Y");
    $time = date ("h:i");
    $from = $email;
    $subject = "Заявка з сайту";


    $msg="
        Имя: $name /n
        Пошта: $email /n
        Телефон: $phone /n
        Бюджет: $phone /n
        Текст: $message";
    mail($to, $subject, $msg, "From: $to ");

?>