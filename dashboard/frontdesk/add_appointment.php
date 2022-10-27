<?php
include "../include/dashboard_layout.php";
$patient_query = "SELECT * FROM patients";
$patients = mysqli_query($conn->connect(), $patient_query);
if (isset($_POST['create_time'])){
    @$create_time = "INSERT INTO appointment (patient, appoint_date, appoint_time, description) VALUES('".$_POST['patient']."','".$_POST['appoint_date']."', '".$_POST['appoint_time']."','".$_POST['appoint_note']."')";
    mysqli_query($conn->connect(), $create_time);
}
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Front Desk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Appointment</li>
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
                                    <label class="control-label mb-10">Date</label>
                                    <input type="text" placeholder="" data-mask="99/99/9999" name="appoint_date" class="form-control" required>
                                    <span class="form-text text-muted">dd/mm/yyyy</span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6 col-sm-12 col-12">
                                    <label class="control-label mb-10">Time</label>
                                    <input class="form-control input-timepicker" type="text" name="appoint_time" required/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12">
                                    <textarea class="form-control mt-15" rows="3" placeholder="Note" name="appoint_note" required></textarea>
                                </div>
                            </div>
                            <button type="submit" name="create_time" value="create_time" class="btn btn-primary mr-10">Create Time</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
include  "../../include/footer.php";
