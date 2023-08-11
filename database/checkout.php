<?php
$Firstname = $_POST['Firstname'];
$email = $_POST['email'];
$companyName = $_POST['companyName'];
$message = $_POST['message'];
$checkbox = $_POST['checkbox'];


// Database connection
$conn = new mysqli('localhost','root','','royale');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into checkout(name, companyName, email, message) values( ?, ?, ?, ?)");
  $stmt->bind_param("sssi", $name, $companyName,$email, $message);
  $execval = $stmt->execute();
  echo $execval;
  echo "updated successfully...";
  $stmt->close();
  $conn->close();
}

?>
