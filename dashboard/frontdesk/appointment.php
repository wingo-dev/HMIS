<?php
require "../include/dashboard_layout.php";
$appoint_query = "SELECT * FROM appointment";
$appoints = mysqli_query($conn->connect(), $appoint_query);
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Front Desk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Appoint Lists</li>
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
                                        <th>Appoint Date</th>
                                        <th>Appoint Time</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (mysqli_num_rows($appoints)>0) {
                                        $no = 0;
                                        while($row = mysqli_fetch_array($appoints)){?>
                                            <tr>
                                                <th scope="row"><?php echo $no;?></th>
                                                <td><?php echo $row['patient'];?></td>
                                                <td><?php echo $row['appoint_date'];?></td>
                                                <td><?php echo $row['appoint_time'];?></td>
                                                <td><?php echo $row['description'];?></td>
                                                <td><a href="delete.php?appoint_id=<?php echo $row['id']?>"><span class="badge badge-danger">delete</span></a></td>
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