<?php
header("Content-Type:text/html; charset=UTF-8");
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
include '../dbconnect.php';
//$connection = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

function setFilter($val)
{
    $step1 = trim($val);
    $step2 = strip_tags($step1);
    $step3 = htmlspecialchars($step2, ENT_QUOTES);
    $result = $step3;
    return $result;
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;
    // (0): Disable debugging (you can also leave this out completely, 0 is the default).
    // (1): Output messages sent by the client.
    // (2): as 1, plus responses received from the server (this is the most useful setting).
    // (3): as 2, plus more information about the initial connection - this level can help diagnose STARTTLS failures.
    // (4): as 3, plus even lower-level information, very verbose, don't use for debugging SMTP, only low-level problems.

    $mail->isSMTP();
    $mail->Host = 'mail.consulentiaziendaliditalia.it';
    $mail->CharSet = "utf-8";
    $mail->SMTPAuth = true;
    $mail->Username = 'network@consulentiaziendaliditalia.it';
    $mail->Password = 'consnet#098';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SMTPOptions = array(
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    );
    // Content
    $mail->isHTML(true);
    $subject = "Cambia password";
    $mail->Subject = $subject;
    $mail->setFrom('support@semaforo.it', 'Semaforo');
    $mail->AltBody = 'This is an informative message.';


    global $connection;

    function generate_password($length = 10){
        $chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
                  '0123456789';
      
        $str = '';
        $max = strlen($chars) - 1;
      
        for ($i=0; $i < $length; $i++)
          $str .= $chars[mt_rand(0, $max)];
      
        return $str;
      }

    $password_generated =  generate_password();

    $update_pass ="UPDATE users SET password = '$password_generated'";
    mysqli_query($connection,$update_pass);

    $update_pass ="SELECT * FROM  users";
    $_user=mysqli_query($connection,$update_pass);
    $row_user= mysqli_fetch_assoc($_user);
    
        $mail2 = clone $mail;

   //******************** the email body  ********************/
            $mail2->Body = "
    <h1>Buongiorno ".$name_email_send." </h1>
    <p> Ecco le nuove credenziali per l`accesso alla piattaforma per il controllo della bancabilità: <br>
     <b>Link: https://www.consulentiaziendaliditalia.it/checkpiva/ </b>
     <br><b>Username: </b>".$row_user['username']."
     <br><b>Password: <b>" .$password_generated." <p>
       
    ";
        
    $mail2->setFrom('support@semaforo.it', 'Semaforo Softwhare');
    $mail2->addAddress('simone.brancozzi@gmail.com', 'Simone Brancozzi');
    $mail2->addAddress('rei.etrc@gmail.com', 'Dilaver Musa');
    $mail2->addBcc("alessandro.m@studiobrancozzi.it", "Alessandro Marziali");
    $mail2->AltBody = 'Questo è un messaggio informativo.';

    $mail2->send();

    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
