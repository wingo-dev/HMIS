<?php
include "../include/dashboard_layout.php";
if ($_SESSION['user_info']['role'] != 0){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
$query_report = 'select *from report_type';
$report_type = mysqli_query($conn->connect(), $query_report);

if (isset($_POST['report'])){
        $query = "INSERT INTO report_type (report) VALUES('".$_POST['report_name']."')";
        mysqli_query($conn->connect(), $query);
}
?>
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Report Type</li>
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
                                    <label class="control-label mb-10" for="exampleInputuname_1">Report Type</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="icon-user"></i></span>
                                        </div>
                                        <input type="text" name="report_name" class="form-control" id="exampleInputuname_1" placeholder="Report Type" required>
                                    </div>
                                </div>
                            <button type="submit" name="report" value="report" class="btn btn-primary mr-10">Add Report Type</button>
                        </form>
                    </div>
                    <div class="col-sm">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Report Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (mysqli_num_rows($report_type)>0) {
                                        $no = 1;
                                        while ($rows = mysqli_fetch_array($report_type)) {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $no;?></th>
                                                <td><?php echo $rows['report'];?></td>
                                                <td>
                                                    <a href="report_delete.php?id=<?php echo $rows['id']?>" data-toggle="tooltip"
                                                       data-original-title="Delete"> <i
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
<?php
include "../../include/footer.php";
