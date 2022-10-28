<?php
include_once '../../include/class/dbconfig.php';
$conn = new DbConfig();
$query = "delete from diagnosis where id=".$_GET['id'];
mysqli_query($conn->connect(), $query);
header("Location: " . $_SERVER["HTTP_REFERER"]);