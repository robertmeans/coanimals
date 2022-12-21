<?php
function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

  $name = trim($_POST['name']);
  $phone = $_POST['phone'];  
  $email = trim($_POST['email']);
  $message = trim($_POST['comments']);

 if (is_post_request()) {

  if ($name && $phone && $email && $message) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {



    $mail = new SMTP(true);

    try { 



    // $my_email = "dr.norton@coanimals.com";
    $my_email = "robert@robertmeans.com";

    // to let visitor fill in the "from" field leave string below empty 
    $from_email = "";


    function build_message($request_input){
        if (!isset($message_output)) {
            $message_output ="";
        } if (!is_array($request_input)) {
            $message_output = $request_input;
        } else {
            foreach($request_input as $key => $value) {
                // check that the key of the $_POST variable is not the
                // g-recaptcha-response before adding it to the message
                if ($key != 'g-recaptcha-response') {

                    if(!empty($value)) {
                        if (!is_numeric($key)) {
                            $message_output .= str_replace("_"," ",ucfirst($key)).": ".build_message($value).PHP_EOL.PHP_EOL;
                        } else {
                            $message_output .= build_message($value).", ";
                        }
                    }
                }
            }   
        } return rtrim($message_output,", ");
    }

    $message = build_message($_REQUEST);
    $message = $message . PHP_EOL.PHP_EOL."".PHP_EOL."";
    $message = stripslashes($message);
    $subject = "Message From coanimals";
    $subject = stripslashes($subject);

    if ($from_email) {
        $headers = "From: " . $from_email;
        $headers .= PHP_EOL;
        $headers .= "Reply-To: " . $_REQUEST['email'];
        } else {
            $from_name = "";
            if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
                $from_name = stripslashes($_REQUEST['name']);
            }

        $headers = "From: {$from_name} <{$_REQUEST['email']}>"."\r\n";
        /* BCC if needed */
        // $headers .= "BCC: your@email.com\r\n";

        }

        mail($my_email,$subject,$message,$headers);


        $signal = 'ok';
        $msg =  'Message sent successfully';
      } catch (Exception $e) {
          $signal = 'bad';
          $msg = 'Mail Error: {$mail->ErrorInfo}';
      }






    } else {
      $signal = 'fix-email';
      $msg = 'Invalid email address. Please fix.';
    }



  } else {
    $signal = 'fix-required';
    $msg = 'Make sure you have provided your Name, Email and a Message.';
  }




} // if post_request

  $data = array(
    'signal' => $signal,
    'msg' => $msg
  );
  echo json_encode($data);

?>
