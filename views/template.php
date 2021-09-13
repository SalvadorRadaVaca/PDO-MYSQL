<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MVC Example</title>

    <!--==========================
    PLUGINS OF CSS
    ===========================-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--==========================
    PLUGINS OF JS
    ===========================-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

    <!-- Latest compiled Fontawesome -->
    <script src="https://kit.fontawesome.com/202f514018.js" crossorigin="anonymous"></script>
</head>
<body>

    <!--==========================
    LOGO
    ===========================-->

    <div class="container-fluid">
        
        <h3 class="text-center py-3">LOGO</h3>

    </div>

    <!--==========================
    KEYPAD
    ===========================-->

    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

                <?php if(isset($_GET["page"])): ?>

                    <?php if($_GET["page"] == "register"): ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=register">Register</a>
                        </li>

                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=register">Register</a>
                        </li>

                    <?php endif ?>

                    <?php if($_GET["page"] == "ingress"): ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=ingress">Ingress</a>
                        </li>

                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=ingress">Ingress</a>
                        </li>

                    <?php endif ?>

                    <?php if($_GET["page"] == "beginning"): ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=beginning">Beginning</a>
                        </li>

                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=beginning">Beginning</a>
                        </li>

                    <?php endif ?>

                    <?php if($_GET["page"] == "exit"): ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=exit">Exit</a>
                        </li>

                    <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=exit">Exit</a>
                        </li>

                    <?php endif ?>
                
                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?page=register">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=ingress">Ingress</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=beginning">Beginning</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=exit">Exit</a>
                    </li>

                <?php endif ?>

            </ul>
        </div>
    </div>

    <!--==========================
    CONTENT
    ===========================-->

    <div class="container-fluid">
        <div class="container py-5">
            <?php

                if(isset($_GET["page"])) {
                    if($_GET["page"] == "register" ||
                       $_GET["page"] == "ingress" ||
                       $_GET["page"] == "beginning" ||
                       $_GET["page"] == "edit" ||
                       $_GET["page"] == "exit") {
                        include "pages/".$_GET["page"].".php";
                    } else {
                        include "pages/error404.php";
                    }
                } else {
                    include "pages/register.php";
                }

            ?>
        </div>
    </div>
    
</body>
</html>