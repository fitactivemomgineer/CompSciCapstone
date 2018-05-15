<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <img src="logo.JPG" alt= "female running">
        <h1> Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>! <br> Welcome to The Ultimate Marathon Mom.</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
      <li>
        <a href="runners.html">Runners</a>
      </li>
      <li>
        <a href="bikers.html">Bikers</a>
      </li>
      <li>
        <a href="apparel.html">Apparel</a>
      </li>
      <li>
        <a href="nutrition.html">Nutrition</a>
      </li>
    </ul>
    <div class="jumbotron">
      <h2>
        Meet Christine, our TUMM community leader!
      </h2>
      <p>
         She has created this website for momma's who are lovers of fitness, health, and fashion!
        <br>
         Because let's face it, things just don't move the same after having a baby!
      <p>
        <a class="btn btn-primary btn-large" href="#">Learn more</a>
      </p>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>
