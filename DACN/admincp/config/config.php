<?php
$mysqli = new mysqli("localhost","root","","web_sql_server");

// Check connection
if ($mysqli->connect_errno) {
  echo "không kết nối được server" . $mysqli->connect_error;
  exit();
}
?>