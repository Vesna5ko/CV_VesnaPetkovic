<?php

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $mailFrom = $_POST['mail'];
   $massage = $_POST['massage'];


   $mailTo = "vesna.86@yahoo.com";
   $headers = "From: ".$mailFrom;
   $txt = "Email od ".$name.".\n\n".$massage;

   mail($mailTo,$txt,$headers);
   header("Location: index.php?mailsend");
}
?>