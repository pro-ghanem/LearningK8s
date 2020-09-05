<?php
echo " Welcome to Ghanem Test<br>";
$conn = new mysqli("mysql", "db_user", "ghanem", "my_db");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}



// Create database
$sql = "CREATE DATABASE ghanem";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
      

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('ahmed', 'ghanem', 'pro.ahmedghanem@gmail.com')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
