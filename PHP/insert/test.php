<?php 
include("connection.php");
$query = "INSERT INTO STUDENT VALUES ('3','priya Das','Suman das','BCA','244666139')";
$data = mysqli_query($conn,$query);

if($data)
{
    echo" Data inserted into database";
}
else{
    echo"error";
}
?>