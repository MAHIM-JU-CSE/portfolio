<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email =$_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sub="Portfolio Contact Request";
    
    $to="mahbubislammahim@outlook.com";
    $headers="From: ".$email;
    $text="You have received an email from ".$name.".\n\n"."Subject: ".$subject.".\n\n".$message;
    
    if(!empty($email) && !empty($name)){ 
        mail($to, $sub, $text, $headers );
        header("Location: index.html#contact");
    }
    
}

?>