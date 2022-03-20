<?php
include("./lib/productInsert.php");
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
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
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Insert Your Product</h5>

                </div>
                <div class="modal-body">
                    <form method="POST" action="./vegetable.php" enctype="multipart/form-data">


                        <div class=" mb-3">
                            <label for="name" class="form-label">Enter Tree Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>

                        </div>


                        <div class="mb-3">
                            <label for="price" class="form-label">Enter price</label>
                            <input type="text" class="form-control" id="price" name="price" required>

                        </div>

                        <div class="mb-3">
                            <label for="number" class="form-label">Enter quantity</label>
                            <input type="number" class="form-control" id="number" name="qty" required>
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Enter quantity</label>
                            <input type="file" class="form-control" id="img" name="image" required>
                        </div>


                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" name="insert">
                                submit</button>
                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal">cancel</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
    <!-- for bootstrap  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>