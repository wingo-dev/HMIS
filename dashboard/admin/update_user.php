<?php
include_once '../../include/class/dbconfig.php';

$conn = new DbConfig();
$query = "update users set username='".$_POST["username"]."', email='".$_POST["email"]."', password='".md5($_POST["password"])."', role='".$_POST['role']."' where id = '".$_POST["user_id"]."'";
mysqli_query($conn->connect(), $query);
header("Location: " . $_SERVER["HTTP_REFERER"]);