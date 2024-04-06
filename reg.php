<?php
// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$email = $_POST['email'];
$password = $_POST['password'];

// Create connection
$conn =mysqli_connect("localhost", "root", "", "perfumedb");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



// Insert data into table
$sql = "INSERT INTO regtbl (first_name, last_name, address, pincode, email, password)
VALUES ('$first_name', '$last_name', '$address',  '$pincode', '$email' , '$password')";

if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
  echo "<script> alert('Wecome  Now you are member of The perfume planet'); 
  window.location.href='login.php'; </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
