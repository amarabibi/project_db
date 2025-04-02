<?php
include "connection.php";
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
   body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.navbr{
 
    overflow: hidden;
   text-align: center;
    height: 100px;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
   
}
.navbr a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
   
}
.navbr a:hover {
    background-color: #ddd;
    color: black;
}
[href="#"] {
    
    text-align: center;
    color: white;
}
input[type="text"] {
justify-content: center;
    width: 250px;
    height: 30px;
    padding: 10px;
    margin-top: 20px;
   
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

  </style>
</head>
<body>

    <nav class="navbr">
    <img src="images/Preview (1).png" alt="" style="width: 150px; height: 130px; float: left;margin-right:20px;">
        <div class="nav-links" style="margin-top: 20px;">
        <a href="#">Home</a>
        <a href="#">&nbsp; Programming & Tec</a>
        <a href="#"> &nbsp;  Animation & video</a>
        <a href="#"> &nbsp;    Graphic designing</a>
        <a href="#"> &nbsp;       Digital & social media</a>
       <a href="gig.php" class="active" target="_blank">&nbsp; Create an account</a>
        <a href="#"> &nbsp;  Login</a>
        </div>
    </nav>
</body>
</html>