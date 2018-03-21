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


        <div class="container-fluid">
            <!-- Row -->
            <!-- Title -->
            <div class="row heading-bg">

                <h1 class="ma-5 text-center">Welcome to <?php echo strtolower($login_session_role); ?> Zone</h1>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">


                    <?php if ($login_session_role == 'AGENT') { ?>


                        <div class="container">
                            <div id="mywizard">
                                <div class="step step1">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default card-view">

                                                <?php
                                                $result = mysqli_query($connection, "SELECT * FROM viewroute");
                                                $count = mysqli_num_rows($result);
                                                ?>



                                                <?php
                                                if ($count > 0) {

                                                ?>

                                                <div class="panel-heading">
                                                    <div class="text-center">
                                                        <h6 class="panel-title txt-dark">View Route </h6>
                                                        <hr class="light-grey-hr mb-5"/>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <div class="table-wrap">
                                                            <div class="table-responsive">


                                                                <table id=""
                                                                       class="table table-hover display  pb-30 dataTable"
                                                                       role="grid" aria-describedby="datable_1_info">
                                                                    <thead>
                                                                    <tr role="row">
                                                                        <th>vessel</th>
                                                                        <th>dep_date</th>
                                                                        <th>dep_time</th>
                                                                        <th>dep_from</abbr></th>
                                                                        <th>dep_to</th>
                                                                        <th>price</th>
                                                                        <th>availableBay</th>
                                                                        <th>Action</th>

                                                                    </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                    <?php
                                                                    while ($row = mysqli_fetch_array($result)) {


                                                                        ?>

                                                                        <tr role="row" class="odd">

                                                                            <td><?php echo $row['vessel'] ?></td>
                                                                            <td><?php echo $row['dep_date'] ?></td>
                                                                            <td><?php echo $row['dep_time'] ?></td>
                                                                            <td><?php echo $row['dep_from'] ?></td>
                                                                            <td><?php echo $row['dep_to'] ?></td>
                                                                            <td><?php echo $row['price'] ?></td>
                                                                            <td><?php echo $row['availableBay'] ?></td>
                                                                            <td>
                                                                                <div class="step step1">
                                                                                    <div class="nextStep">
                                                                                        <button class="btn btn-primary"
                                                                                                onclick="setBookingVasel(<?php echo $row['id'] . ',' . $row['availableBay'] ?>)">
                                                                                            Book
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </td>

                                                                        </tr>


                                                                        <?php
                                                                    }
                                                                    ?>

                                                                    </tbody>
                                                                </table>


                                                            </div>
                                                        </div>
                                                        <hr>

                                                    </div>


                                                    <?php
                                                    } else {


                                                        ?>
                                                        <div class="panel-heading">
                                                            <h3 class="text-center txt-dark mb-10">::::::::: NO DATA
                                                                FOUND
                                                                ::::::::</h3>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="step step2">
                                    <div class="table-struct full-width">
                                        <div class="table-cell vertical-align-middle">
                                            <div class="auth-form  ml-auto mr-auto no-float">
                                                <div class="row">
                                                    <div class="col-sm-12 col-xs-12">

                                                        <div class="form-wrap">

                                                            <form action="#" id="UpdateBookingVassel"
                                                                  autocomplete="off">
                                                                <div class="form-group">
                                                                    <label class="control-label mb-10"
                                                                           for="exampleInputName_1">Number Of
                                                                        Bays</label>
                                                                    <input type="number" class="form-control"
                                                                           required=""
                                                                           id="exampleInputBays"
                                                                           placeholder="Number Of Bays" value="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label mb-10"
                                                                           for="exampleInputCompany">Choose
                                                                        Company</label>

                                                                    <select class="form-control" required=""
                                                                            id="exampleInputCompany">
                                                                        <?php

                                                                        $SQLQUERY = "SELECT * FROM customer";
                                                                        $result = mysqli_query($connection, $SQLQUERY);

                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                            echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
                                                                        }

                                                                        ?>
                                                                        <!---->
                                                                        <!--                                                                        <option>dfd</option>-->
                                                                        <!--                                                                        <option>dfd</option>-->

                                                                    </select>

                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="hidden" class="form-control"
                                                                           required=""
                                                                           id="exampleInputVasselID"
                                                                           placeholder="Enter Contact"
                                                                           value="">

                                                                    <input type="hidden" class="form-control"
                                                                           required=""
                                                                           id="exampleInputAvailableVassel"
                                                                           placeholder="Enter Contact"
                                                                           value="">
                                                                </div>


                                                                <div class="form-group text-center">
                                                                    <button type="submit"
                                                                            class="btn btn-info btn-success btn-rounded">
                                                                        Book Now
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    <?php } ?>

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