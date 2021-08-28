<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone_number = $_POST['p_no'];
    $message = $_POST['message'];


    $email_From = 'osama.asif1299@gmail.com';

    $email_Subject = 'New Form Submission';

    $email_Body = "user name :  $name .\n".
                    "user email : $visitor_email.\n".
                      "user Phone Number :  $phone_number .\n".
                        "user message : $message .\n";

    $to = "osama.asif12d@gmail.com";
    $headers = "From: $email_From ./n";
    $headers .= "Reply-To: $visitor_email ./n";
      mail($to, $email_Subject, $email_Body);
      header("Location: ../index.php#contact");

    


?>