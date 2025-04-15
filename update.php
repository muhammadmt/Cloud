<?php   

$server = "localhost";
$username = "root";
$password = "";
$db = "ift302";

$con = mysqli_connect($server,$username, $password,$db);


$id = $_GET['id'];

if(isset($_POST['save'])){
 
    $spro = $_POST['sprogram'];
    $sname = $_POST['sname'];
    $sreg = $_POST['sregistration'];
    $slevel = $_POST['slevel'];

    $query = mysqli_query($con, "UPDATE users SET sprogram = '$pro', sname = '$sname', sregistration = '$sregistration', slevel = '$slevel' WHERE id = '$id' ");
    if(!$query){
        echo "<script> alert('Error had occour');</script>";
    }else{
      
        echo "<script> alert('Record Updated successfully');</script>";
        header('location:present.php');

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
    
<h4 class="header"> UPDATE PAGE</h4>

<div class="container">

<div class="row">

<div class="col-lg-3">

</div>
<?php   


if(isset($_GET['id'])){

    $id = $_GET['id'];
    
    $queryOne = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");

    $row = mysqli_fetch_assoc($queryOne);

    
    

?>
<div class="col-lg-6">

<form action="#" class="group" method="POST">

<label for=""> Student Program</label><input class="form-control" type="text" required name="sprogram" value="<?php echo $row['sprogram']; ?>"><br>
<label for=""> Student Name</label><input class="form-control" type="text" required name="sname"   value="<?php echo $row['sname']; ?>"><br>
<label for=""> Student RegNo.</label><input class="form-control" type="text" required name="sregistration"  value="<?php echo $row['sregistration']; ?>"><br>
<label for=""> Student Level</label><input class="form-control" type="text" required name="slevel"  value="<?php echo $row['slevel']; ?>"><br>
<input type="submit" class="btn btn-warning" value="update" name="save">


</form>

<?php  } ?>
</div>
</div>
</div>
</body>


<a href="present.php">presentation</a>

<script src="js/bootstrap.min.js"></script>
</html>