<?php

Yii::import('application.extensions.phpmailer.JPhpMailer');
$mail = new JPhpMailer;
$mail->IsSMTP();
$mail->Host = 'smtpdom.secrel.com.br';
$mail->SMTPAuth = true;
$mail->Username = 'yourname@163.com';
$mail->Password = 'yourpassword';
$mail->SetFrom('documentech@documentech.com.br', 'Documentech');
$mail->Subject = 'PHPMailer Test Subject via smtp, basic with authentication';
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
$mail->MsgHTML('<h1>JUST A TEST!</h1>');
$mail->AddAddress('igor.moura@secrel.net.br', 'Igor Moura');
$mail->Send();


/*
    $mail->Host = "smtpdom.secrel.com.br";
    $mail->setFrom('documentech@documentech.com.br')
    to : marlom.bastos@secrel.net.br
 *  
 */


?>
