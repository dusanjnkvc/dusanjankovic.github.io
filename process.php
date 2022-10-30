<?php

if(isset($_POST['email'])){
    //email information
    $admin_email = "dule.dusan.jankovic@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //send email
    mail($admin_email,"New Form Submission",$message,"From:".$email);

    header('index.html');
}
