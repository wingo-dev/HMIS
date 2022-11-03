<?php
include "../include/dashboard_layout.php";
if ($_SESSION['user_info']['role'] != 0){
    header("location:../../index.php");
    echo("<script>location.href = '../../index.php';</script>");
}
if (isset($_POST['register'])){
    if (empty($_POST["username"]) && empty($_POST['email'])){
        echo  "All fields are required";
    }else{
        $check_email = mysqli_query($conn->connect(), "SELECT *FROM users WHERE email='".$_POST['email']."'");
        if (mysqli_num_rows($check_email) > 0){
            $_SESSION['exist_email'] = $_POST['email']." already exist.";
            header("location:add_user.php");
        }
        $query = "INSERT INTO users (username, email, password, role) VALUES('".$_POST['username']."','".$_POST['email']."', '".md5($_POST['password'])."', '".$_POST['role']."')";
        mysqli_query($conn->connect(), $query);
        unset($_SESSION['exist_email']);
//        $_SESSION['success'] = "Successfully stored.";
    }
}
?>
<div class="hk-pg-wrapper">
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add user</li>
        </ol>
    </nav>
    <!-- /Breadcrumb -->
    <div class="container">
        <section class="hk-sec-wrapper">
            <?php if (isset($_SESSION['exist_email'])){?>
                <div class="alert alert-inv alert-inv-danger alert-wth-icon alert-dismissible fade show" role="alert">
                    <span class="alert-icon-wrap"><i class="zmdi zmdi-bug"></i></span> <?php echo $_SESSION['exist_email']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            <?php }?>
            <div class="row">
                <div class="col-sm">
                    <form method="post">
                        <div class="row form-group">
                            <div class="col-6">
                                <label class="control-label mb-10" for="exampleInputuname_1">User Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control" id="exampleInputuname_1" placeholder="Username" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <label class="control-label mb-10" for="exampleInputEmail_1">Email address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                    </div>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail_1" placeholder="Enter email" required>
                                </div>

                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-6">
                                <label class="control-label mb-10" for="exampleInputEmail_1">Role</label>
                                <select class="form-control custom-select" name="role" required>
                                    <option ></option>
                                    <option value="1">Doctor</option>
                                    <option value="2">Front Desk</option>
                                    <option value="3">Nurse</option>
                                    <option value="4">Pharmacist</option>
                                    <option value="5">Patient</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="control-label mb-10" for="exampleInputpwd_1">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" id="exampleInputpwd_1" placeholder="Enter password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="register" value="Register" class="btn btn-primary mr-10">Add</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
include "../../include/footer.php";
