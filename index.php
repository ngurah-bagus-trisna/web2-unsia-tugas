<?php

$servername = "10.10.0.1";
$username = "root";
$password = "wait";
$dbname = "unsia";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3309", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

} catch (\Throwable $th) {
  echo "Connection failed: " . $th->getMessage();
}

?>