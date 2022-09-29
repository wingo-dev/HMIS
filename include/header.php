<?php
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
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="<?php echo RELATIVE_PATH.'/dist/css/style.css'?>" rel="stylesheet" type="text/css">
</head>

<body>
