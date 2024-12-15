<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Fine Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Library System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
          <a class="nav-link" href="/login/signin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login/signin.php">signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login/logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login/books.php">Books Avilable</a>
        </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-5 text-primary">User Fine Management</h1>
                <p class="lead">Manage fines for overdue books and payments</p>
            </div>
        </div>
    </div>

    <!-- User Search and Fine Management -->
    <div class="container mt-5">
        <!-- Search Form -->
        <form class="mb-4">
            <div class="row g-3 align-items-center">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Enter User ID or Name">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <!-- Fine Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>Book Title</th>
                        <th>Due Date</th>
                        <th>Fine Amount (₹)</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Introduction to Algorithms</td>
                        <td>2024-11-20</td>
                        <td>50</td>
                        <td class="text-danger">Unpaid</td>
                        <td>
                            <button class="btn btn-success btn-sm">Pay Now</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Clean Code</td>
                        <td>2024-11-18</td>
                        <td>100</td>
                        <td class="text-danger">Unpaid</td>
                        <td>
                            <button class="btn btn-success btn-sm">Pay Now</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Emily Johnson</td>
                        <td>Python Crash Course</td>
                        <td>2024-11-15</td>
                        <td>150</td>
                        <td class="text-success">Paid</td>
                        <td>
                            <button class="btn btn-secondary btn-sm" disabled>Paid</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 Library Management System. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
