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
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">

                <h1 class="ma-5 text-center">Welcome to <?php echo strtolower($login_session_role); ?> Zone</h1>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">


                    <div class="container">


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default card-view">

                                    <?php
                                    $result = mysqli_query($connection, "SELECT bookingvassel.id as bookingvasselID, bookingvassel.totalBays, bookingvassel.companyName, bookingvassel.vasselId,bookingvassel.Price, customer.id as customerID, customer.name as customername, customer.email, customer.address, customer.contact, viewroute.id as viewrouteID, viewroute.vessel, viewroute.dep_date, viewroute.dep_time, viewroute.dep_from, viewroute.dep_to FROM customer INNER JOIN bookingvassel ON bookingvassel.companyName = customer.id INNER JOIN viewroute on bookingvassel.vasselId = viewroute.id");
                                    $count = mysqli_num_rows($result);
                                    ?>



                                    <?php
                                    if ($count > 0) {

                                    ?>

                                    <div class="panel-heading">
                                        <div class="text-center">
                                            <h6 class="panel-title txt-dark">View Customers Booked Vessle </h6>
                                            <hr class="light-grey-hr mb-5"/>

                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="panel-wrapper collapse in">
                                        <div class="panel-body">
                                            <div class="table-wrap">
                                                <div class="table-responsive">


                                                    <table id="" class="table table-hover display  pb-30 dataTable"
                                                           role="grid" aria-describedby="datable_1_info">
                                                        <thead>
                                                        <tr role="row">
                                                            <th>Vessel ID</th>
                                                            <th>Total Bays</th>
                                                            <th>customername</abbr></th>
                                                            <th>address</th>
                                                            <th>dep_date/dep_time</th>
                                                            <th>dep_from</th>
                                                            <th>dep_to</th>
                                                            <th>price</th>


                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        <?php
                                                        while ($row = mysqli_fetch_array($result)) {


                                                            ?>

                                                            <tr role="row" class="odd">

                                                                <td><?php echo $row['vessel'] ?></td>
                                                                <td><?php echo $row['totalBays'] ?></td>
                                                                <td><?php echo $row['customername'] ?></td>
                                                                <td><?php echo $row['email'] ?></td>
                                                                <td><?php echo $row['dep_date'].'---'.$row['dep_time'] ?></td>
                                                                <td><?php echo $row['dep_from'] ?></td>
                                                                <td><?php echo $row['dep_to'] ?></td>
                                                                <td><?php echo $row['Price'] ?></td>


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
                                                <h3 class="text-center txt-dark mb-10">::::::::: NO DATA FOUND
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


                </div>

            </div>
            <!-- /Title -->

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