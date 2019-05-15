<?php

//validar credenciales de acceso
$username=$_POST['username'];
$password=$_POST['password'];

//conectar a base de datos

$connection=mysqli_connect("localhost", "root", "", "login");
$consult="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysqli_query($connection, $consult);
$row=mysqli_num_rows($result);

if ($row>0) {
header("location:x.html");
} else {
  header("location:errorpage.html");
}
mysqli_free_result($result);
mysqli_close($connection);

 ?>
