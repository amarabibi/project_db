<?php
global $sql, $conn;
include "connection.php";
$query="SELECT  title,category,sub_category,keywords FROM gig_intro";
$result=mysqli_query ($conn,$query);
if(mysqli_num_rows ($result)>0)
if($result) {
    echo "<table border='1' class='table'>";
    echo "<tr>";
    echo "<th>Title</th>";
    echo "<th>Category</th>";
    echo "<th>Sub_category</th>";
    echo "<th>Keywords</th>";
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['sub_category'] . "</td>";
        echo "<td>" . $row['keywords']  . "</td>";
        echo "</tr>";

    }

    echo "</table>";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        .table{
            margin-left: 25%;
            color: blue;
            border: 2px solid lightgreen;
        }
        tr{
            color:darkblue;
        }
        th{
            color: black;
        }
    </style>
</head>
<body>



</body>
</html>
