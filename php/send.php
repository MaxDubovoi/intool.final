<?php
    ini_set("SMTP", "localhost");
    ini_set("smtp_port", "15025");
    $to = 'maximdubovoi@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'From intool.com.ua'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель <maxim-dubovoi@i.ua>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
?>