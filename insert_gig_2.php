<?php
include "connection.php";
$basic_title = $_POST['basic_title'];
$basic_description = $_POST['basic_description'];
$basic_price = $_POST['basic_price'];
$basic_delivery = $_POST['basic_delivery'];
$req_question_1= $_POST['req_question_1'];
$req_type_1= $_POST['req_type_1'];
$faq_question_1= $_POST['faq_question_1'];
$faq_answer_1= $_POST['faq_answer_1'];
$sql="INSERT INTO gig_2 (basic_title, basic_description, basic_price, basic_delivery, req_question_1, req_type_1, faq_question_1, faq_answer_1) VALUES ('$basic_title', '$basic_description', '$basic_price', '$basic_delivery', '$req_question_1', '$req_type_1', '$faq_question_1', '$faq_answer_1')";
// $sql="INSERT INTO gig_basic (basic_title, basic_description, basic_price, basic_delivery) VALUES ('$basic_title', '$basic_description', '$basic_price', '$basic_delivery')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . mysqli_error($conn)  ;
}
?>