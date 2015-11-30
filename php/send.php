<?php
require_once '../swiftmailer-5.x/lib/swift_required.php';
    // Create the Transport the call setUsername() and setPassword()
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
        ->setUsername('resume.intool@gmail.com')
        ->setPassword('workintool')
    ;

    // Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);
$subject = 'From intool.com.ua'; //Загаловок сообщения
$messageBody = '

                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>
                    '; //Текст нащего сообщения можно использовать HTML теги
$message = Swift_Message::newInstance('Wonderful Subject')
    ->setFrom(array('maxim-dubovoi@i.ua' => 'Max'))
    ->setTo(array('maximdubovoi@gmail.com' => 'Test'))
    ->setBody($messageBody,'text/html','utf-8');

$numSent = $mailer->send($message);
//Полностью расчехлил! Работает!

printf("Sent %d messages\n", $numSent);
