<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
}

if (!isset($_POST["des"])) {
    header("Location: ../home.php");
    die();
}

$email = $_SESSION['user'];

date_default_timezone_set("Asia/Colombo");

$date_posted = date("Y-m-d H:i:s");

// if (isset($_FILES["post_image"])) {
//     echo "yes";
// } else {
//     echo "no";
// }

if (isset($_POST["post_submit"])) {
    $targt_dir = "../posts/" . $_SESSION["user"] . "/";
    if (!file_exists($targt_dir)) {
        
        mkdir($targt_dir, 0777);
    }
    

    if ($_FILES["post_image"]["size"] > 3000000 || $_FILES["post_image"]["size"] == 0) {
        if ($_FILES["post_image"]["name"] == "") {
            $image_avail = false;
        } else {
            if (isset($_GET["home"])) {
                header("Location: ../home.php?failed");
            } else if (isset($_GET["mypost"])) {
                header("Location: ../mypost.php?failed");
            }

            die();
        }
        
    } else {
        $check = getimagesize($_FILES["post_image"]["tmp_name"]);
        $image_avail = true;

        if ($check == true) {


            // $target_file = $targt_dir . basename($_FILES["post_image"]["name"]);
            $temp = explode(".", $_FILES["post_image"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);

            $target_file = $targt_dir . $newfilename;

            while (file_exists($target_file)) {
                $temp = explode(".", $_FILES["post_image"]["name"]);
                $newfilename = round(microtime(true)) . '.' . end($temp);
                $target_file = $targt_dir . $newfilename;
            }


            if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file)) {

                $image_val = true;
            } else {

                $image_val = false;
            }
        } else {
            $image_val = false;
        }
    }
} 



include("dbdata.php");

$con = new mysqli("$dbservername", "$dbusername", "$dbpassword", "$dbname");

if ($image_avail == false) {
    $description = $con->real_escape_string($_POST["des"]);

    $sql = "INSERT INTO masks(description, date, email) VALUES ('$description', '$date_posted', '$email')";

} else {
    if ($image_val == true) {
        $temp_desc = $_POST["des"];
        $main_dir = "posts/". $_SESSION["user"] . "/" . $newfilename;
        $temp_desc .= "<br>";
        $image_div = "<div class='container-sm'><img class='img-fluid' src='$main_dir'></div><br>";
        $temp_desc .= $image_div;

        $description = $con->real_escape_string($temp_desc);


        $sql = "INSERT INTO masks(description, date, posts, email) VALUES ('$description', '$date_posted', '$main_dir', '$email')";
    } else {
        if (isset($_GET["home"])) {
            header("Location: ../home.php?failed");
        } else if (isset($_GET["mypost"])) {
            header("Location: ../mypost.php?failed");
        }

        die();
    }
}
 

// $sql = "INSERT INTO masks(description, date, email) VALUES ('$description', '$date_posted', '$email')";



$result = $con->query($sql);
 
if ($result == true) {
    if (isset($_GET["home"])) {
        header("Location: ../home.php");
    } else if (isset($_GET["mypost"])) {
        header("Location: ../mypost.php");
    }
    
} else {
    if (isset($_GET["home"])) {
        header("Location: ../home.php?failed1");
    } else if (isset($_GET["mypost"])) {
        header("Location: ../mypost.php?failed");
    }
}

$con->close();

?>
