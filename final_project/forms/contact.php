<?php
echo "Please check your email for a confirmation!</br>";
echo "The form was sent by: " .$_POST['name'] . ".</br>";
echo "Your email is: " .$_POST['email'] . ".</br>";


$to = $_POST['email'];
$subject = "Thank you for using my page ".$_POST['name']. "!";
$txt = "Hello!\nThank you so much for contacting me. I will get back to you as soon as I can using your preferred method. I hope to speak with you soon! \n Anjana Manikandan";;
$headers = "From: manikana@eve.kean.edu". "\r\n" .
"CC: manikana@eve.kean.edu ";

mail($to, $subject,$txt, $headers);
?>
