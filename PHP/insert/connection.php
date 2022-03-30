<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sumantest";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "Connected";
}
else{
   die("connection failed because" .mysqli_connect_error());
}
?>