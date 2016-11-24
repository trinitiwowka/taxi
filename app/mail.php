<?php

    $sendto   = "za-rabotoy@yandex.ru";
    $userphone = $_POST['phone'];
    $username = $_POST['name'];

    // Формирование заголовка письма
    $subject  = "Новое сообщение";
    $headers  = "From: crossi.ru\r\n";

    $headers .= "Content-Type: text/plain;charset=utf-8 \r\n";

    // Формирование тела письма
    $msg="Заказчик: $username \nЕго номер телефона: $userphone\n\n";

    // отправка сообщения
    @mail($sendto, $subject, $msg, $headers)

?>