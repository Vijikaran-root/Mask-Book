<?php
session_start();

if (!isset($_POST["email"])) {
    header("Location: ../");
}
$e = $_POST["email"];

include("dbdata.php");

$con = new mysqli("$dbservername", "$dbusername", "$dbpassword", "$dbname");

$sql = "SELECT * FROM users WHERE email='$e'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    $con->close();
    $_SESSION['user'] = $e;
    header("Location: ../forgot.php?success");
} else {
    header("Location: ../forgot.php?invalid");
}

$con->close();

if (isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'shanvijikaran@gmail.com';
    $mail_subject = 'Message From Website';
    $email_body = '';

    $header = "From: {$email}\r\nContent-Type:text/html;"

    mail($to,$mail_subject,$email_body,$header);
}

?>