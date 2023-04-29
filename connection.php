<?php
$servername = "localhost";
$username = "root";
$password = "kayumba@";
$db_name = "student_db";
$conn = new mysqli($servername, $username, $password,$db_name);
if ($conn->connect_error) {
    die("connection failed".$conn->connect_error);
}
echo"";
?>