<?php
include "../include/dashboard_layout.php";
if ($_SESSION['user_info']['role'] != 4){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
$prescription_query = "SELECT * FROM prescription";
$prescription = mysqli_query($conn->connect(), $prescription_query);
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
<!--                                        <th>Action</th>-->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (mysqli_num_rows($prescription)>0) {
                                        $no = 0;
                                        while($row = mysqli_fetch_array($prescription)){?>
                                            <tr>
                                                <th scope="row"><?php echo $no;?></th>
                                                <td><?php echo $row['patient'];?></td>
                                                <td><?php echo $row['pre_type'];?></td>
                                                <td><?php echo $row['treatment'];?></td>
                                                <td><?php echo $row['history'];?></td>
                                                <td><?php echo $row['medication'];?></td>
                                                <td><?php echo $row['pre_note'];?></td>
<!--                                                <td><a href="delete.php?id=--><?php //echo $row['id']?><!--"><span class="badge badge-danger">delete</span></a></td>-->
                                            </tr>
                                            <?php $no++;}}?>
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