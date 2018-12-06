<?php
 $name =$_POST['name'];
 $visitor_email =$_POST['email'];
 $message=$_POST['message'];


 $email_from = 'nosobaseki@gmail.com';

 $email_subject = "New Form Submisson";

 $email_body = "User Name:$name.\n".
              "User Message: $message.\n";

              $to = "nosobaseki@gmail.com";

              $headers = "From: $email_from \r\n";

              $headers .= "Reply-To: $visitor_email \r\n";

              mail($to,$email_subject, $email_body,$headers);
              header("Location: index.html");

 ?>