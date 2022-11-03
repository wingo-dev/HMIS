<?php
include_once '../../include/class/dbconfig.php';
if ($_SESSION['user_info']['role'] != 1){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
$conn = new DbConfig();
$query = "delete from prescription where id=".$_GET['id'];
mysqli_query($conn->connect(), $query);
header("Location: " . $_SERVER["HTTP_REFERER"]);