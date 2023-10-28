<?php

include('connection.php');
  
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];


$sql = "INSERT INTO users (fname, lname,phone,email)
VALUES ('$first_name','$last_name','$phone','$email')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 





?>