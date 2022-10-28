<?php
require "../include/dashboard_layout.php";
$diagnosis_query = "SELECT * FROM diagnosis";
$patients = mysqli_query($conn->connect(), $diagnosis_query);
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                <li class="breadcrumb-item active" aria-current="page">Diagnosis Report</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->
        <div class="container">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Patient</th>
                                                    <th>Report Type</th>
                                                    <th>Report Type Cost</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php if (mysqli_num_rows($patients)>0) {
                                                $no = 0;
                                                while($row = mysqli_fetch_array($patients)){?>
                                                <tr>
                                                    <th scope="row"><?php echo $no;?></th>
                                                    <td><?php echo $row['patient'];?></td>
                                                    <td><?php echo $row['rep_type'];?></td>
                                                    <td><?php echo $row['rep_cost'];?></td>
                                                    <td><?php echo $row['diagnosis_desc'];?></td>
                                                    <td><a href="delete.php?id=<?php echo $row['id']?>"><span class="badge badge-danger">delete</span></a></td>
                                                </tr>
                                                <?php $no++;}}?>
                                            </tbody>
                                        </table>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
include  "../../include/footer.php";