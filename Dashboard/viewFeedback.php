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
                    $result = mysqli_query($connection, "SELECT * FROM feedback");
                    $count = mysqli_num_rows($result);
                    ?>



                    <?php
                    if ($count > 0) {

                    ?>

                    <div class="panel-heading">
                        <div class="text-center">
                            <h6 class="panel-title txt-dark">View Customer Feedback </h6>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Feedback</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($result)) {


                                            ?>

                                            <tr role="row" class="odd">

                                                <td><?php echo $row['Name']?></td>
                                                <td><?php echo $row['email']?></td>
                                                <td><?php echo $row['subject']?></td>
                                                <td><?php echo $row['feedback']?></td>
                                               

<?php 
if($row['status']=='unread'){

    ?>

<td><button class="btn btn-danger fa fa-eraser" onclick="readUserFeedback(<?php echo $row['ID']?>)">Unread </button></td>


<?php
}else{
?>

<td><button class="btn btn-success fa fa-edit">Read</button></td>


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