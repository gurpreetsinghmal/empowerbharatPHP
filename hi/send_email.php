<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
     $name = $_POST["name"];
     $phone = $_POST["phone"];
     $from= $_POST["from"];
     $query=$_POST["emailSubject"];
     $subject = "empowerbharat website";
     $message = "------------------------------------<br/>".
    "name=".$name."<br/>".
    "phone=".$phone."<br/>".
    "email=".$from."<br/>".
    "query=".$query."<br/>".
    "message=".$_POST["emailMessage"]."<br/>".
    "------------------------------------<br/>";

    $headers = "From: sender@example.com\r\n";
    $headers .= "Reply-To:".$from."\r\n";
    $headers .= "Cc: gurpreetsinghmal@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    $mail_sent = mail($to, $subject, $message, $headers);

   
}
?>
