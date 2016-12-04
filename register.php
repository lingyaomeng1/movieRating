<?php
$username = $_POST['username'];
$pw = $_POST['password'];
// echo "Thanks for register, ".$username;
// echo $pw;
$hashedPassword = password_hash($pw, PASSWORD_DEFAULT);
$con = mysqli_connect("localhost","root","root" , "movierating", "8889");
$sql="INSERT INTO `Users` (`username`, `u_password`, `Admin_YesNo`) VALUES ('$username', '$hashedPassword', 0);";
$result = mysqli_query($con,$sql);
setcookie("movierating", $username, time()+60);
header('Location: index.php');
 ?>
