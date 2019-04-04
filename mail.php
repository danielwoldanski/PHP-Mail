    <?php
	$date = date("d-m-Y");
	$time = date('H:i');
	
    $to = 'adres na jaki zostanie wysłany mail';
    $subject = 'Formularz Kontaktowy ' .$date .' Godzina: ' .$time ;
    $message = '<b>Wiadomość od:</b> '.$_POST['email'].'<br><b>Treść wiadomości:</b><br>'.$_POST['message'];
   
   $headers  = "From: Email ze strony < mail_smtp@mail_smtp.pl >\n";
  //  $headers .= "Cc: Kopia do < kopia@dokogos >\n";
    $headers .= "X-Sender: Email ze strony < mail_smtp@mail_smtp.pl >\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n"; // Urgent message!
    $headers .= "Return-Path: mail_smtp@mail_smtp.pl\n"; 
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\n";
   $headers .= "Reply-to: ".$_POST['email']."\r\n";
   if ($_POST['message']<>'') {
   
   if( mail($to, $subject, $message, $headers))
   {
    echo 'Wiadomość wysłana';
    }
   }
   else {
      echo "<font style='color:red;'><b>Wpisz treść wiadomości</b></font>";
   }
   ?>
   
