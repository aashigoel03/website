<!--VOID: THIS WAS NOT USED-->

<?php
    $name = $_POST['name']; 
    $email = $_POST['name']; 
    $message = $_POST['message']; 

    $email_from = 'aashigoel03@gmail.com'; 

    $email_subject = "New Portfolio Form Submission"
        
    $email_body = "Name: $name". "Email: $email". "Message: $message.\n"; 

    $to = "aashigoel03@gmail.com"; 

    $headers = "From: $email_from \r\n"; 

    $headers .= "Reply-to: $email \r\n"; 

    mail($to, $email_subject, $email_body, $headers); 

    header("Location: index.html"); 
?>