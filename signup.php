<?php
include "./include/header.php";
?>
<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between">
                <a class="d-flex auth-brand align-items-center" href="#">
                    <img class="brand-img d-inline-block mr-5" src="./include/dist/img/logo.png" alt="brand" />
                </a>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div class="auth-cover-img overlay-wrap" style="background-image:url(./include/dist/img/bg1.jpg);">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content w-xxl-75 w-sm-90 w-100">
                                    <h1 class="display-3 text-white mb-20">Enjoy unlimited beautiful display content area</h1>
                                    <p class="text-white">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.</p>
                                    <div class="play-wrap">
                                        <a class="play-btn" href="#"></a>
                                        <span>How it works ?</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                                <form>
                                    <h1 class="display-4 mb-10">Sign up for free</h1>
                                    <p class="mb-30">Create your account and start your free trial today</p>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="First name" value="" type="text">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="Last name" value="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" type="email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Confirm Password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a href=""><u>term and conditions</u></a></label>
                                    </div>
                                    <button class="btn btn-warning btn-block" type="submit">Register</button>
                                    <div class="option-sep">or</div>
                                    <div class="form-row">
                                        <div class="col-sm-6 mb-20">
                                            <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                                        </div>
                                        <div class="col-sm-6 mb-20">
                                            <button class="btn btn-primary btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>
                                        </div>
                                    </div>
                                    <p class="text-center">Already have an account? <a href="#">Sign In</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->
<?
include "./include/footer.php";
?>