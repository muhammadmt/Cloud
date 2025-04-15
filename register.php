<?php   

$server = "localhost";
$username = "root";
$password = "";
$db = "ift302";

$con = mysqli_connect($server,$username, $password,$db);

if(isset($_POST['save'])){
 
    $spro = $_POST['sprogram'];
    $sname = $_POST['sname'];
    $sreg = $_POST['sregistration'];
    $slevel = $_POST['slevel'];

    $query = mysqli_query($con, "INSERT INTO users (sprogram, sname, sregistration, slevel) VALUES ('$spro','$sname', '$sreg','$slevel')");
    if(!$query){
        echo "<script> alert('Error had occour');</script>";
    }else{
      
        echo "<script> alert('Record Inserted successfully');</script>";

    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<style>

    .header{

        width: 100%;
        height: 20%;
        background-color: black;
        color: white;
        align-content: center;
        padding-left: 100px;
        padding-top: 30px;
        padding-bottom: 30px;
    }
</style>
</head>
<body>
    
<h4 class="header"> REGISTRATION PAGE</h4>

<div class="container">

<div class="row">

<div class="col-lg-3">

</div>

<div class="col-lg-6">

<form action="#" class="group" method="POST">

<label for=""> Student Program</label><input class="form-control" type="text" required name="sprogram"><br>
<label for=""> Student Name</label><input class="form-control" type="text" required name="sname"><br>
<label for=""> Student RegNo.</label><input class="form-control" type="text" required name="sregistration"><br>
<label for=""> Student Level</label><input class="form-control" type="text" required name="slevel"><br>
<input type="submit" class="btn btn-primary" value="save" name="save">


</form>


</div>
</div>
</div>
</body>


<a href="present.php">presentation</a>

<script src="js/bootstrap.min.js"></script>
</html>