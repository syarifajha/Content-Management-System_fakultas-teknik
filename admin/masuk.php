<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../image/logo.png">

    <title>Admin | Login </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="css/bootstrap-extend.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="css/master_style.css">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="css/skins/_all-skins.css">

</head>

<body class="hold-transition bg-img" style="background-image: url(../image/bg_hd.jpg)" data-overlay="4">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-12">
                <div class="row no-gutters justify-content-md-center">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile h-p100">
                            <h2> <br> LOGIN ADMIN</h2>
                            <p class="text-white"></p>
                            <img src="../image/login.gif" width="120px" height="120px">

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="p-40 bg-white content-bottom h-p100">
                            <form action="auth.php" method="post" class="form-element">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" name="username" class="form-control pl-15" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i class="ti-lock"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control pl-15" placeholder="Password">
                                    </div>
                                </div>
                                <div class="row">

                                    <!-- /.col -->

                                    <!-- /.col -->
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-info btn-block margin-top-10">Masuk</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                            <div class="text-center">
                                <br>
                                <p>Develop by <a href="https://teknik.umpo.ac.id" title="Fakultas Teknik" target="_blank">Informatika UMPO</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery 3 -->
    <script src="../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

    <!-- popper -->
    <script src="../assets/vendor_components/popper/dist/popper.min.js"></script>

    <!-- Bootstrap 4.0-->
    <script src="../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>