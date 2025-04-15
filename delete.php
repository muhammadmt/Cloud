<?php   

$server = "localhost";
$username = "root";
$password = "";
$db = "ift302";

$con = mysqli_connect($server,$username, $password,$db);


$id = $_GET['id'];


    $query = mysqli_query($con, "DELETE FROM users WHERE id = '$id'");
    if(!$query){
        echo "<script> alert('Error had occour');</script>";
    }else{
      
        echo "<script> alert('Record Updated successfully');</script>";
        header('location:present.php');

    }


?>