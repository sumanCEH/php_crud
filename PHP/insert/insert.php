 <php
include("connection.php");
error_reporting(0);
 
if($_POST['submit']){
    $rl = $_POST["roll"];
    $nm = $_POST["name"];
    $fnm =$_POST["father"];
    $cl = $_POST["class"];
    $phn = $_POST["phone"];

    if($rl!="" && $nm!="" && $fnm!="" && $cl!="" && $phn!="")
    {
        $query = "INSERT INTO STUDENT VALUES ('$rl','$nm','$fnm','$cl','$phn')";
        $data = mysqli_query($conn,$query);
        
        if($data)
        {
            echo" Data inserted into database";
        }
    }
    else{
        echo "Fields are Required";
    }
}

?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../show/display.php" method="post">
    Name: <input type="text" name="name" value=""> <br><br>
    Father's Name: <input type="text" name="father" value=""> <br><br>
    class: <input type="text" name="class" value=""><br><br>
    phone_no: <input type="number" name="phone" value=""><br><br>
    <input type="submit" name="submit" vlaue="submit">
    
    </form>
</body>

</html>
