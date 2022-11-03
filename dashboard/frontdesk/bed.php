<?php
require "../include/dashboard_layout.php";
if ($_SESSION['user_info']['role'] != 2){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
$bed_query = "SELECT * FROM bed";
$beds = mysqli_query($conn->connect(), $bed_query);
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Front Desk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bed Lists</li>
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
                                        <th>Assign Date</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if (mysqli_num_rows($beds)>0) {
                                        $no = 0;
                                        while($row = mysqli_fetch_array($beds)){?>
                                            <tr>
                                                <th scope="row"><?php echo $no;?></th>
                                                <td><?php echo $row['patient'];?></td>
                                                <td><?php echo $row['assign_date'];?></td>
                                                <td><?php echo $row['note'];?></td>
                                                <td><a href="delete.php?bed_id=<?php echo $row['id']?>"><span class="badge badge-danger">delete</span></a></td>
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