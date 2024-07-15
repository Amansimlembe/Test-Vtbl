<?php
// create credentials
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "brokers_db"; // Replace with your MySQL database name

// Create connection
//$conn =  mysqli_connect($servername, $username, $password, $database);
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
//if (!$conn) {
      //die("Connection failed: " .$conn. "br". mysqli_connect_error());}

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);}
  