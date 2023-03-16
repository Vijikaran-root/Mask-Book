<?php
session_start();

$u = $_SESSION["user"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .button {
            position: relative;
            display: inline-block;
            margin: 15px;
        }

        .button a {
            color: blue, grey;
            font-family: Helvetica, sans-serif;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
            text-decoration: none;
            background-color: #DC143C;
            display: block;
            position: relative;
            padding: 3px 10px;

            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            text-shadow: 0px 1px 0px #000;
            filter: dropshadow(color=#000, offx=0px, offy=1px);

            -webkit-box-shadow: inset 0 1px 0 #FFE5C4, 0 10px 0 #DC143C;
            -moz-box-shadow: inset 0 1px 0 #FFE5C4, 0 10px 0 #DC143C;
            box-shadow: inset 0 1px 0 #FFE5C4, 0 10px 0 #8B0000;

            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .button a:active {
            top: 5px;
            background-color: #FF0000;

            -webkit-box-shadow: inset 0 1px 0 #FFE5C4, inset 0 -3px 0 #FF0000;
            -moz-box-shadow: inset 0 1px 0 #FFE5C4, inset 0 -3pxpx 0 #DC143C;
            box-shadow: inset 0 1px 0 #FFE5C4, inset 0 -3px 0 #DC143C;
        }

        .button:after {
            content: "";
            height: 100%;
            width: 100%;
            padding: 4px;
            position: absolute;
            bottom: -15px;
            left: -4px;
            z-index: -1;
            background-color: #FF0000;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .forgot:hover {
            color: #3b3b3b
        }
    </style>

    <style>
        .vij-container {
            align-items: center;
            background: #000;

            border-radius: 40px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            display: flex;
            height: 40px;
            justify-content: center;
            position: relative;
            width: 80px;
        }

        .vijikaran-container {
            align-items: center;
            background: #FF0000;
            border-radius: 40px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            display: flex;
            height: 30px;
            justify-content: center;
            position: relative;
            width: 100px;
        }

        .vijikaran1-container {
            align-items: center;
            background: #FF0000;
            border-radius: 40px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            display: flex;
            height: 45px;
            justify-content: center;
            position: relative;
            width: 140px;
        }

        .vijikaran2-container {
            align-items: center;
            background: #008000;
            border-radius: 40px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            display: flex;
            height: 45px;
            justify-content: center;
            position: relative;
            width: 200px;
        }

        .vij1-container1 {
            border-radius: 40px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            background: #808080;

        }
    </style>

    <title>My Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <?php

    include("navigation.php");

    ?>

    <div class="card mt-4">

        <div class="card-body">
            <form action="dbh/newpost.php?mypost" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Unmask your thoughts</label>
                    <textarea name="des" class="form-control" id="exampleFormControlTextarea1" rows="3" minlength="5" maxlength="100" required></textarea>
                </div>
                <div class=" input-group">
                    <div class="vij1-container1">

                        <input class="btn" id="post_image" type="file" name="post_image" accept="image/*" aria-describedby="clearFile" aria-label="Upload">
                    </div>
                </div>




                <button name="post_submit" type="submit" class="btn">
                    <div class="vij-container text-white">
                        <span class="text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-mastodon" viewBox="0 0 16 16">
                                <path d="M11.19 12.195c2.016-.24 3.77-1.475 3.99-2.603.348-1.778.32-4.339.32-4.339 0-3.47-2.286-4.488-2.286-4.488C12.062.238 10.083.017 8.027 0h-.05C5.92.017 3.942.238 2.79.765c0 0-2.285 1.017-2.285 4.488l-.002.662c-.004.64-.007 1.35.011 2.091.083 3.394.626 6.74 3.78 7.57 1.454.383 2.703.463 3.709.408 1.823-.1 2.847-.647 2.847-.647l-.06-1.317s-1.303.41-2.767.36c-1.45-.05-2.98-.156-3.215-1.928a3.614 3.614 0 0 1-.033-.496s1.424.346 3.228.428c1.103.05 2.137-.064 3.188-.189zm1.613-2.47H11.13v-4.08c0-.859-.364-1.295-1.091-1.295-.804 0-1.207.517-1.207 1.541v2.233H7.168V5.89c0-1.024-.403-1.541-1.207-1.541-.727 0-1.091.436-1.091 1.296v4.079H3.197V5.522c0-.859.22-1.541.66-2.046.456-.505 1.052-.764 1.793-.764.856 0 1.504.328 1.933.983L8 4.39l.417-.695c.429-.655 1.077-.983 1.934-.983.74 0 1.336.259 1.791.764.442.505.661 1.187.661 2.046v4.203z" />
                            </svg>

                            Post

                        </span>
                    </div>
                </button>



            </form>
        </div>
    </div>

    <?php

    include("dbh/dbdata.php");

    $con = new mysqli("$dbservername", "$dbusername", "$dbpassword", "$dbname");

    $sql = "SELECT id, description, date, email FROM masks WHERE email = '$u' ORDER BY DATE DESC";
    $result = $con->query($sql);
    $num = 0;

    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $num += 1;

    ?>


        <div class="card mt-4 text-dark bg-light">
            <div class="card-header d-flex">
                <?php
                echo ($row["date"]);
                ?>
                <!-- Button trigger modal -->
                <div class="vijikaran-container ">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="<?php echo ('#alertModal' . $num); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                       <b> Delete </b>
                    </button>
                </div>

            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>
                        <?php
                        echo ($row["description"]);
                        ?>
                    </p>
                    <footer class="blockquote-footer">Someone with the email
                        <cite title="Source Title">
                            <?php
                            echo ($row["email"]);
                            ?>
                        </cite>
                    </footer>
                </blockquote>
            </div>
            <div class="card-footer">
                <form id="modalForm" action="dbh/deletepost.php" method="POST">
                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo ('alertModal' . $num); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <b>  So I am gonna delete it!!! kay??? </b>
                                </div>
                                <div class="modal-footer">

                                    <div class="vijikaran1-container ">
                                        <button type="submit" id="modalBtn" class="btn" name="id" value="<?php echo ($id); ?>" data-bs-dismiss="modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z" />
                                            </svg>
                                            <b> Proceed Plz </b>
                                        </button>
                                    </div>
                                    <div class="vijikaran2-container ">
                                        <button type="button" class="btn" data-bs-dismiss="modal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z" />
                                            </svg>
                                            <b> Nope Don't Delete </b>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    <?php
    }
    $con->close();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        li_1 = document.getElementsByClassName("active");

        li_1[0].classList.remove("active");

        li_2 = document.getElementsByClassName("nav-link");

        li_2[1].classList.add("active");
    </script>



<footer>

<div class="text-center p-4  w-100" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://primemazon.onlinewebshop.net/">PRIMEMAZON</a>
    </br>
    Coded By:- Vijikaran
    </br>
    <button class="btn btn-rounded">
        <div class="mu-social-media ">
            <a href="https://www.facebook.com/vijikaran.shan.9">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
            </a>
    </button>
    <button class="btn btn-rounded">
        <a href="https://www.instagram.com/_the_dark_knight_7523_/">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
        </a>
    </button>
    <button class="btn btn-rounded">
        <a href="https://www.linkedin.com/in/vijikaran-shanmugabavan-0b58971bb/">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
            </svg>
        </a>
    </button>
    <button class="btn btn-rounded">
        <a href="https://twitter.com/ShanVijikaran">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg>
        </a>
</div>
</button>

</div>




</footer>
</body>

</html>