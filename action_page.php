<?php
/**
 * Created by PhpStorm.
 * User: Eldarus
 * Date: 04/06/2018
 * Time: 02:10
 */



if (isset($_POST['send'])) {
    $to = 'test@selected.co.il';
    $subject = 'Feedback from my site';
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
    $message .= 'Comments: ' . $_POST['comments'];
    $headers = "From: webmaster@ecample.com\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) {
        $headers .= "\r\nReply-To: $email";
    }
    $success = mail($to, $subject, $message, $headers, '-feldar.moore@gmail.com');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php if (isset($success) && $success) { ?>
    <h1>Thank You</h1>
    <p>Your message has been sent.</p>
    <?php } else { ?>
    <h1>Oops!</h1>
    <p>Sorry, there was a problem sending your message.</p>
    <?php } ?>
</body>
</html>