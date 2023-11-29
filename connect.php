<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "chickenfood";

  $conn = mysqli_connect($servername,$username,$password,$database);
  if(!$conn){
    die("Ket noi khong duoc".mysqli_connect_error());
  }
?>

	
