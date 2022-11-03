<?php
include_once '../../include/class/dbconfig.php';
if ($_SESSION['user_info']['role'] != 2){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
$conn = new DbConfig();

if(isset($_GET['appoint_id'])){
    $query = "delete from appointment where id=".$_GET['appoint_id'];
    mysqli_query($conn->connect(), $query);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}
if (isset($_GET['bed_id'])){
    $query = "delete from bed where id=".$_GET['bed_id'];
    mysqli_query($conn->connect(), $query);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}