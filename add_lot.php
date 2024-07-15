<?php
include 'db_connection.php';

// Retrieve form data
$warehouse = $_POST['warehouse'];
$mark = $_POST['mark'];
$grade = $_POST['grade'];
$manfDate = $_POST['manfDate'];
$invoice = $_POST['invoice'];
$noOfPkgs = $_POST['noOfPkgs'];
$type = $_POST['type'];
$netWeight = $_POST['netWeight'];

// Insert form data into the brokers table
$sql = "INSERT INTO brokers (warehouse, mark, grade, manfDate, invoice, noOfPkgs, types, netWeight) VALUES ('$warehouse', '$mark', '$grade', '$manfDate', '$invoice', '$noOfPkgs', '$type', '$netWeight')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
