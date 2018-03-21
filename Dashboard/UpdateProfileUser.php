<?php include "Include/Header.php" ?>

<?php
if ($login_session_status != "ACTIVE") {
    echo '<script>window.location = "Inactive.php"; </script>';
} else if ($login_session_role != "CUSTOMER") {
    echo '<script>window.location = "index.php"; </script>';
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
                                    <h3 class="text-center txt-dark mb-10">Update User Profile </h3>
                                </div>
                                <div class="form-wrap">

                                    <?php

                                    $SQLQUERY = "SELECT * FROM user WHERE email ='" . $login_session_Email . "'";
                                    $result = mysqli_query($connection, $SQLQUERY);

                                    while ($row = mysqli_fetch_array($result)) {
                                        $name_db = $row['name'];
                                        $email_db = $row['email'];
                                        $password_db = $row['password'];
                                        $contact_db = $row['contact'];
                                        $address_db = $row['address'];
                                        $UserID = $row['id'];

                                    }


                                    ?>

                                    <form action="#" id="UpdateUserCustomer">
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputName_1">Full
                                                Name</label>
                                            <input type="text" class="form-control" required=""
                                                   id="exampleInputName_1"
                                                   placeholder="Full Name" value="<?php echo $name_db ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2">Email
                                                address</label>
                                            <input type="email" class="form-control" required=""
                                                   id="exampleInputEmail_2"
                                                   placeholder="Enter email" readonly
                                                   value="<?php echo $email_db ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10"
                                                   for="exampleInputpwd_2">Password</label>
                                            <input type="password" class="form-control" required=""
                                                   id="exampleInputpwd_2" placeholder="Enter password"
                                                   value="<?php echo $password_db ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10"
                                                   for="exampleInputContact">Contact
                                                Number</label>
                                            <input type="number" class="form-control" required=""
                                                   id="exampleInputContact" placeholder="Enter Contact"
                                                   value="<?php echo $contact_db ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10"
                                                   for="exampleInputAddress">Full
                                                Address</label>
                                            <textarea class="form-control" required=""
                                                      id="exampleInputAddress"
                                                      placeholder="Enter Address"><?php echo $address_db ?></textarea>
                                        </div>


                                        <div class="form-group text-center">

                                            <input type="hidden" value="<?php echo $UserID ?>" id="UserID">

                                            <button type="submit"
                                                    class="btn btn-info btn-success btn-rounded">Update User
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