<?php
$plan_id = $_GET['id'];
$phone = $_GET['phone_number'];
$email = $_GET['email'];
$message = $_GET['message'];

$conn = mysqli_connect("localhost", "root", "", "house-design") or die("connection failed");
$sql = "INSERT INTO requestform (plane_id, phone, email, message) 
VALUES ('$plan_id', '$phone', '$email', '$message')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/housedesign/index.php");
mysqli_close($conn);
?>
