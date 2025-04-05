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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
   body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.navbr{
 background-color: #333;
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
.auth-buttons .btn {
    margin-left: 10px;
    padding: 0.375rem 1rem;
    font-weight: 500;
}

.btn-signup {
    background-color: #3498db;
    border-color: #3498db;
}

.btn-signup:hover {
    background-color: #2980b9;
    border-color: #2980b9;
}

.btn-login {
    border-color: #3498db;
    color: #3498db;
}

.btn-login:hover {
    background-color: rgba(52, 152, 219, 0.1);
}

@media (max-width: 992px) {
    .navbar-brand img {
        height: 50px;
    }
    
    .auth-buttons {
        margin-top: 10px;
    }
    
    .nav-link-custom {
        margin: 0.25rem 0;
    }
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
        <div class="auth-buttons d-flex">
                    <a href="login.php" class="btn btn-outline-light btn-login">
                        <i class="fas fa-sign-in-alt me-1"></i> Login
                    </a>
                    <a href="gig.php" class="btn btn-light btn-signup">
                        <i class="fas fa-user-plus me-1"></i> Sign Up
                    </a>
                </div>
        </div>
    </nav>
</body>
</html>