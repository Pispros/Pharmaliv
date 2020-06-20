<?php
     
     $from = 'pharmaliv@info.com' 
     $to   = $_REQUEST['mail'];

     // Sujet
     $subject = "INSCRIPTION SUR PHARMALIV";

     // message
     $message = '
     <html>
      <head>
       <title>MAIL pour créer un compte</title>
      </head>
      <body>
            <p>
               <a><img><img></a>
            <p>
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To:'.$to;
     $headers[] = 'From:'.$from;

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));
?>
