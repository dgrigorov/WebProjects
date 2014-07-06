<?php
$to = 'grigorov@abv.bg';
$subject = $_POST['name'];
$replay = $_POST['email'];
$message = "Запитване от labels.rfid.bg " . "\r\n" . "Sender email: " . $replay . "\r\n" . $_POST['comment'];
$headers = 'From: http://labels.rfid.bg' . "\r\n" .
'Reply-To: ' . $replay . ' ' . "\r\n" .
'X-Mailer: PHP/' . phpversion() .
'MIME-Version: 1.0' . "\r\n" .
'Content-type: text/plain; charset=UTF-8' . "\r\n";
if (($subject == "") || ($replay == "") || ($message == "")) {
echo "<div style='font-size: 2em; margin: 0 auto; padding: 80px 0;'>Error! Please fill all fields - name, email, question.</div>";
} else {
if (mail($to, $subject, $message, $headers)) {
echo "<div style='font-size: 2em; margin: 0 auto; padding: 80px 0;'>Your message is send! Thank you!</div>";
} else {
echo "<div style='font-size: 2em; margin: 0 auto; padding: 80px; 0'>Error sending email! Please try again.</div>";
}
}
?>