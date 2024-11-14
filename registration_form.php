<?php include_once "app/function.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon/nopsom-favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendors/css/normalize.css">
    <link rel="stylesheet" href="assets/vendors/css/grid.css">
    <link rel="stylesheet" href="assets/vendors/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/css/owl.theme.default.min.css">
    <!-- Resource CSS-->
    <link rel="stylesheet" href="assets/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/resources/css/style.css">
    <link rel="stylesheet" href="assets/resources/css/responsive.css">
    <title>Form Data Get</title>
</head>
<body>

    <div class="user-form w-25 mx-auto my-5 p-5">

        <?php 


        ?>

        <div class="card shadow">
            <div class="card-header p-3">
                <h2 class="card-title text-center">Registration Form</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group m-3">
                        <label for="">Name</label>
                        <input name="name" type="text" class="form-control p-3">
                    </div>
                    <div class="form-group m-3">
                        <label for="">Email</label>
                        <input name="email"  type="text" class="form-control p-3">
                    </div>
                    <div class="form-group m-3">
                        <label for="">cell</label>
                        <input name="cell"  type="text" class="form-control p-3">
                    </div>
                    <div class="form-group m-3">
                        <label for="">username</label>
                        <input name="username"  type="text" class="form-control p-3">
                    </div>
                    <div class="form-group m-3">
                        <label for="">Education</label>
                        <select name="cars" class="form-control p-3">
                            <option label=""> --Select--</option>
                            <option value="PSC">PSC</option>
                            <option value="JSC">JSC</option>
                            <option value="SSC">SSC</option>
                            <option value="HSC">HSC</option>
                        </select>
                    </div>
                    <div class="form-group m-4">
                        <label for="">Gender : </label>
                        <input name="gender" type="radio"><label for="male">Male</label>
                        <input name="gender"  type="radio"><label for="female">Female</label>
                    </div>

                    <div class="form-group m-3">
                        
                        <input name="username"  type="checkbox"><label for=""> I <span class="text-primary">agree</span></label>
                    </div>

                    <div class="form-group m-3">
                        <input type="submit" name="submit" id="" class="btn btn-primary" value="Check">
                    </div>
                </form>
            </div>
        </div>
    </div>





    <!-- JS FILES -->
    <script src="assets/resources/js/jquery-3.6.0.min.js"></script>
    <script src="assets/resources/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/042b6d566d.js" crossorigin="anonymous"></script>
    <script src="assets/vendors/js/html5shiv.min.js"></script>
    <script src="assets/vendors/js/respond.min.js"></script>
    <script src="assets/vendors/js/selectivizr.js"></script>
    <script src="assets/vendors/js/owl.carousel.min.js"></script>
    <script src="assets/resources/js/main.js"></script>
</body>
</html>