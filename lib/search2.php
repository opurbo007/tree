<?php
include("./database/config.php");
// include("./include/header.php");

include("./lib/productInsert2.php");
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
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Insert Your Product</h5>

                </div>
                <div class="modal-body">
                    <form method="POST" action="./flower.php" enctype="multipart/form-data">


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
                            <button class="btn btn-primary" type="submit" name="insert2">
                                submit</button>
                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal">cancel</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>


    <div class="body">
        <header>
            <h1 class="mainTitle">Product List</h1>
        </header>
        <section class="mainArea">
            <table>
                <tr>
                    <th class="thumbnail">Thumbnail</th>
                    <th class="name">Name</th>
                    <th class="Price">Price</th>
                    <th class="Quantity">Quantity</th>

                    <th class="action">Action</th>

                </tr>
                <?php


$select = mysqli_query($db,"SELECT * FROM `flower`");

while ($row = mysqli_fetch_array($select)){

?>


                <tr>
                    <td class="thumbnail">
                        <img src="<?php echo $row["img"]?>" alt="" />
                    </td>
                    <td class="name">
                        <p><?php echo $row["name"]?></p>
                    </td>
                    <td class="name">
                        <span class="priceList"><?php echo $row["price"];?></span>
                    </td>
                    <td class="name">
                        <span class="quantity"><?php echo $row["quantity"];?></span>
                    </td>
                    <td class="action">
                        <a href="lib/updateForm2.php?id=<?php echo $row["id"];?>">
                            <span class="editIcon icon"><svg xmlns="http://www.w3.org/2000/svg" id="Outline"
                                    viewBox="0 0 24 24" width="512" height="512">
                                    <path
                                        d="M18.656.93,6.464,13.122A4.966,4.966,0,0,0,5,16.657V18a1,1,0,0,0,1,1H7.343a4.966,4.966,0,0,0,3.535-1.464L23.07,5.344a3.125,3.125,0,0,0,0-4.414A3.194,3.194,0,0,0,18.656.93Zm3,3L9.464,16.122A3.02,3.02,0,0,1,7.343,17H7v-.343a3.02,3.02,0,0,1,.878-2.121L20.07,2.344a1.148,1.148,0,0,1,1.586,0A1.123,1.123,0,0,1,21.656,3.93Z" />
                                    <path
                                        d="M23,8.979a1,1,0,0,0-1,1V15H18a3,3,0,0,0-3,3v4H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2h9.042a1,1,0,0,0,0-2H5A5.006,5.006,0,0,0,0,5V19a5.006,5.006,0,0,0,5,5H16.343a4.968,4.968,0,0,0,3.536-1.464l2.656-2.658A4.968,4.968,0,0,0,24,16.343V9.979A1,1,0,0,0,23,8.979ZM18.465,21.122a2.975,2.975,0,0,1-1.465.8V18a1,1,0,0,1,1-1h3.925a3.016,3.016,0,0,1-.8,1.464Z" />
                                </svg></span>
                        </a>
                        <a href="lib/delete2.php?id=<?php echo $row["id"];?>"><span class="deleteIcon icon">



                                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512"
                                    height="512">
                                    <path
                                        d="M21,4H17.9A5.009,5.009,0,0,0,13,0H11A5.009,5.009,0,0,0,6.1,4H3A1,1,0,0,0,3,6H4V19a5.006,5.006,0,0,0,5,5h6a5.006,5.006,0,0,0,5-5V6h1a1,1,0,0,0,0-2ZM11,2h2a3.006,3.006,0,0,1,2.829,2H8.171A3.006,3.006,0,0,1,11,2Zm7,17a3,3,0,0,1-3,3H9a3,3,0,0,1-3-3V6H18Z" />
                                    <path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18Z" />
                                    <path d="M14,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z" />
                                </svg></span> </a>
                    </td>
                </tr>
                <?php } ?>

            </table>


        </section>



        <!-- for bootstrap  -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <?php
include("./include/footer.php");
?>