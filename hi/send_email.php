<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    // $name = $_POST["name"];
    // $phone = $_POST["phone"];
     $from= $_POST["from"];
    $subject = "empowerbharat website : ";
    $message = $_POST["emailMessage"];
    
    $headers = "From: sender@empowerbharat.com\r\n";
    $headers .= "Reply-To:".$from."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    $mail_sent = mail($to, $subject, $message, $headers);

    if ($mail_sent) {
        echo "Email sent successfully";
    } else {
        echo "Email sending failed.";
    }
}
?>
<button type="button" id="sendEmail">Send Email</button>
<div id="responseMessage"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function() {
            $("#sendEmail").click(function() {
                var recipientEmail ="gurpreetsinghmal@gmail.com";
                var emailSubject = "sub";
                var emailMessage = "mesg";
                
                $.ajax({
                    type: "POST",
                    url: "send_email.php",
                    data: {
                        recipientEmail: recipientEmail,
                        emailSubject: emailSubject,
                        emailMessage: emailMessage
                    },
                    success: function(response) {
                        $("#responseMessage").html(response);
                    }
                });
            });
        });
    </script>