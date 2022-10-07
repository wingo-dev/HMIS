<?php
include "../include/dashboard_layout.php";
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
                                                                <a href="javascript void(0);" onclick="getId(<?php echo $rows['id']?>);" class="mr-25"
                                                                   data-original-title="Edit" data-id = "<?php echo $rows['id'];?>" data-toggle="modal" data-target="#exampleModalLarge01"> <i
                                                                        class="icon-pencil"></i> </a>
                                                                <a href="delete.php?id=<?php echo $rows['id']?>" data-toggle="tooltip"
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
                <!-- /Row -->

            </div>
            <!-- /Container -->
        <!-- Modal -->
        <div id="test"></div>
        <!-- Modal -->
    </div>
<!-- /Main Content -->
</div>
<script>
    function getId(id) {
        $.ajax({
            type:"POST",
            url:"user_info.php",
            data:"id="+id,
            dataType: "json",
            success: function(data){
                console.log(data);
                console.log(data.username);
                console.log(data.email);
                console.log(data.password);
                console.log(data.role);
                var strVar="";
                strVar += "<div class=\"modal fade\" id=\"exampleModalLarge01"+data.id+"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLarge01\" aria-hidden=\"true\">";
                strVar += "            <div class=\"modal-dialog modal-lg\" role=\"document\">";
                strVar += "                <div class=\"modal-content\">";
                strVar += "                    <div class=\"modal-header\">";
                strVar += "                        <h5 class=\"modal-title\">Update User Information<\/h5>";
                strVar += "                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">";
                strVar += "                            <span aria-hidden=\"true\">&times;<\/span>";
                strVar += "                        <\/button>";
                strVar += "                    <\/div>";
                strVar += "                    <div class=\"modal-body\">";
                strVar += "                        <form method=\"post\" action=\"./update_user.php\">";
                strVar +="                             <input type=\"hidden\" name=\"user_id\" value="+data.id+">";
                strVar += "                            <div class=\"row form-group\">";
                strVar += "                                <div class=\"col-6\">";
                strVar += "                                    <label class=\"control-label mb-10\" for=\"exampleInputuname_1\">User Name<\/label>";
                strVar += "                                    <div class=\"input-group\">";
                strVar += "                                        <div class=\"input-group-prepend\">";
                strVar += "                                            <span class=\"input-group-text\"><i class=\"icon-user\"><\/i><\/span>";
                strVar += "                                        <\/div>";
                strVar += "                                        <input type=\"text\" value="+data.username+" name=\"username\" class=\"form-control\" id=\"exampleInputuname_1\" placeholder=\"Username\" required>";
                strVar += "                                    <\/div>";
                strVar += "                                <\/div>";
                strVar += "                                <div class=\"col-6\">";
                strVar += "                                    <label class=\"control-label mb-10\" for=\"exampleInputEmail_1\">Email address<\/label>";
                strVar += "                                    <div class=\"input-group\">";
                strVar += "                                        <div class=\"input-group-prepend\">";
                strVar += "                                            <span class=\"input-group-text\"><i class=\"icon-envelope-open\"><\/i><\/span>";
                strVar += "                                        <\/div>";
                strVar += "                                        <input type=\"email\" name=\"email\" value="+data.email+" class=\"form-control\" id=\"exampleInputEmail_1\" placeholder=\"Enter email\" required>";
                strVar += "                                    <\/div>";
                strVar += "";
                strVar += "                                <\/div>";
                strVar += "                            <\/div>";
                strVar += "                            <div class=\"row form-group\">";
                strVar += "                                <div class=\"col-6\">";
                strVar += "                                    <label class=\"control-label mb-10\" for=\"exampleInputEmail_1\">Role<\/label>";
                strVar += "                                    <select class=\"form-control custom-select\" name=\"role\" required>";
                strVar += "                                        <option ><\/option>";
                strVar += "                                        <option value=\"1\">Doctor<\/option>";
                strVar += "                                        <option value=\"2\">Front Desk<\/option>";
                strVar += "                                        <option value=\"3\">Nurse<\/option>";
                strVar += "                                        <option value=\"4\">Pharmacist<\/option>";
                strVar += "                                        <option value=\"5\">Patient<\/option>";
                strVar += "                                    <\/select>";
                strVar += "                                <\/div>";
                strVar += "                                <div class=\"col-6\">";
                strVar += "                                    <label class=\"control-label mb-10\" for=\"exampleInputpwd_1\">Password<\/label>";
                strVar += "                                    <div class=\"input-group\">";
                strVar += "                                        <div class=\"input-group-prepend\">";
                strVar += "                                            <span class=\"input-group-text\"><i class=\"icon-lock\"><\/i><\/span>";
                strVar += "                                        <\/div>";
                strVar += "                                        <input type=\"password\" name=\"password\" class=\"form-control\" id=\"exampleInputpwd_1\" placeholder=\"Enter password\">";
                strVar += "                                    <\/div>";
                strVar += "                                <\/div>";
                strVar += "                            <\/div>";
                strVar += "                            <div class=\"modal-footer\">";
                strVar += "                                <button type=\"submit\" class=\"btn btn-primary\">Update<\/button>";
                strVar += "                            <\/div>";
                strVar += "                        <\/form>";
                strVar += "                    <\/div>";
                strVar += "                <\/div>";
                strVar += "            <\/div>";
                strVar += "        <\/div>";


                //
                $('#test').html(strVar);
                $('#exampleModalLarge01'+data.id).modal();
            }
        });
    }

</script>
<?php
include "../../include/footer.php";