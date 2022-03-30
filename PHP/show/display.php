<?php
include("connection.php");
error_reporting(0);
 
if($_POST['submit']){

    $nm = $_POST["name"];
    $fnm =$_POST["father"];
    $cl = $_POST["class"];
    $phn = $_POST["phone"];

    if($nm!="" && $fnm!="" && $cl!="" && $phn!="")
    {
        $query = "INSERT INTO STUDENT (name, father_name, class, phone_no)
         VALUES ('$nm','$fnm','$cl','$phn')";
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


<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn,$query) or die(mysqli_error($conn));
$total = mysqli_num_rows($data);



if($total>0){

    ?>
 <table border="1">
     <tr>
         <td>roll</td>
         <td>name</td>
         <td>father_name</td>
         <td>class</td>
         <td>phone_no</td>
        <td>Actions</td>
     </tr>
 

<?php
    while($result = mysqli_fetch_assoc($data)){
        $key = $result['roll'];
        echo"<tr>
                <td>".$result['roll']."</td>
                <td>".$result['name']."</td>
                <td>".$result['father_name']."</td>
                <td>".$result['class']."</td>
                <td>".$result['phone_no']."</td>
                <td><a href='edit.php?roll=$key'>Edit</a> | <a href='delete.php?roll=$key'>Delete</a></td>
            </tr>";
            // error checking and printing as objects :-
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";

    }
}
   else{
    echo"<script>alert('No Record Found'); </script>";
}

?>
</table>


