<?php 
require '../connectDB.php';
$conn = connectDB();
$value =  $_REQUEST['valueCategory'];
$query = "INSERT INTO `theloai` VALUES ('','$value');";
$result = mysqli_query($conn, $query);
header("Location: http://localhost/CSE485/admin/category.php");
