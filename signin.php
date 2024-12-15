<?php
include 'ankit/db.php';

$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST["username"];
  $email=$_POST["email"];
  $number=$_POST["number"];
  $dob=$_POST["dob"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  $exist=false;
  if(($password==$cpassword) && $exist==false){
 $sql="INSERT INTO `users` ( `username`,`email`,`number`,`dob`, `password`,`dt`) VALUES ( '$username','$email','$number','$dob', '$password',current_timestamp())";
 $result=mysqli_query($conn,$sql);
 if($result){
    $showAlert=true;
 }
}
else{
    $showError="password do not match";
}
}
if($showAlert){
  echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> you successfully created your account.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else{
   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Your account not created successfully!.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
  <body>
    <?php require 'ankit/wel.php' ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .signup-container {
            margin-top: 5%;
            padding: 2rem;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .signup-header {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .form-label {
            font-weight: 500;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-text {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-8 col-lg-6 signup-container">
            <h1 class="signup-header">Signup Now</h1>
            <form action="signin.php" method="post" class="mt-4">
                <div class="mb-3">
                    <label for="username" class="form-label">Enter Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Enter E-mail</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="example@email.com" required>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Enter Number</label>
                    <input type="tel" id="number" name="number" class="form-control" placeholder="1234567890" pattern="[0-9]{10}" required>
                    <div class="form-text">Enter a valid 10-digit mobile number.</div>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Enter DOB</label>
                    <input type="date" id="dob" name="dob" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Enter Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter a strong password" required>
                </div>
                <div class="mb-3">
                    <label for="cPassword" class="form-label">Confirm Password</label>
                    <input type="password" id="cPassword" name="cpassword" class="form-control" placeholder="Re-enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
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



    