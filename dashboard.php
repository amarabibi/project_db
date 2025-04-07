<?php
include "connection.php";

// Function to display data in a table
function displayTable($title, $query, $columns) {
    global $conn;
    
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
        return;
    }
    
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='table-container'>";
        echo "<h2 class='table-title'>$title</h2>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>";
        echo "<thead class='thead-dark'><tr>";
        
        // Display headers
        foreach ($columns as $column) {
            echo "<th>" . ucfirst(str_replace('_', ' ', $column)) . "</th>";
        }
        
        echo "</tr></thead><tbody>";
        
        // Display rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($columns as $column) {
                echo "<td>" . htmlspecialchars($row[$column] ?? '') . "</td>";
            }
            echo "</tr>";
        }
        
        echo "</tbody></table></div></div>";
    } else {
        echo "<div class='alert alert-info'>No data found for $title</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gig Data Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            background-color: #343a40;
            color: white;
            border-radius: 5px;
        }
        
        .table-container {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .table-title {
            color: #343a40;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #dee2e6;
        }
        
        .table th {
            background-color: #495057;
            color: white;
        }
        
        .table td {
            vertical-align: middle;
        }
        
        .alert {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Gig Management System</h1>
            <p class="lead fa fa-dashboard">Dashboard</p>
        </div>
        
        <?php
        // Display gig_intro table
        displayTable(
            "Gig Basic Information",
            "SELECT title, category, sub_category, keywords FROM gig_intro",
            ['title', 'category', 'sub_category', 'keywords']
        );
        
        // Display gig_2 table
        displayTable(
            "Gig Packages & Requirements",
            "SELECT basic_title, basic_description, basic_price, basic_delivery, req_question_1, req_type_1, faq_question_1, faq_answer_1 FROM gig_2",
            ['basic_title', 'basic_description', 'basic_price', 'basic_delivery', 'req_question_1', 'req_type_1', 'faq_question_1', 'faq_answer_1']
        );
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>