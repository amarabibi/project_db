<?php
include "connection.php";
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Gig</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .page-container {
            background-color: white;
            max-width: 1000px;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #dee2e6;
            margin: 20px auto;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        h1 {
            text-align: center;
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
        }
        
        .form-section {
            display: flex;
            gap: 30px;
        }
        
        .instructions {
            flex: 1;
            padding-right: 20px;
        }
        
        .form-fields {
            flex: 2;
        }
        
        .form-control {
            border-radius: 5px;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
        }
        
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        
        select.form-control {
            height: 50px;
        }
        
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        
        .btn {
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: 500;
        }
        
        .btn-back {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        
        .btn-next {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        
        .tag-hint {
            color: #6c757d;
            font-size: 0.9rem;
            margin-top: -15px;
            margin-bottom: 20px;
        }
        .btn{
            background-color:rgb(73, 75, 79);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        [href="gig_2.php"] {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="progress-container">
        <ul class="connected-list">
            <li class="active"><a href="gig.php">Overview</a></li>
            <li ><a href="gig_2.php">Requirements</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#publish">Publish</a></li>
        </ul>
    </div>
    
    <div class="page-container">
        <h1>Create Your Gig</h1>
        
        <div class="form-section">
            <div class="instructions">
                <br>
                <h3>Gig Title</h3>
                <p>As your Gig storefront, your <strong>title is the most important place</strong> to include keywords that buyers would likely use to search for a service like yours.</p>
                <br>
                <h3>Category</h3>
                <p>Choose the category and sub-category most suitable for your Gig.</p>
                <br><br>
                <h3>Search Tags</h3>
                <p>Tag your Gig with buzz words that are relevant to the services you offer. Use all 5 tags to get found.</p>
            </div>
            
            <div class="form-fields">
                <br><br>
                <form action="insert_gig_intro.php" method="POST" enctype="multipart/form-data">
                    <input type="text" class="form-control" id="title" name="title" placeholder="I will do..." required>
                    <br><br><br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control" id="category" name="category" required>
                                <option value="">Select a category</option>
                                <option value="graphic_designer">Graphic designer</option>
                                <option value="web_developer">Web developer</option>
                                <option value="animation">Animation</option>
                                <option value="social_media_marketing">Social media marketing</option>
                                <option value="data">Data</option>
                                <option value="business">Business</option>
                                <option value="video_editing">Video editing</option>
                                <option value="finance">Finance</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="sub_category" id="sub_category" required>
                                <option value="">Select a sub-category</option>
                                <option value="logo_design">Logo design</option>
                                <option value="web_design">Web design</option>
                                <option value="video_animation">Video animation</option>
                                <option value="social_media_management">Social media management</option>
                                <option value="data_entry">Data entry</option>
                                <option value="business_plan">Business plan</option>
                                <option value="video_editing_sub">Video editing</option>
                                <option value="finance_analysis">Finance analysis</option>
                            </select>
                        </div>
                    </div>
                    <br><br>
                    <label for="keywords" class="form-label"><strong>Positive Keywords</strong></label>
                    <p class="text-muted">Enter search terms you feel your buyers will use when looking for your service.</p>
                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="#Tags" required>
                    <p class="tag-hint">5 tags maximum. Use letters and numbers only.</p>
                    
                    <div class="btn-container">
                        <a href="home.php" class="btn btn-secondary btn-back">Back</a>
                       <a href="gig_2.php" class="btn btn-secondary btn-next">Save&Continue</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <br><br>
    <footer>
        <!-- Footer content here -->
    </footer>
</body>
</html>