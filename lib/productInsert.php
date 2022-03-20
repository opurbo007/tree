<?php
include("./database/config.php");

// error_reporting(0);
// taking data from the form 

if(isset($_POST['insert'])){

    $NAME= $_POST['name'];
    $PRICE=$_POST['price'];
    $QUANTITY =$_POST['qty'];
    $IMAGE=$_FILES['image'];
  
   
    // take img name from database
    $img_name=$_FILES["image"]["name"];
      // take img loaction from database 
    $img_loc=$_FILES["image"]["tmp_name"];
    $img_des="lib/img/".$img_name;
    //  move uploaded img to img folder inside product 
    move_uploaded_file($img_loc,$img_des);
    
    mysqli_query($db,"INSERT INTO `vegetable` ( `name`, `price`, `quantity`, `img`) VALUES ('$NAME', '$PRICE', '$QUANTITY', '$img_des');");
    header("location:./vegetable.php");


}

?>