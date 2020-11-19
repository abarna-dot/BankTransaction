<?php
//Development Connection
//$servername = "localhost";
//$username = "root";
//$password = "";
//$database = "test";

//Remote Daatabase
$servername = "remotemysql.com";
$username = "MCaYD87EH7";
$password = "9NvFpmggl3";
$database = "MCaYD87EH7";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
