<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$areaCode = $_POST['areaCode'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];

// Database connection
$conn = new mysqli('localhost','root','','royale');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $stmt = $conn->prepare("insert into reservation(firstName, lastName, email, areaCode, phone, subject) values(?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssssi", $firstName, $lastName,$email, $areaCode, $phone, $subject);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
}

?>