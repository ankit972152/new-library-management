<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <!-- Main Content -->
    <div class="container">
        <div class="header">
            <h1>📚 My Book Cart</h1>
            <p>Your personal library at your fingertips</p>
        </div>
        <div class="input-section">
            <input type="text" id="myInput" placeholder="Enter book title..." />
            <button onclick="newElement()" class="addBtn">Add Book</button>
        </div>
        <ol id="myOL" class="book-list">
            <li>English Book</li>
            <li>Maths Book</li>
            <li>Hindi Book</li>
            <li>History Book</li>
            <li>Computer Book</li>
        </ol>
    </div>
    <script src="script.js"></script>
</body>
</html>

<style>


body, h1, p, ol, li, button, input {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    
}

body {
    background-color: grey;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

.container {
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    width: 90%;
    max-width: 500px;
    padding: 20px;
}

.header {
    text-align: center;
    margin-bottom: 20px;
}

.header h1 {
    font-size: 1.8rem;
    color: #333333;
}

.header p {
    font-size: 1rem;
    color: #666666;
}

.input-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
}

#myInput {
    flex: 1;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s;
}

#myInput:focus {
    border-color: #007BFF;
}

.addBtn {
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.addBtn:hover {
    background-color: #0056b3;
}

.book-list {
    list-style: none;
    padding: 0;
}

.book-list li {
    background-color: #f9f9f9;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    margin-bottom: 10px;
    padding: 10px;
    font-size: 1rem;
    color: #333333;
    transition: background-color 0.3s;
}

.book-list li:hover {
    background-color: #f0f0f0;
    cursor: pointer;
}
.upper{
    height:50px;
    width: 100%;
    background-color:black;
}


</style>
<script>
function newElement() {
    // Get the input value
    const inputValue = document.getElementById("myInput").value.trim();

    if (inputValue === '') {
        alert("Please enter a book title.");
        return;
    }

    // Create a new list item
    const li = document.createElement("li");
    li.textContent = inputValue;

    // Add to the list
    document.getElementById("myOL").appendChild(li);

    // Clear input
    document.getElementById("myInput").value = "";
}
</script>
   
      
     

   

<script>
    var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ol');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myOL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}
</script>