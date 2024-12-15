<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>books</title>

            

<body>
<?php require 'ankit/wel.php' ?>
<?php
$login=true;
$server="localhost";
$username="root";
$password="";
$database="users";

$conn=mysqli_connect($server,$username,$password,$database);
?>



<div class="row">
  <?php
  $sql= "SELECT * FROM `books`"; 
  $result= mysqli_query($conn,$sql);
  while($row= mysqli_fetch_assoc($result)){
    $id =$row['category_id'];
    $cat= $row['name'];
    $desc= $row['description'];
    
echo  '<div class="col-md-4 my-2">
    <div class="card" style="width: 18rem;">
  <img src="https://picsum.photos/id/3/200/150" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="books.php?catid='.$id.'">'.$cat.'</a></h5>
    <p class="card-text">'.$desc.'....</p>
    <a href="admin.php?catid='.$id.'" class="btn btn-primary" >Add book</a>
    <a href="admin.php?catid='.$id.'" class="btn btn-danger" >Delete book</a>
  </div>
</div>
</div>';
  }
  ?>

<?php
  $id= $_GET['catid'];
  $sql= "SELECT * FROM `books` where category_id=$id"; 
  $result= mysqli_query($conn,$sql);
  while($row= mysqli_fetch_assoc($result)){
  $catid=$row['category_id'];  
  $catname= $row['name'];
  $catdesc= $row['description'];
}
  ?>

<div class="container bg-warning my-4">
  <h2 class="text-center"> Welcome to <?php echo $catname;?> Course </h2>
<div class="container my-4"><p> hii <?php echo $catdesc; ?> thanku.</p> 
</div>

</body>
    

<footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 Library Management System. All Rights Reserved.</p>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
