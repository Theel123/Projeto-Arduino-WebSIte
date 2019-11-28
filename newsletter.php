<?php   
 print('oi');
die('teste');

   require 'PHPMailer/PHPMailerAutoload.php';
        
       if (isset($_POST['nome']) && !empty($_POST['nome'])) {

                  $assunto = $_POST['nome'];
     }
       if (isset($_POST['email']) && !empty($_POST['email'])) {

                  $mensagem = $_POST['nome'];
       }

    $mail = new PHPMailer;
     
    $mail->isSMTP();
    $mail->Hostname = 'ssl://smtp.gmail.com';
    $mail->SMTPAuth = false;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'theel.rst@gmail.com';
    $mail->Password = '59738775';
    $mail->Port = 587;
    $mail->SMTPDebug = 1;
    $mail->setFrom('theel.rst@gmail.com', 'Matheus');
    $mail->addAddress('theel.rst@gmail.com');
   
    $mail->isHTML(true);
     
    $mail->Subject = $assunto;
    $mail->Body    = nl2br($mensagem);
    $mail->AltBody = nl2br(strip_tags($mensagem));
     
    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
         print('<script>alert('email enviado com sucesso');</script>');
   }
 
 
?>