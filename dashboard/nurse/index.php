<?php
include "../include/dashboard_layout.php";
if ($_SESSION['user_info']['role'] != 3){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
$prescription_query = "SELECT * FROM prescription";
$prescriptions = mysqli_query($conn->connect(), $prescription_query);

?>
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Nurse</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pending Prescription</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->
    <div class="container">
        <section class="hk-sec-wrapper">
            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Patient</th>
                                    <th>Prescription Type</th>
                                    <th>Treatment</th>
                                    <th>History</th>
                                    <th>Medication</th>
                                    <th>Note</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href=""><span class="badge badge-success">Confirm</span></a></td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
include  "../../include/footer.php";
