<?php
    session_start();
    include_once __DIR__.'/class/dbconfig.php';
    $conn = new DbConfig();

    define("RELATIVE_PATH",substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>HMIS Login</title>
    <meta name="description" content="HMIS takes care of health for patient." />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo RELATIVE_PATH.'/favicon.ico'?>">
    <link rel="icon" href="<?php echo RELATIVE_PATH.'/favicon.ico'?>" type="image/x-icon">
    <!-- Bootstrap table CSS -->
    <link href="<?php echo RELATIVE_PATH.'/vendors/bootstrap-table/dist/bootstrap-table.min.css'?>" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="<?php echo RELATIVE_PATH.'/vendors/jquery-toggles/css/toggles.css'?>" rel="stylesheet" type="text/css">
    <link href="<?php echo RELATIVE_PATH.'/vendors/jquery-toggles/css/themes/toggles-light.css'?>" rel="stylesheet" type="text/css">
    <!-- Daterangepicker CSS -->
    <link href="<?php echo RELATIVE_PATH.'/vendors/daterangepicker/daterangepicker.css'?>" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="<?php echo RELATIVE_PATH.'/dist/css/style.css'?>" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
