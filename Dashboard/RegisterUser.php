<?php include "Include/Header.php" ?>

<?php
if ($login_session_status != "ACTIVE") {
    echo '<script>window.location = "Inactive.php"; </script>';
} else if ($login_session_role != "ADMIN") {
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
                                    <h3 class="text-center txt-dark mb-10">Sign up to <b
                                                class="text-danger">CBS</b></h3>
                                    <h3 class="text-center text-danger" id="result"></h3>

                                </div>
                                <div class="form-wrap">

                                    <?php
                                    if (isset($_GET['UserID'])) {
                                        $formID = 'UpdateUserAdmin';
                                        $UserID = $_GET['UserID'];

                                        $SQLQUERY = "SELECT * FROM user WHERE id =" . $UserID;
                                        $result = mysqli_query($connection, $SQLQUERY);

                                        while ($row = mysqli_fetch_array($result)) {
                                            $name_db = $row['name'];
                                            $email_db = $row['email'];
                                            $password_db = $row['password'];
                                            $contact_db = $row['contact'];
                                            $address_db = $row['address'];
                                            $userrole_db = $row['role'];
                                            $userstatus_db = $row['status'];
                                        }

                                    } else {
                                        $formID = 'registerUserAdmin';
                                        $name_db = '';
                                        $email_db = '';
                                        $password_db = '';
                                        $contact_db = '';
                                        $address_db = '';
                                        $userrole_db = '';
                                        $userstatus_db = '';
                                    }
                                    ?>

                                    <form action="#" id="<?php echo $formID ?>" autocomplete="off">
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
                                                   placeholder="Enter email" <?php if (isset($_GET['UserID'])) echo 'readonly' ?>
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

                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10"
                                                   for="exampleInputUserRole">User Role
                                            </label>
                                            <select class="form-control" required="" id="exampleInputUserRole">
                                                <option value="ADMIN" selected>Admin</option>
                                                <option value="AGENT" <?php if ($userrole_db == 'Agent') { ?> selected <?php } ?> >
                                                    Agent
                                                </option>
<!--                                                <option value="COLLECTOR" --><?php //if ($userrole_db == 'COLLECTOR') { ?><!-- selected --><?php //} ?><!-- >-->
<!--                                                    Collection Team-->
<!--                                                </option>-->

                                            </select>
                                        </div>

                                        <?php if (isset($_GET['UserID'])) { ?>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10"
                                                       for="exampleInputUserStatus">User Status
                                                </label>
                                                <select class="form-control" required="" id="exampleInputUserStatus">
                                                    <option value="ACTIVE" selected>ACTIVE</option>
                                                    <option value="BLOCK" <?php if ($userstatus_db == 'BLOCK') { ?> selected <?php } ?> >
                                                        BLOCK
                                                    </option>

                                                </select>
                                            </div>


                                        <?php } ?>

                                        <div class="form-group text-center">

                                            <?php if (isset($_GET['UserID'])) { ?>


                                                <input type="hidden" value="<?php echo $UserID ?>" id="UserID">

                                                <button type="submit"
                                                        class="btn btn-info btn-success btn-rounded">Update User
                                                </button>
                                            <?php } else { ?>
                                                <button type="submit"
                                                        class="btn btn-info btn-success btn-rounded">Register User
                                                </button>

                                            <?php } ?>
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