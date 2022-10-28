<?php
include "../include/dashboard_layout.php";

if (isset($_POST['patient']) && $_POST['patient'] == 'patient'){
    $query = "INSERT INTO patients (reg_no, first_name, middle_name, last_name, gender, birthday, blood, address, city, state, country, mobile, email) 
              VALUES('".$_POST['reg_no']."','".$_POST['first_name']."', '".$_POST['middle_name']."', '".$_POST['last_name']."', 
              '".$_POST['check_type']."', '".$_POST['birth']."', '".$_POST['blood']."', '".$_POST['address']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['country']."', '".$_POST['mobile']."', '".$_POST['email']."')";
    mysqli_query($conn->connect(), $query);
}
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Patient</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registration</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <div class="container">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <form method="post">
                            <div class="row form-group">
                                <div class="col-3">
                                    <label class="control-label mb-10" for="reg_no">Register NO.</label>
                                    <input class="form-control" id="reg_no" name="reg_no" type="text">
                                </div>
                                <div class="col-3">
                                    <label class="control-label mb-10" for="first">First Name</label>
                                    <input class="form-control" name="first_name" id="first" type="text" required>
                                </div>
                                <div class="col-3">
                                    <label class="control-label mb-10" for="middle">Middle Name</label>
                                    <input class="form-control" name="middle_name" id="middle" type="text">
                                </div>
                                <div class="col-3">
                                    <label class="control-label mb-10" for="last">Last Name</label>
                                    <input class="form-control" name="last_name" id="last" type="text">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label mb-10" for="gender">Gender</label>
                                <div class="col-3">
                                    <div class="custom-control custom-radio mb-10">
                                        <input id="treatment" name="check_type" value="0" class="custom-control-input" checked="" type="radio">
                                        <label class="custom-control-label" for="treatment">Male</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="custom-control custom-radio mb-10">
                                        <input id="report" name="check_type" value="1" class="custom-control-input" type="radio">
                                        <label class="custom-control-label" for="report">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <label class="control-label mb-10" for="birth">Date of Birth</label>
                                    <input class="form-control" name="birth" id="birth" type="text" required>
                                </div>
                                <div class="col-6">
                                    <label class="control-label mb-10" for="blood">Blood Group</label>
                                    <input class="form-control" name="blood" id="blood" type="text">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <label for="address">Address</label>
                                    <input class="form-control" name="address" id="address" type="text">
                                </div>
                                <div class="col-6">
                                    <label for="city">City</label>
                                    <input class="form-control" name="city" id="city" type="text">
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <label for="state">State</label>
                                    <input class="form-control" name="state" id="state" type="text">
                                </div>
                                <div class="col-6">
                                    <label for="country">Country</label>
                                    <input class="form-control" name="country" id="country" type="text">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-6">
                                    <label for="mobile">Mobile</label>
                                    <input class="form-control" name="mobile" id="mobile" type="text">
                                </div>
                                <div class="col-6">
                                    <label for="email">Email</label>
                                    <input class="form-control" name="email" id="email" type="text" required>
                                </div>
                            </div>
                            <button type="submit" name="patient" value="patient" class="btn btn-primary mr-10">
                                Save</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
include  "../../include/footer.php";