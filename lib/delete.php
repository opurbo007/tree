<?php
include("../database/config.php");

$p_id=$_GET['id'];

mysqli_query($db,"DELETE FROM `vegetable` WHERE id ={$p_id}");
header("location:../vegetable.php");

?>