<?php
echo "Check your email";
echo "The form was sent by: " .$_POST['name'] . "</br>";
echo "The email is: " .$_POST['email'] . "</br>";
echo "The comments are: " .$_POST['comments'] . "</br>";


$to = $_POST['email'];
$subject = "Thank you for using my page!".$_POST['name'];
$txt = $_POST['comments'];
$headers = "From: manikana@eve.kean.edu". "\r\n" .
"CC: manikana@eve.kean.edu" ";

mail($to, $subject,$txt, $headers);
?>