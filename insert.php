<?php 

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "user";


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 


  $name = $_POST['name'];
  $age = $_POST['age'];

  $sql = "INSERT INTO table1 (name, age) VALUES ('$name', '$age')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>