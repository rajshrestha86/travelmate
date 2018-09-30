<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "travelmate2";

// Create connection
$conn = new mysqli($server_name, $user_name, $password, $database_name);

$test='Hello from connection';
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}