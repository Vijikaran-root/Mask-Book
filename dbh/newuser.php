<?php

if(!isset($_POST["email"])) {
    header("Location: ../signup.php");
}
$fn = $_POST["fname"];
$ln = $_POST["lname"];
$e = $_POST["email"];
$ph = $_POST["phone"];
$p = $_POST["password"];

include("dbdata.php");

$con = new mysqli("$dbservername", "$dbusername", "$dbpassword", "$dbname");

$sql = "INSERT INTO users(fname,lname,email,phone,password) VALUES ('$fn','$ln','$e','$ph','$p')";

$result = $con->query($sql);

if ($result == TRUE) {
    header("Location: ../index.php?success");
} else {
    header("Location: ../signup.php?failed");
}

$con->close();

?>