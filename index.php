<?php
$messageSent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	// Validate input (e.g., check for a valid email format)

	// Compose the email message
	$to = "recipient@example.com";
	$subject = "New message from your website";
	$headers = "From: $email";
	$message = "Name: $name\nEmail: $email\n\n$message";

	// Attempt to send the email
	if (mail($to, $subject, $message, $headers)) {
		$messageSent = true;
	}
}
?>