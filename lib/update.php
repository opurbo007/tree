<?php
include("../database/config.php");

// taking data from the form

if(isset($_POST['update'])){
$ID =$_POST['p_id'];
$NAME= $_POST['name'];
$PRICE=$_POST['price'];
$QUANTITY =$_POST['qty'];
$IMAGE=$_FILES['image'];

// print_r($IMAGE);
// take img name from database
$img_name=$_FILES["image"]["name"];
// take img loaction from database
$img_loc=$_FILES["image"]["tmp_name"];
$img_des="lib/img/".$img_name;
// move uploaded img to img folder inside product
move_uploaded_file($img_loc,$img_des);

mysqli_query($db,"UPDATE `vegetable` SET `name`='{$NAME}',`price`='{$PRICE}',`quantity`='{$QUANTITY}',`img`='{$img_des}' WHERE
id={$ID}");

header("location:../vegetable.php");


}

?>