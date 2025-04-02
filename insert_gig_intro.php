<?php
include "connection.php";
$title = $_POST['title'];
$category = $_POST['category'];
$sub_category = $_POST['sub_category'];
$keywords = $_POST['keywords'];
$sql="INSERT INTO gig_intro (title, category, sub_category, keywords) VALUES ('$title', '$category', '$sub_category', '$keywords')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn)  ;
}
?>