<?php 
 use PHPMailer\PHPMailer\PHPMailer;

 require_once 'PHPMailer/PHPMailer.php';
 require_once 'PHPMailer/SMTP.php';
 require_once 'PHPMailer/Exception.php';

 $mail= new PHPMailer();

 if($_SERVER['REQUEST_METHOD']=='POST'){

    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msgbody=$_POST['messagebody'];

    if(!empty($name) && !empty($email) && !empty($subject) && !empty($msgbody) ){
             
               //SMTP SETTINGS
               $mail->isSMTP();
               $mail->Host = 'smtp.gmail.com';
               $mail->SMTPAuth= 'true';
               $mail->Username ='Ibukunola2021@gmail.com';
               $mail->Password ='*********';
               $mail->port = 465;
               $mail->SMTPSecure = 'ssl';
           
               //email settings
           
               $mail->isHTML(true);
               $mail->setFrom($email, $name);
               $mail->addAddress('ibukunola2021@gmail.com');
               $mail->Subject = ('$email ($subject)');
               $mail->Body= $msgbody;
           
               if($mail->send()){
                   echo 'success';
               }else{
                   echo 'something went wrong';
               }
   }else{
       echo "all fields are required to be filled";
   }
}


?>