<?php
include "../../include/header.php";

if (!isset($_SESSION['user_info'])){
    header("location:../index.php");
}
?>
<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
        <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
        <a class="navbar-brand" href="#">
            <img class="brand-img d-inline-block mr-5" src="<?php echo RELATIVE_PATH;?>/dist/img/logo.png" alt="brand" />
        </a>
        <ul class="navbar-nav hk-navbar-content">
            <li class="nav-item">
                <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-settings"></i></a>
            </li>
            <li class="nav-item dropdown dropdown-authentication">
                <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <div class="media-img-wrap">
                            <div class="avatar">
                                <img src="<?php echo RELATIVE_PATH;?>/dist/img/avatar10.jpg"
                                     alt="user" class="avatar-img rounded-circle">
                            </div>
                            <span class="badge badge-success badge-indicator"></span>
                        </div>
                        <div class="media-body">
                            <span><?php echo $_SESSION['user_info']['username'];?><i class="zmdi zmdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                    <div class="dropdown-divider"></div>
                    <div class="sub-dropdown-menu show-on-hover">
                        <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                        <div class="dropdown-menu open-left-side">
                            <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i>
                                <span>Online</span></a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../logout.php"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /Top Navbar -->

    <!-- Vertical Nav -->
    <nav class="hk-nav hk-nav-light">
        <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
        <div class="nicescroll-bar">
            <div class="navbar-nav-wrap">
                <ul class="navbar-nav flex-column">
                    <?php
//                    admin part
                    if ($_SESSION['user_info']['role'] == 0){?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" >
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">All Users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_user.php">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Register User</span>
                            </a>
                        </li>
                    <?php }
//                    doctor part
                    if ($_SESSION['user_info']['role'] == 1){?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Add Diagnosis Report</span>
                            </a>
                        </li>
                    <?php }
//                    front desk
                    if ($_SESSION['user_info']['role'] == 2){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Assign Bed</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_appointment.php">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Add Appointment</span>
                            </a>
                        </li>
                    <?php }
//                    nurse
                    if ($_SESSION['user_info']['role'] == 3){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Prescription</span>
                            </a>
                        </li>
                    <?php }
//                    pharmacist
                    if ($_SESSION['user_info']['role'] == 4){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Read Prescription</span>
                            </a>
                        </li>
                    <?php }
//                    patient
                    if ($_SESSION['user_info']['role'] == 5){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Register Patient</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="ion ion-ios-keypad"></i>
                                <span class="nav-link-text">Add Appointment</span>
                            </a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
    <!-- /Vertical Nav -->

    <!-- Setting Panel -->
    <div class="hk-settings-panel">
        <div class="nicescroll-bar position-relative">
            <div class="settings-panel-wrap">
                <div class="settings-panel-head mb-15">
                    <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                </div>
                <h6 class="mb-5">Navigation</h6>
                <p class="font-14">Menu comes in two modes: dark & light</p>
                <div class="button-list hk-nav-select mb-10">
                    <button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <h6 class="mb-5">Top Nav</h6>
                <p class="font-14">Choose your liked color mode</p>
                <div class="button-list hk-navbar-select mb-10">
                    <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                    <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h6>Scrollable Header</h6>
                    <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                </div>
                <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
            </div>
        </div>
    </div>
    <!-- /Setting Panel -->
