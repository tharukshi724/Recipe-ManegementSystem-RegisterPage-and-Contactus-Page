<?php
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
   if(isset($_POST['submit']))
   {
       $uname = $_POST['uname'];
		$email = $_POST['email'];
		$subject=$_POST['subject'];
		$msg = $_POST['msg'];
		
		
         if(empty($uname) || empty($email) || empty($subject) || empty($msg)){
			  header('Location:index.php?error');
		 }
		

          require 'PHPMailer/src/Exception.php';
          require 'PHPMailer/src/PHPMailer.php';
          require 'PHPMailer/src/SMTP.php';
   
          $mail = new PHPMailer(true);


           //Server settings
         $mail->SMTPDebug = 0;                      // Enable verbose debug output
         $mail->isSMTP();                                            // Send using SMTP
         $mail->Host       = "smtp.gmail.com";                    // Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
         $mail->Username   = "thilushi1234@gmail.com";                     // SMTP username
         $mail->Password   = 'iwt1234567';                               // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

          //Recipients
          $mail->setFrom($email, $uname);
          $mail->addAddress('Chef2Chef@mail.com');     // Add a recipient
      

       

         // Content
          $mail->isHTML(true);                                  // Set email format to HTML
          $mail->Subject = $subject;
          $mail->Body    = $msg;
   

           if($mail->send()){
              echo "Message has been sent";
	        }
          else{
             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
          }
   }
  
 
?>