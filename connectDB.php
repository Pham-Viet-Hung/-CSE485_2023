<?php
function connectDB()
{
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "btth01_cse485_ex.sql";
  $conn = new mysqli(
    $server,
    $user,
    $pass,
    $database
  );
  $conn->set_charset("utf8");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}
