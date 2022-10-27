<?php
include "../include/dashboard_layout.php";
$patient_query = "SELECT * FROM patients";
$patients = mysqli_query($conn->connect(), $patient_query);
if (isset($_POST['prescription'])){
    @$query = "INSERT INTO prescription (patient, pre_type, treatment, history, medication, pre_note)  
               VALUES('".$_POST['patient']."','".$_POST['check_type']."', '".$_POST['treatment']."', '".$_POST['history']."', '".$_POST['medication']."', '".$_POST['note']."')";
    mysqli_query($conn->connect(), $query);
}
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Nurse</a></li>
                <li class="breadcrumb-item active" aria-current="page">Prescription</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <div class="container">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <form method="post">
                            <div class="row form-group">
                                <div class="col-12">
                                    <label class="control-label mb-10" for="exampleInputEmail_1">Patient</label>
                                    <select class="form-control custom-select" name="patient" required>
                                        <option >Select Patient</option>
                                        <?php if (mysqli_num_rows($patients)>0) {
                                            while($row = mysqli_fetch_array($patients)){?>
                                                <option value="<?php echo $row['first_name'];?>"><?php echo $row['first_name'];?></option>
                                            <?php }
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-3">
                                    <div class="custom-control custom-radio mb-10">
                                        <input id="treatment" name="check_type" value="treatment" class="custom-control-input" checked="" type="radio">
                                        <label class="custom-control-label" for="treatment">Treatment</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="custom-control custom-radio mb-10">
                                        <input id="report" name="check_type" value="report" class="custom-control-input" type="radio">
                                        <label class="custom-control-label" for="report">Report</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12">
                                    <label class="control-label mb-10" for="exampleInputEmail_1">Treatment</label>
                                    <select class="form-control custom-select" name="treatment" required>
                                        <option >Select Treatment</option>
                                        <option value="1">treatment1</option>
                                        <option value="2">treatment2</option>
                                        <option value="3">treatment3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="case">Case History</label>
                                <input class="form-control" id="case" name="history" type="text">
                            </div>
                            <div class="form-group">
                                <label for="medication">Medication</label>
                                <input class="form-control" id="medication" name="medication" type="text">
                            </div>
                            <div class="row form-group">
                                <div class="col-12">
                                    <textarea class="form-control mt-15" rows="3" name="note" placeholder="Note"></textarea>
                                </div>
                            </div>
                            <button type="submit" name="prescription" value="prescription" class="btn btn-primary mr-10">Create Prescription</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
include  "../../include/footer.php";