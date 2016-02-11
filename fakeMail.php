<?php
$to_email = $_REQUEST['email'];
$name = $_REQUEST['name'];
$sender_email = $_REQUEST['sender'];
$subject = $_REQUEST['subject'];
$content = $_REQUEST['content'];

$header = "From: $name"."<sender_email>/r/n";
mail($to_email, $subject, $content, $header);

echo 'Send successfully!';
?>