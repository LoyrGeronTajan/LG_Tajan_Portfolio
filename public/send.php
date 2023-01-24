<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './assets/phpmailer/src/Exception.php';
require './assets/phpmailer/src/PHPMailer.php';
require './assets/phpmailer/src/SMTP.php';

if(isset($_POST['btn-send'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  

  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'personaltajanloyr@gmail.com';
  $mail->Password = 'kmmmljvyqweistdy';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = '465';


  //Recipients
  $mail->setFrom($email, 'LG-Tajan');
  $mail->addAddress($email, $name);
  $mail->addBCC('personaltajanloyr@gmail.com');

  $mail->isHTML(true);

  $mail->Subject = $_POST['subject'];

  $mail->Body = '
                  <h1>Name: '.$name.'</h1> <br>
                  <h3>Subject: '.$subject.'</h3> <br>
                  <p>Email: '.$email.'</p> <br>
                  <p>Message: '.$message.'</p>
                ';


  // $mail->send();
  if ($mail->send()) {
    echo "
    <script>
    alert('Message sent!');
    window.location.href='./index.html';
    </script>
    ";
  }
  else {
    echo "
    <script>
    alert('Message not sent!').window.location.href='./index.html';
    </script>
    ";
  
  }
  
  
}

?>


