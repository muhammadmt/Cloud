<?php   

$server = "localhost";
$username = "root";
$password = "";
$db = "ift302";

$con = mysqli_connect($server,$username, $password,$db);

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
    
<h4 class="header"> PRESENTATION PAGE</h4>

<div class="container">

<div class="row">



<div class="col-lg-12">

<table class="table table-stript">
    <thead>
        <th>ID</th>
        <th>Student Program</th>
        <th>Student Name</th>
        <th>Student Registration</th>
        <th>Student Level</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
<?php

$query = mysqli_query($con, "SELECT * FROM users");
    
if($query->num_rows > 0){

    while($row = mysqli_fetch_assoc($query)){
  

?>
    <tbody>
        <tr>
            <td><?php echo $row['id'];  ?></td>
            <td><?php echo $row['sprogram'];  ?></td>
            <td><?php echo $row['sname'];  ?></td>
            <td><?php echo $row['sregistration'];  ?></td>
            <td><?php echo $row['slevel'];  ?></td>
            <td><a class="btn btn-warning" href="update.php?id=<a?php echo $row['id'];  ?>">Update</a></td>
            <td><a class="btn btn-danger" href="delete.php?id=<a?php echo $row['id'];  ?>">Delete</a></td>
        </tr>

        <?php   }
    
    } ?>
    </tbody>

    </table>

</div>
</div>
</div>



</body>



<a href="register.php">register</a>

<script src="js/bootstrap.min.js"></script>
</html>