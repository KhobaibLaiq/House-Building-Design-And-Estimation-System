<?php
$conn = mysqli_connect("localhost", "root", "", "house-design") or die("connection failed");
$sql = "SELECT map_img FROM maps WHERE id = 30"; // Replace 'id' with the actual ID of the image you want to display
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $imagePath = $row['map_img'];

  // Display the image
  echo '<img src="' . $imagePath . '" alt="Map Image">';
} else {
  echo "No image found.";
}

mysqli_close($conn);
?>
