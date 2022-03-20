<?php

$username = "";
$password = "";
$errors = array(); 



if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

// for username validation
  if (empty($username)) {
  	array_push($errors, "Username cannot be empty");
  }
  // for password validation
  if (empty($password)) {
  	array_push($errors, "Password cannot be empty");
  }
// if everything okey then
  if (count($errors) == 0) {
  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
   
    if (mysqli_num_rows($results)==1)
    {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You can logged in";
  	  header('location: ../catagory.php');
  	}else {
  		array_push($errors, "Are you really Admin? Because the username or password you enter is wrong!");
  	}
  }
}

?>