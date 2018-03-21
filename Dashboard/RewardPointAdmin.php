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


        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">

                    <?php
                    $result = mysqli_query($connection, "SELECT user.id, user.name, user.email, user.address, user.status,collection.id as collectionID ,collection.trash, collection.action, collection.date FROM collection INNER JOIN user ON user.id = collection.userid");
                    $count = mysqli_num_rows($result);
                    ?>



                    <?php
                    if ($count > 0) {

                    ?>

                    <div class="panel-heading">
                        <div class="text-center">
                            <h6 class="panel-title txt-dark">View User Collection Point </h6>
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
                                            <th>Full Name</th>
                                            <th>Email Address</th>
                                            <th>Plastic</abbr></th>
                                            <th>Paper</th>
                                            <th>Cooking Oil</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($result)) {


                                        ?>

                                        <tr role="row" class="odd">

                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo explode("|", $row['trash'])[1] ?></td>
                                            <td><?php echo explode("|", $row['trash'])[0] ?></td>
                                            <td><?php echo explode("|", $row['trash'])[2] ?></td>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['action'] ?></td>

                                            <?php
                                            if ($row['action'] == 'Complete'){


                                                ?>

                                                <td><span class="text text-success text-center">Complete</span></td>
                                                <?php
                                            }else if ($row['action'] == 'Rejected'){


                                                ?>

                                                <td><span class="text text-danger text-center">Rejected</span></td>
                                                <?php
                                            } else{

                                            ?>

                                                <td><span class="btn btn-primary btn-sm"
                                                          onclick="ApproveCollection('<?php echo $row['collectionID'] ?>')"
                                                          data-toggle="modal" data-target="#myModal">Approve</span></td>


                                            <?php

                                            }
                                                ?>


                                            </tr>


                                            <?php
                                        }
                                        ?>

                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>


                        <?php
                        } else {


                            ?>
                            <div class="panel-heading">
                                <h3 class="text-center txt-dark mb-10">::::::::: NO DATA FOUND ::::::::</h3>
                                <div class="clearfix"></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>




            <div id="myModal" class="modal fade in" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×
                            </button>
                            <h5 class="modal-title" id="myModalLabel">Record
                                Collection</h5>
                        </div>
                        <div class="modal-body">
                            <!-- Row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="">
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body pa-0">
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-wrap">

                                                        <form action="#"
                                                              id="UpdateCollectionItemForAdmin">
                                                            <div class="form-body overflow-hide">
                                                                <div class="form-group">
                                                                    <label class="control-label mb-10"
                                                                           for="cookingoil">Cooking
                                                                        Oil</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <img src="dist/img/weight-kg-512.png"
                                                                                 class="kg-icon">
                                                                        </div>
                                                                        <input type="text"
                                                                               class="form-control"
                                                                               id="cookingoil"
                                                                               onkeyup="cookingPointCount()">
                                                                    </div>
                                                                    <h4 class="control-label mb-10 text-danger"
                                                                        for="cookingoil">Points: <span
                                                                            id="cookingOilVal">0</span></h4>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label mb-10"
                                                                           for="plastic">Plastic</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <img src="dist/img/weight-kg-512.png"
                                                                                 class="kg-icon">
                                                                        </div>
                                                                        <input type="text"
                                                                               class="form-control"
                                                                               id="plastic"
                                                                               onkeyup="PlasticPointCount()">
                                                                    </div>
                                                                    <h4 class="control-label mb-10 text-danger"
                                                                        for="plastic">Points: <span
                                                                            id="PlasticVal">0</span></h4>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label mb-10"
                                                                           for="paper">Paper</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <img src="dist/img/weight-kg-512.png"
                                                                                 class="kg-icon">
                                                                        </div>
                                                                        <input type="text"
                                                                               class="form-control"
                                                                               id="paper" onkeyup="PaperPointCount()">
                                                                    </div>
                                                                    <h4 class="control-label mb-10 text-danger"
                                                                        for="plastic">Points: <span
                                                                            id="paperVal">0</span></h4>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label class="control-label mb-10"
                                                                           for="paper">Action</label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">
                                                                            <img src="dist/img/weight-kg-512.png"
                                                                                 class="kg-icon">
                                                                        </div>
                                                                        <select class="form-control"
                                                                                id="action">
                                                                            <option value="Complete">Approve</option>
                                                                            <option value="Rejected">Reject</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <input type="hidden" value="" id="useridCollection">


                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                        class="btn btn-success waves-effect">
                                                                    Save
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-default waves-effect"
                                                                        data-dismiss="modal">
                                                                    Cancel
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
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>


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