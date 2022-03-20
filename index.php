<?php
include("./database/config.php");
// include("./include/header.php");
include("./database/login.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- this section below for font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!-- this link for css file -->
    <link rel="stylesheet" href="./css/style.css" />

    <title>Be Green</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-light " style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">BeGreen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li> -->
                    <li class="nav-item">
                        <button class="btn btn-outline-success" type="button" data-bs-target="#myModal"
                            data-bs-toggle="modal">insert</button>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>
    <img src="./img/wave.png" class="wave" />
    <div class="containertwo">
        <div class="img">
            <img src="./img/bg.svg" />
        </div>
        <div class="login-container">

            <form method="POST" action="./catagory.php">

                <img class="avatar" src="./img/avatar.svg" />
                <h4 class="heading">WELCOME</h4>
                <div class="input-div one focus">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <input class="input" type="text" placeholder="Username" name="username" required />
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <input class="input" type="password" placeholder="Password" name="password" required />
                    </div>
                </div>

                <input type="submit" class="btnTwo" value="login" name="login" />
                <?php include('./database/error.php'); ?>
            </form>
        </div>
    </div>
    <?php 
     include("./include/footer.php");
     ?>