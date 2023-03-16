<?php
// session_start();
// if (!isset($_SESSION['user'])) {
//     header("Location: ../index.php");
// }

if (!isset($_POST["id"])) {
    header("Location: ../mypost.php");
    die();
}

$id = $_POST["id"];

include("dbdata.php");

$con = new mysqli("$dbservername", "$dbusername", "$dbpassword", "$dbname");

$sql = "DELETE FROM masks WHERE id=$id";

$result = $con->query($sql);
 
if ($result == TRUE) {
    header("Location: ../mypost.php");
} else {
    header("Location: ../mypost.php?failed");
}

$con->close();




?>