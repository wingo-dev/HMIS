<?php
require "../include/dashboard_layout.php";
$patient_query = "SELECT * FROM patients";
$patients = mysqli_query($conn->connect(), $patient_query);
if (isset($_POST['diagnosis'])){
    $query = "INSERT INTO diagnosis (patient, rep_type, rep_cost, diagnosis_desc) VALUES('".$_POST['patient']."','".$_POST['report_type']."', '".$_POST['report_cost']."', '".$_POST['description']."')";
    mysqli_query($conn->connect(), $query);

    echo("<script>location.href = './index.php';</script>");
}
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Diagnosis Report</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <div class="container">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <form method="post">
                            <div class="row form-group">
                                <div class="col-6">
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
                                <div class="col-6">
                                    <label class="control-label mb-10" for="exampleInputEmail_1">Report Type</label>
                                    <select class="form-control custom-select" name="report_type" required>
                                        <option >Select Report Type</option>
                                        <option value="type1">Type1</option>
                                        <option value="type2">Type2</option>
                                        <option value="type3">Type3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12">
                                    <label for="report_cost">Report type cost($)</label>
                                    <input class="form-control" id="report_cost" type="text" name="report_cost" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12">
                                    <textarea class="form-control mt-15" name="description" rows="3" placeholder="Description" required></textarea>
                                </div>
                            </div>
                            <button type="submit" name="diagnosis" value="diagnosis" class="btn btn-primary mr-10">Save</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
include  "../../include/footer.php";