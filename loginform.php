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
        <a class="nav-link" href="website.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<?php
session_start();

if(isset($_SESSION['username']))
{
    header('location:home.php');
}
?>
<div class="container mt-3">
    <form action="handlelogin.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="username" placeholder="enter your name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <button type="submit" value="login" class="btn btn-primary">Submit </button>
</form> 
</div>

</body>
</html>
