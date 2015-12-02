<?php
require_once '../swiftmailer-5.x/lib/swift_required.php';
require_once '../views/emailTemplate.php';

    // Create the Transport the call setUsername() and setPassword()
    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
        ->setUsername('resume.intool@gmail.com')
        ->setPassword('workintool')
    ;
if(isset($_POST['name']) && ($_POST['name']!="") && isMail($_POST['email'])) {
    // Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);
    $subject = 'From intool.com.ua'; //Загаловок сообщения
    $messageBody = $emailTemplate;

    $message = Swift_Message::newInstance('Message from intool.com.ua ' . $_POST['name'] . ' ' . $_POST['company-name'])
        ->setFrom(array($_POST['email'] => $_POST['name']))
        ->setTo(array('maximdubovoi@gmail.com' => 'Test'))
        ->setBody($messageBody, 'text/html', 'utf-8');

    $numSent = $mailer->send($message);
//Полностью расчехлил! Работает!

    //printf("Sent %d messages\n", $numSent);
    echo "Сообщение отправлено";
}
else
{
    echo "Сообщение не отправлено";
}
function isMail($mail)
{
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
       return true;
    }
    else {
        echo "Указан неверный e-mail\n";
        return false;
    }

};