<?php

if ($_SESSION['user_info']['role'] != 3){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}