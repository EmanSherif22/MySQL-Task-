<?php
session_start();

if(!isset($_SESSION['username']))
{
    header('location:loginform.php');
}

?>
<html>
<head>
    <title>My SQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My SQL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="customers.php">Customers</a>
        <a class="dropdown-item" href="form1.php">customers Id</a>
        <a class="dropdown-item" href="orders.php">Orders</a>
        <a class="dropdown-item" href="products.php">Most Products</a>
        <a class="dropdown-item" href="employees.php">Employees</a>
        <a class="dropdown-item" href="form2.php">customer name</a>
        <a class="dropdown-item" href="form3.php">city and customers</a>
        <a class="dropdown-item" href="form4.php">Products name</a>
        <a class="dropdown-item" href="form5.php">Rich customers</a>
        <a class="dropdown-item" href="form6.php">Product Id</a>
        </div>
      </li>
    </ul>
       <div class="form-inline my-2 my-lg-0">
      <a  class="btn btn-outline-success my-2 my-sm-0 text-white" href="logout.php">LogOut</a>
    </div>
  </div>
</nav>
 <section>
    <header style="height:100vh" class="bg-danger text-center d-flex align-items-center justify-content-center text-white">
        <h1>Welcome to MySQL</h1>
        </header>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
