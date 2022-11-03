<?php
include_once '../../include/class/dbconfig.php';
if ($_SESSION['user_info']['role'] != 0){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
$conn = new DbConfig();
$query = "SELECT * FROM users WHERE id = ".$_POST['id'];
$result = mysqli_query($conn->connect(), $query);
echo json_encode(mysqli_fetch_array($result));