<?php 

	/* Subject and Email Variables */
	$emailSubject = 'Email from site visitor';
	$webMaster = 'YourEmail@mail.com';

	/* Getting Form Data Variables */

		$nameField = $POST['name'];
		$emailField = $POST['email'];
		$messageField = $POST['comment'];

		$body = <<<EOD
		<br><hr><br>

		Name: $name <br>
		Email: $mail <br>
		Message: $comment <br>

		EOD;

			$headers = "From: $email";
			$headers.= "Content-type: text/html";

			$success = mail($webMaster, $emailSubject, $body, $headers);

			$theResults = <<<EOD

		<p>Thank you for your message</p>

		EOD;

		echo "$theResults";
?>