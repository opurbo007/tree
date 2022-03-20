<?php
include("../database/config.php");

$p_id=$_GET['id'];

$record = mysqli_query($db,"SELECT * FROM `vegetable` WHERE id={$p_id}");
$data = mysqli_fetch_array($record);

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


</head>

<body>
    <div class="container">


        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Details</h5>

                </div>
                <div class="modal-body">
                    <form method="POST" action="update.php" enctype="multipart/form-data">


                        <div class=" mb-3">
                            <label for="name" class="form-label">Enter Tree Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value=" <?php echo $data["name"] ?> " required>

                        </div>


                        <div class="mb-3">
                            <label for="price" class="form-label">Enter price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value=" <?php echo $data["price"] ?> " required>

                        </div>

                        <div class="mb-3">
                            <label for="number" class="form-label">Enter quantity</label>
                            <input type="text" class="form-control" id="number" name="qty"
                                value=" <?php echo $data["quantity"] ?> " required>
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">Enter Image file</label>
                            <td><input type="file" class="form-control" id="img" name="image"
                                    value=" <?php echo $data["img"] ?> "> <img src="../<?php echo $data["img"] ?>"
                                    alt="" style="width:300px" ;style="height:300px" ;>
                            </td>
                        </div>

                        <input type="hidden" value=" <?php echo $data["id"] ?> " name="p_id">


                        <div class=" modal-footer">
                            <button class="btn btn-primary" type="submit" name="update">
                                Update</button>
                            <a href="../vegetable.php"><button class="btn btn-danger" type="button"
                                    data-bs-dismiss="modal">cancel</button></a>
                        </div>

                    </form>
                </div>

            </div>


        </div>
    </div>
</body>

<!-- update  -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>