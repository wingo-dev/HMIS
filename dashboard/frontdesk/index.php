<?php
include "../include/dashboard_layout.php";
if ($_SESSION['user_info']['role'] != 2){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
$patient_query = "SELECT * FROM patients";
$patients = mysqli_query($conn->connect(), $patient_query);

if(isset($_POST['bed'])){
    @$query = "INSERT INTO bed (patient, assign_date, note) VALUES('".$_POST['patient']."','".$_POST['assign_date']."', '".$_POST['note']."')";
    mysqli_query($conn->connect(), $query);
}
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Front Desk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Assign Bed</li>
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
<!--                                    <label class="control-label mb-10" for="exampleInputEmail_1">Patient Status</label>-->
                                    <label class="control-label mb-10">Date</label>
                                    <input type="text" placeholder="" name="assign_date" data-mask="99/99/9999" class="form-control">
                                    <span class="form-text text-muted">dd/mm/yyyy</span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12">
                                    <textarea class="form-control mt-15" name="note" rows="3" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <button type="submit" name="bed" value="bed" class="btn btn-primary mr-10">Save</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
include  "../../include/footer.php";