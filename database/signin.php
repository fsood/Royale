<?php
$user = $_POST['user'];
$password = $_POST['password'];


// Database connection
$conn = new mysqli('localhost','root','','royale');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into signin(user, password) values( ?, ?)");
  $stmt->bind_param("si", $user, $password);
  $execval = $stmt->execute();
  echo $execval;
  echo "updated successfully...";
  $stmt->close();
  $conn->close();
}

?>