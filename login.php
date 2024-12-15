<?php
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'ankit/db.php';
  $username=$_POST["username"];
  $password=$_POST["password"];
  
 $sql="select*from users where username='$username' AND password='$password'";
 $result=mysqli_query($conn,$sql);
 $num=mysqli_num_rows($result);
 if($num==1){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    header("location: admin.php");
 }
 if($showAlert){
  echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> you successfully created your account.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Your are not loggedin successfully!.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

}
  ?>
 
  <body>
    
    <?php require 'ankit/wel.php' ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
           
            padding: 2rem;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-label {
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-6 col-lg-4 login-container">
            <h1 class="login-header">Login Now</h1>
            <form action="login.php" method="post">
                <div class="mb-4">
                    <label for="username" class="form-label">Enter Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Enter Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none">Forgot Password?</a>
                </div>
            </form>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 Library Management System. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
