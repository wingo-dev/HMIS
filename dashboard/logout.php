<?php
/**
 * Created by PhpStorm.
 * User: tiger
 * Date: 9/29/2022
 * Time: 8:31 PM
 */
session_start();
session_destroy();

header("location:../login.php");