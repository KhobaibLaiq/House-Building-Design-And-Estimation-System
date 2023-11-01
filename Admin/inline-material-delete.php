<?php
   $id = $_GET['id'];

   $conn = mysqli_connect("localhost", "root", "", "house-design") or die("connection failled");
   $sql = "DELETE FROM material_rates WHERE id = {$id}";

   $reslut = mysqli_query($conn, $sql) or die("querry unsuccefull");
   header("Location: http://localhost/housedesign/admin/dashboard.php");
mysqli_close($conn);
?>