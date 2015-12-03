<?php
require_once '../swiftmailer-5.x/lib/swift_required.php';
require_once '../views/emailTemplate.php';

    // Create the Transport the call setUsername() and setPassword()
    function SwiftSmtp($emailTemplate,$subject,$to){
        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')// Create the Mailer using your created Transport
            ->setUsername('resume.intool@gmail.com')
            ->setPassword('workintool')
        ;
        $mailer = Swift_Mailer::newInstance($transport);
        $messageBody = $emailTemplate;

        $message = Swift_Message::newInstance($subject)
            ->setFrom(array($_POST['email'] => $_POST['name']))
            ->setTo(array($to => 'Test'))
            ->setBody($messageBody, 'text/html', 'utf-8');
        $numSent = $mailer->send($message);
    }

if(isset($_POST['name']) && ($_POST['name']!="") && isMail($_POST['email'])) {
    $to  = "maximdubovoi@gmail.com" ;
    $headers  = "Content-type: text/html; charset=windows-1251 \r\n";
    $headers .= "From:".$_POST['name']." <".$_POST['email'].">\r\n";
    $subject = 'Message from intool.com.ua ' . $_POST['name'] . ' ' . $_POST['company-name']; //Загаловок сообщения
    //SwiftSmtp($emailTemplate,$subject,$to);//Отправление SMTP не работает на Hostinger, но работает на локальном
    mail($to, $subject, $emailTemplate, $headers);//Send from Hostinger
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