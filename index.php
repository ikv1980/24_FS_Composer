<?php
    require_once 'vendor/autoload.php'; // подключение автозагрузчика

    // Обработка файла формата MarkDown при помощи библиотеки Parsedown
    $parsedown = new Parsedown();
    $body = $parsedown->text(file_get_contents('body.txt'));

    // подключаем форму ввода данных и получаем данные методом POST
    require_once 'app/form.php';
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    if ($_POST['textarea'] !='') $body = $_POST['textarea'];

    // подключаем файл, передаем данные и отправляем письмо
    if(isset($email)) {
        require_once 'app/sendmail.php';
    }