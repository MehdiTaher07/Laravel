<?php
$conn = new mysqli("localhost","root","","notifications_data");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql = "SELECT * FROM noti";
$result = $conn->query($sql);


echo $result->num_rows;

//$row = mysqli_fetch_array($result);
//echo $row;
//echo implode(', ', $row);
//echo json_encode($row);

?>