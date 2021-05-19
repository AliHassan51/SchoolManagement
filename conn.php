<?php
$conn = new mysqli("localhost","root","","schoolmanagement");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
/*else
{
    echo "Connection sucess";
}*/
?>