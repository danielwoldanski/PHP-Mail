<?php
	$date = date("d-m-Y");
	$time = date('H:i');
	
    $to = 'adres na ktory ma zostac wyslany mail';
    $subject = 'Formularz Kontaktowy ' .$date .' Godzina: ' .$time ;
    $message = '<b>Wiadomość od:</b> '.$_POST['email'].'<br><b>Numer kontaktowy: </b>'.$_POST['phone'].'<br><br><b>Treść wiadomości:</b><br><br>'.$_POST['message'];
   
    $headers  = "From: Email ze strony < email SMTP >\n";
    $headers .= "X-Sender: Email ze strony < email SMTP >\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n"; 
    $headers .= "Return-Path: email SMTP\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\n";
    $headers .= "Reply-to: ".$_POST['email']."\r\n";
   
   mail($to, $subject, $message, $headers);
   header('Location: http://www. adres gdzie przekierowac po wyslaniu maila');
   
?>

