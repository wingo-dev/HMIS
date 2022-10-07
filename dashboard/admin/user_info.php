<?php
include_once '../../include/class/dbconfig.php';

$conn = new DbConfig();
$query = "SELECT * FROM users WHERE id = ".$_POST['id'];
$result = mysqli_query($conn->connect(), $query);
echo json_encode(mysqli_fetch_array($result));