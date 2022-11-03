<?php
require "../include/dashboard_layout.php";
if ($_SESSION['user_info']['role'] != 1){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
$patient_query = "SELECT * FROM patients where id = ".$_GET['patient'];
$patients = mysqli_query($conn->connect(), $patient_query);
$patient = mysqli_fetch_array($patients);
echo $patient['first_name'];
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Patient detail</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <div class="container">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm">
                                <form>
                                    <div class="row form-group">
                                        <div class="col-3">
                                            <label class="control-label mb-10" for="reg_no">Register NO.</label>
                                            <input class="form-control" id="reg_no" value="<?php echo $patient['reg_no'];?>" type="text" disabled>
                                        </div>
                                        <div class="col-3">
                                            <label class="control-label mb-10" for="first">First Name</label>
                                            <input class="form-control" value="<?php echo $patient['first_name'];?>" id="first" type="text" disabled>
                                        </div>
                                        <div class="col-3">
                                            <label class="control-label mb-10" for="middle">Middle Name</label>
                                            <input class="form-control" value="<?php echo $patient['middle_name'];?>" id="middle" type="text" disabled>
                                        </div>
                                        <div class="col-3">
                                            <label class="control-label mb-10" for="last">Last Name</label>
                                            <input class="form-control" value="<?php echo $patient['last_name'];?>" id="last" type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="control-label mb-10" for="gender">Gender</label>
                                        <div class="col-3">
                                            <div class="custom-control custom-radio mb-10">
                                                <input id="treatment" name="check_type" value="0" class="custom-control-input"
                                                       <?php if ($patient['gender'] == 0){?>
                                                       checked=""
                                                        <?php }?>
                                                       type="radio" disabled>
                                                <label class="custom-control-label" for="treatment">Male</label>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="custom-control custom-radio mb-10">
                                                <input id="report" name="check_type" value="1" class="custom-control-input"
                                                    <?php if ($patient['gender'] == 1){?>
                                                        checked=""
                                                    <?php }?>
                                                       type="radio" disabled>
                                                <label class="custom-control-label" for="report">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <label class="control-label mb-10" for="birth">Date of Birth</label>
                                            <input class="form-control" value="<?php echo $patient['birthday'];?>" id="birth" type="text" disabled>
                                        </div>
                                        <div class="col-6">
                                            <label class="control-label mb-10" for="blood">Blood Group</label>
                                            <input class="form-control" value="<?php echo $patient['blood'];?>" id="blood" type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <label for="address">Address</label>
                                            <input class="form-control" value="<?php echo $patient['address'];?>" id="address" type="text" disabled>
                                        </div>
                                        <div class="col-6">
                                            <label for="city">City</label>
                                            <input class="form-control" value="<?php echo $patient['city'];?>" id="city" type="text" disabled>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <label for="state">State</label>
                                            <input class="form-control" value="<?php echo $patient['state'];?>" id="state" type="text" disabled>
                                        </div>
                                        <div class="col-6">
                                            <label for="country">Country</label>
                                            <input class="form-control" value="<?php echo $patient['country'];?>" id="country" type="text" disabled>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <label for="mobile">Mobile</label>
                                            <input class="form-control" value="<?php echo $patient['mobile'];?>" id="mobile" type="text" disabled>
                                        </div>
                                        <div class="col-6">
                                            <label for="email">Email</label>
                                            <input class="form-control" value="<?php echo $patient['email'];?>" id="email" type="text" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
include  "../../include/footer.php";