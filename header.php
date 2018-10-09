<?php
    include_once 'kettle.db.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Kettle Crafts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="test.css" />
  <script src="test.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<!--========================= NAVBAR ===============================-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid ">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" name="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.html"><img class="img-responsive navbar-brand" src="kettle-images/index-img/K-logo.png" alt="logo"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-center">
          <li><a href="index.html">Home</a></li>
          <li class="active"><a href="paint.php">Painting</a></li>
          <li><a href="sewing.php">Sewing</a></li>
          <li><a href="handmade.php">Handmade Items</a></li>
          <li><a href="kits.php">Kits</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
        <!-- <form class="navbar-form navbar-right" action="/action_page.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart"></span>Cart</a>
          </li>
        </ul> -->
      </div>
    </div>
  </nav>
