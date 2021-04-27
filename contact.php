<?php
    $name = $_POST['name'];
    $visitor_email = $_post['email'];
    $messege = $_post['messege'];

    $email_from = 'clarisaanakemas@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User name: $name.\n"
                    "User Email: $visitor_email.\n". 
                        "User Messege: $messege.\n";

    $to = "calarrisa16@gmail.com";

    $headers = "from: $email_from \r\n";

    $headers .= "Replay-To $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>
