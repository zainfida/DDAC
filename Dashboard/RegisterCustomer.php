<?php include "Include/Header.php" ?>

<?php
if ($login_session_status != "ACTIVE") {
    echo '<script>window.location = "Inactive.php"; </script>';
} else if ($login_session_role != "AGENT") {
    echo '<script>window.location = "../index.php"; </script>';
}
?>

    <!-- Main Content -->
    <div class="page-wrapper">


        <div class="container">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle">
                    <div class="auth-form  ml-auto mr-auto no-float">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">Sign up to <b
                                            class="text-danger">Container Booking</b></h3>
                                    <h3 class="text-center text-danger" id="result"></h3>

                                </div>
                                <div class="form-wrap">

                                    <form action="#" id="registerUserPage" autocomplete="off">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputName_1">Compnay
                                                Name</label>
                                            <input type="text" class="form-control" required=""
                                                   id="exampleInputName_1"
                                                   placeholder="Full Name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2">Email
                                                address</label>
                                            <input type="email" class="form-control" required=""
                                                   id="exampleInputEmail_2"
                                                   placeholder="Enter email"
                                                   value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10"
                                                   for="exampleInputContact">Contact
                                                Number</label>
                                            <input type="number" class="form-control" required=""
                                                   id="exampleInputContact" placeholder="Enter Contact"
                                                   value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10"
                                                   for="exampleInputAddress">Full
                                                Address</label>
                                            <textarea class="form-control" required=""
                                                      id="exampleInputAddress"
                                                      placeholder="Enter Address"></textarea>
                                        </div>



                                        <div class="form-group text-center">

                                                <button type="submit"
                                                        class="btn btn-info btn-success btn-rounded">Register Customer
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


            <!-- Footer -->
            <footer class="footer container-fluid pl-30 pr-30">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-center">2018 <b class="text-danger">&copy;</b>Trash<b
                                class="text-danger">BANK</b>. Pampered by ZAIN FIDA</p>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->
        </div>
    </div>
    <!-- /Main Content -->

<?php include "Include/Footer.php" ?>