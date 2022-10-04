<?php
include "./include/dashboard_layout.php";
$query = "SELECT * FROM users";
$result = mysqli_query($conn->connect(), $query);
?>
<!-- Main Content -->
    <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Users' Lists</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="archive"></i></span></span>Users</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>User Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                if (mysqli_num_rows($result)>0) {
                                                    $no = 1;
                                                    while ($rows = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?php echo $no;?></th>
                                                            <td><?php echo $rows['username'];?></td>
                                                            <td><?php echo $rows['email']?></td>
                                                            <td>
                                                                <?php
                                                                if ($rows['role'] == 0){
                                                                ?>
                                                                    <span class="badge badge-danger">Admin</span>
                                                                <?php
                                                                }?>
                                                                <?php
                                                                if ($rows['role'] == 1){?>
                                                                    <span class="badge badge-info">Doctor</span>
                                                                <?php
                                                                }
                                                                if ($rows['role'] == 2){
                                                                ?>
                                                                    <span class="badge badge-warning">Front Desk</span>
                                                                <?php }
                                                                if ($rows['role'] == 3){
                                                                ?>
                                                                    <span class="badge badge-success">Nurse</span>
                                                                <?php
                                                                }
                                                                if ($rows['role'] == 4){?>
                                                                    <span class="badge badge-info">Pharmacist</span>
                                                                <?php
                                                                }
                                                                if ($rows['role'] == 5){?>
                                                                    <span class="badge badge-info">Patient</span>
                                                                <?php
                                                                }?>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="mr-25" data-toggle="tooltip"
                                                                   data-original-title="Edit"> <i
                                                                        class="icon-pencil"></i> </a>
                                                                <a href="#" data-toggle="tooltip"
                                                                   data-original-title="Close"> <i
                                                                        class="icon-trash txt-danger"></i> </a>
                                                            </td>
                                                        </tr>
                                                    <?php $no++;}
                                                }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->


    </div>
<!-- /Main Content -->
</div>
<?php
include  "../include/footer.php";