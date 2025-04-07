<?php
include "connection.php";
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Gig - Requirements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
         body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .progress-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 0 15px;
        }
        
        ul.connected-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
            position: relative;
        }

        ul.connected-list li {
            position: relative;
            text-align: center;
            flex: 1;
        }

        /* Circle markers */
        ul.connected-list li::before {
            content: '';
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fff;
            border: 3px solid #dee2e6;
            z-index: 2;
            transition: all 0.3s ease;
        }

        /* Active circle */
        ul.connected-list li.active::before {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        /* Completed circle */
        ul.connected-list li.completed::before {
            background-color: #198754;
            border-color: #198754;
            color: white;
            content: '✓';
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
        }

        /* Connecting lines */
        ul.connected-list li::after {
            content: '';
            position: absolute;
            top: -11px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #dee2e6;
            z-index: 1;
        }

        /* Active line */
        ul.connected-list li.active::after,
        ul.connected-list li.completed::after {
            background-color: #0d6efd;
        }

        /* Completed line */
        ul.connected-list li.completed + li::after {
            background-color: #0d6efd;
        }

        /* Remove line from first item */
        ul.connected-list li:first-child::after {
            width: 50%;
            left: 50%;
        }

        ul.connected-list li:last-child::after {
            width: 50%;
        }

        /* Style for the text */
        ul.connected-list li a {
            text-decoration: none;
            color: #6c757d;
            font-weight: 500;
            display: inline-block;
            padding: 35px 5px 10px;
            transition: all 0.3s ease;
            width: 100%;
        }

        ul.connected-list li.active a,
        ul.connected-list li.completed a {
            color: #0d6efd;
            font-weight: 600;
        }

    </style>
</head>
<body>
<div class="progress-container">
        <ul class="connected-list">
            <li class="active"><a href="gig.php">Overview</a></li>
            <li class="active"><a href="gig_2.php">Requirements</a></li>
            <li class="active"><a href="#gallery">Gallery</a></li>
            <li><a href="#publish">Publish</a></li>
        </ul>
    </div>
    
    
</body>
</html>