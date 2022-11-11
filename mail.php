<?php
    // getting data of form on index.php
                        $first_name=$_POST['first_name'];
                        $last_name=$_POST['last_name'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];
                        $subject=$_POST['subject'];
                        $message=$_POST['message'];

    $to="suryavnshishivam.000@gmail.com";
    $subject="Mail From Ubsoftec";
    $txt="first_name =". $first_name . "\r\n last_name =" . $last_name ."\r\n email =" . $email .  
    "\r\n phone =" . $phone. "\r\n subject =" . $subject."\r\n message =" . $message;

    $headers= "From : noreply@rohan.com" . "\r\n" ."CC: sombodyelse@example.com";

    if($email != NULL)
    {
        mail($to,$subject,$txt,$headers);
    }
    header("Location : index.php");
?>