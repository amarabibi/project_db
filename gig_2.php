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
    </style>
</head>
<body>
    <div class="progress-container">
        <ul class="connected-list">
            <li class="completed"><a href="gig.php">Overview</a></li>
            <li class="active"><a href="gig_2.php">Requirements</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#publish">Publish</a></li>
        </ul>
    </div>
    
    <div class="page-container">
    <?php
include "connection.php";
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Gig - Requirements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        ul.connected-list li.active::before {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

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

        ul.connected-list li.active::after,
        ul.connected-list li.completed::after {
            background-color: #0d6efd;
        }

        ul.connected-list li.completed + li::after {
            background-color: #0d6efd;
        }

        ul.connected-list li:first-child::after {
            width: 50%;
            left: 50%;
        }

        ul.connected-list li:last-child::after {
            width: 50%;
        }

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
        
        .form-control, .form-select {
            border-radius: 5px;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        
        .hint-text {
            color: #6c757d;
            font-size: 0.9rem;
            margin-top: -10px;
            margin-bottom: 15px;
        }
        
        .package-card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f8f9fa;
        }
        
        .package-title {
            font-weight: 600;
            margin-bottom: 15px;
            color: #212529;
        }
    </style>
</head>
<body>
  
    
    
        <h2 class="mb-4">Gig Requirements</h2>
        <p class="text-muted mb-4">Specify what you need from buyers to get started</p>
        
        <div class="form-section">
            <div class="instructions">
                <h5>Service Packages</h5>
                <p>Create packages to offer your services at different price points with different deliverables.</p>
                
                <h5 class="mt-4">Requirements</h5>
                <p>Let buyers know what information you need to start working on their order.</p>
                
                <h5 class="mt-4">Frequently Asked Questions</h5>
                <p>Add common questions and answers to help buyers understand your service better.</p>
            </div>
            
            <div class="form-fields">
                <form action="insert_gig_2.php" method="POST" enctype="multipart/form-data">
                    <!-- Packages Section -->
                    <h5>Service Packages</h5>
                    <div class="package-card">
                        <div class="package-title">Basic Package</div>
                        <div class="mb-3">
                            <label for="basic_title" class="form-label">Package Title</label>
                            <input type="text" class="form-control" id="basic_title" name="basic_title" value="Basic" required>
                        </div>
                        <div class="mb-3">
                            <label for="basic_description" class="form-label">Description</label>
                            <textarea class="form-control" id="basic_description" name="basic_description" rows="3" required>I will deliver the basic service with standard quality</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="basic_price" class="form-label">Price ($)</label>
                            <input type="number" class="form-control" id="basic_price" name="basic_price" min="5" step="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="basic_delivery" class="form-label">Delivery Time (days)</label>
                            <input type="number" class="form-control" id="basic_delivery" name="basic_delivery" min="1" required>
                        </div>
                    </div>
                    
                    <!-- Requirements Section -->
                    <h5 class="mt-4">Requirements</h5>
                    <p class="hint-text">What information do you need from buyers to start working?</p>
                    
                    <div class="mb-3">
                        <label class="form-label">Requirement 1</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text">Question</span>
                            <input type="text" class="form-control" name="req_question_1" placeholder="e.g. What's your project about?" required>
                        </div>
                        <select class="form-select" name="req_type_1" required>
                            <option value="text">Text Input</option>
                            <option value="file">File Upload</option>
                            <option value="choice">Multiple Choice</option>
                        </select>
                    </div>
                    
                    <button type="button" class="btn btn-outline-secondary btn-sm mb-4" id="addRequirement">+ Add Another Requirement</button>
                    
                    <!-- FAQ Section -->
                    <h5 class="mt-4">Frequently Asked Questions</h5>
                    <p class="hint-text">Add common questions and answers to help buyers</p>
                    
                    <div class="mb-3">
                        <label class="form-label">FAQ 1</label>
                        <div class="input-group mb-2">
                            <span class="input-group-text">Question</span>
                            <input type="text" class="form-control" name="faq_question_1" placeholder="e.g. How long does delivery take?" required>
                        </div>
                        <textarea class="form-control" name="faq_answer_1" rows="2" placeholder="Enter the answer" required></textarea>
                    </div>
                    
                    <button type="button" class="btn btn-outline-secondary btn-sm mb-4" id="addFAQ">+ Add Another FAQ</button>
                    
                    <div class="btn-container">
                        <a href="gig.php" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Save & Continue</button>
                    </div>
                </form>
            </div>
        </div>
    
    
    <script>
        // Add requirement field
        let reqCount = 1;
        document.getElementById('addRequirement').addEventListener('click', function() {
            reqCount++;
            const newReq = `
                <div class="mb-3 requirement-field">
                    <label class="form-label">Requirement ${reqCount}</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Question</span>
                        <input type="text" class="form-control" name="req_question_${reqCount}" required>
                    </div>
                    <select class="form-select" name="req_type_${reqCount}" required>
                        <option value="text">Text Input</option>
                        <option value="file">File Upload</option>
                        <option value="choice">Multiple Choice</option>
                    </select>
                    <button type="button" class="btn btn-outline-danger btn-sm mt-2 remove-field">Remove</button>
                </div>
            `;
            this.insertAdjacentHTML('beforebegin', newReq);
        });
        
        // Add FAQ field
        let faqCount = 1;
        document.getElementById('addFAQ').addEventListener('click', function() {
            faqCount++;
            const newFAQ = `
                <div class="mb-3 faq-field">
                    <label class="form-label">FAQ ${faqCount}</label>
                    <div class="input-group mb-2">
                        <span class="input-group-text">Question</span>
                        <input type="text" class="form-control" name="faq_question_${faqCount}" required>
                    </div>
                    <textarea class="form-control" name="faq_answer_${faqCount}" rows="2" required></textarea>
                    <button type="button" class="btn btn-outline-danger btn-sm mt-2 remove-field">Remove</button>
                </div>
            `;
            this.insertAdjacentHTML('beforebegin', newFAQ);
        });
        
        // Remove field
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-field')) {
                e.target.closest('.requirement-field, .faq-field').remove();
                // Update counters if needed
            }
        });
    </script>
</body>
</html>
    </div>
    
    <br><br>
    <footer>
        <!-- Footer content here -->
    </footer>
</body>
</html>