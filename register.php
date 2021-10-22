<?php
error_reporting(0);
include "main/include.php";

//adding user into website
// include "config/connect.php";
// error_reporting(0);
// if (isset($_SESSION['username'])) {
//     header("Location: index.php");
// }

// if (isset($_POST['register'])) {
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $cpassword = $_POST['cpassword'];

//     if ($password == $cpassword) {
//         $get_user = "SELECT * FROM `user` WHERE `user_email` = '$email' ";
//         $execute_getUser = mysqli_query($connect, $get_user);
//         if (!$execute_getUser -> num_rows > 0) {
//             $insert_user = "INSERT INTO `user`(`user_email`, `user_name`, `user_password`) 
//              VALUES ('$email','$username','$password')";

//             $execute_userInsert = mysqli_query($connect, $insert_user);
//             if ($execute_userInsert) {
//                 echo "Wow!, user registration successful!";
//                 $email = "";
//                 $username = "";
//                 $_POST['password'] = "";
//                 $_POST['cpassword'] = "";
//             } else {
//                 echo "Ooops!, something went wrong!";
//             }
//         }else {
//             echo "Ooops!, user email already exists!";
//         }
//     } else {
//         echo "Password is Not matched!";
//     }
// }

?>


<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from medico.dexignzone.com/admin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 13:24:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register here</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Register here</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" name="user_name" value="<?php echo $username; ?>" class="form-control" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="user_email" value="<?php echo $email; ?>" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="user_password" value="<?php echo $_POST['password']; ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Confirm Password</strong></label>
                                            <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" class="form-control">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="index.php">Login here</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>


<!-- Mirrored from medico.dexignzone.com/admin/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 13:24:32 GMT -->

</html>