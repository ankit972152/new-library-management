<?php
include 'ankit/db.php';
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}

// Get the username from the session
$username = $_SESSION['username'];
?>


  <body>
    <?php require 'ankit/wel.php' ?>


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .header {
            margin-top: 2rem;
            text-align: center;
            color: #007bff;
        }
        .btn-warning a {
            text-decoration: none;
            color: #000;
        }
        .btn-warning a:hover {
            color: #333;
        }
        #searchResults {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
       <h2> <?php echo "Welcome to your cart---" .($username); ?></h2>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
            <button class="btn btn-warning me-md-2" type="button">
                <a class="nav-link" href="/login/payfine.php">Check Fine Status</a>
            </button>
            <button class="btn btn-primary me-md-2" type="button">
                <a class="nav-link" href="/login/cart.php">Avilabe books</a>
            </button>
        </div>
        <div class="container mt-5">
            <h1 class="mb-4">Search Book</h1>
            <div class="mb-3">
                <label for="bookName" class="form-label">Book Name:</label>
                <input 
                    type="text" 
                    id="bookName" 
                    class="form-control" 
                    placeholder="Enter book name" 
                    oninput="searchBook()"
                >
            </div>
            <div id="searchResults" class="mt-3">Results will appear here...</div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        function searchBook() {
            const bookName = document.getElementById('bookName').value.trim();
            const searchResults = document.getElementById('searchResults');

            if (bookName.length > 0) {
                searchResults.innerHTML = `<p>Searching for "<strong>${bookName}</strong>"...</p>`;
                // Simulate a search result (replace with actual backend/API logic)
                setTimeout(() => {
                    searchResults.innerHTML = `
                        <ul class="list-group">
                            <li class="list-group-item">Book 1: "${bookName}" by Author A</li>
                            <li class="list-group-item">Book 2: "${bookName} Volume 2" by Author B</li>
                            <li class="list-group-item">Book 3: "The Art of ${bookName}" by Author C</li>
                        </ul>
                    `;
                }, 500);
            } else {
                searchResults.innerHTML = `<p>Results will appear here...</p>`;
            }
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>


    <!-- JavaScript -->
    <script>
      async function searchBook() {
        const query = document.getElementById("bookName").value;

        if (query.trim().length === 0) {
          document.getElementById("searchResults").innerHTML = ""; // Clear results
          return;
        }

        try {
          const response = await fetch("search.php?name=" + encodeURIComponent(query));
          if (response.ok) {
            const results = await response.json();
            displayResults(results);
          } else {
            document.getElementById("searchResults").innerText = "Error fetching results.";
          }
        } catch (error) {
          console.error("Error:", error);
          document.getElementById("searchResults").innerText = "An error occurred.";
        }
      }

      function displayResults(results) {
        const resultsDiv = document.getElementById("searchResults");
        if (results.length === 0) {
          resultsDiv.innerHTML = "No books found.";
          return;
        }

        const list = results.map(
          (book) => `
            <div class="card mb-2"  >
              <div class="card-body">
              
                <h5 class="card-title">${book.name}</h5>
                <p class="card-text">${book.desc}</p>
              </div>
            </div>`
        ).join("");
        resultsDiv.innerHTML = list;
      }
    </script>
   
   <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 Library Management System. All Rights Reserved.</p>
    </footer>
    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>