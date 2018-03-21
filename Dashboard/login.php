<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>CBS &#8214; Container Booking System</title>
    <meta name="author" content="CBS"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images.ico">
    <link rel="icon" href="images.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet"
          type="text/css"/>


    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="dist/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->

<div class="wrapper pa-0">
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="../index.php">
                <img class="brand-img mr-10 brand-logo" src="../img/Mylogo1.png" alt="CBS"/>
            </a>
        </div>
        <!-- <div class="form-group mb-0 pull-right">
            <span class="inline-block pr-10">Don't have an account?</span>
            <a class="inline-block btn btn-info btn-success btn-rounded btn-outline" href="signup.php">Sign Up</a>
        </div> -->
        <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">Sign in to <b
                                            class="text-danger">CBS</b></h3>
                                    <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                    <h3 class="text-center text-danger" id="result"></h3>
                                </div>
                                <div class="form-wrap">
                                    <form action="#" id="LoginUser">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2">Email
                                                address</label>
                                            <input type="email" class="form-control" required=""
                                                   id="exampleInputEmail_2" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                            <!--<a class="capitalize-font txt-primary block mb-10 pull-right font-12"-->
                                               <!--href="forgot-password.html">forgot password ?</a>-->
                                            <div class="clearfix"></div>
                                            <input type="password" class="form-control" required=""
                                                   id="exampleInputpwd_2" placeholder="Enter pwd">
                                        </div>

                                        <div class="form-group">
                                            <div class="checkbox checkbox-primary pr-10 pull-left">
                                                <input id="checkbox_2" type="checkbox">
                                                <label for="checkbox_2"> Keep me logged in</label>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info btn-success btn-rounded">sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="dist/js/jquery.slimscroll.js"></script>

<!-- Init JavaScript -->
<script src="dist/js/init.js"></script>
<script src="ajax.js"></script>
</body>

</html>
