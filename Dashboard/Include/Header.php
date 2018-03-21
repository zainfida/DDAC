<?php include "db/session.php" ?>

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

    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Data table CSS -->
    <link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet"
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
<div class="wrapper pimary-color-green theme-6-active">

    <!-- Top Menu Items -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="mobile-only-brand pull-left">
            <div class="nav-header pull-left">
                <div class="logo-wrap">
                    <a href="index.php">
                        <img class="brand-img" src="dist/img/logo2.png" alt="brand"/>
                    </a>
                </div>
            </div>
            <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left"
               href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
            <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view"
               href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
            <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
            <form id="search_form" role="search" class="top-nav-search collapse pull-left">
                <div class="input-group">
                    <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
						<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse"
                                aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
						</span>
                </div>
            </form>
        </div>
        <div id="mobile_only_nav" class="mobile-only-nav pull-right">
            <ul class="nav navbar-right top-nav pull-right">
                <li class="dropdown auth-drp">
                    <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png"
                                                                                         alt="user_auth"
                                                                                         class="user-auth-img img-circle"/><span
                                class="user-online-status"></span></a>
                    <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX"
                        data-dropdown-out="flipOutX">
                        <li>
                            <a href="../index.php"><i class="zmdi zmdi-card"></i><span>Main Page</span></a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="db/logout.php"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
    <!-- /Top Menu Items -->


    <div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h5 class="modal-title" id="myModalLabel">Confirmation Dialogue</h5>
                </div>
                <div class="modal-body">
                    <h5>Do you want to collect trash from this location?</h5>
                    <input type="hidden" value="" id="idofThis">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="updateTheValue()">Approve</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <!-- Left Sidebar Menu -->
    <div class="fixed-sidebar-left">
        <ul class="nav navbar-nav side-nav nicescroll-bar">
            <li class="navigation-header text-center user-role"><?php echo $login_session_role; ?><i
                        class="zmdi zmdi-more"></i>
            </li>
            <li>
                <hr class="light-grey-hr mb-5"/>
            </li>

            <?php

            if ($login_session_role == 'ADMIN') {
                ?>
               <li>
                    <a href="index.php">
                        <div class="pull-left"><i class="zmdi zmdi-info mr-20"></i><span
                                    class="right-nav-text">View Route</span></div>

                        <div class="clearfix"></div>
                    </a>
                </li>


                <li>
                    <a href="RegisterUser.php">
                        <div class="pull-left"><i class="fa fa-user mr-20"></i><span
                                    class="right-nav-text">Add Agents/Admin</span></div>

                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="ViewUserAdmin.php">
                        <div class="pull-left"><i class="fa fa-money mr-20"></i><span
                                    class="right-nav-text">View/ Edit Users</span></div>

                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="RedeemToday.php">
                        <div class="pull-left"><i class="zmdi zmdi-money mr-20"></i><span
                                    class="right-nav-text">View Booking</span></div>

                        <div class="clearfix"></div>
                    </a>
                </li>


            <?php } else if ($login_session_role == 'AGENT') { ?>

                <li>
                    <a href="index.php">
                        <div class="pull-left"><i class="zmdi zmdi-videocam mr-20"></i><span
                                    class="right-nav-text">View Bookings</span></div>

                        <div class="clearfix"></div>
                    </a>
                </li>

                <li>
                    <a href="RegisterCustomer.php">
                        <div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span
                                    class="right-nav-text">Register Customer</span></div>

                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="KnowledgeVideo.php">
                        <div class="pull-left"><i class="zmdi zmdi-circle mr-20"></i><span
                                    class="right-nav-text">Book Vessel</span></div>

                        <div class="clearfix"></div>
                    </a>
                </li>


                <li>
                <hr class="light-grey-hr mb-10"/>
            </li>
            <?php } ?>

        </ul>
    </div>
    <!-- /Left Sidebar Menu -->


    <!-- Right Setting Menu -->
    <div class="setting-panel">
        <ul class="right-sidebar nicescroll-bar pa-0">
            <li class="layout-switcher-wrap">
                <ul>
                    <li>
                        <span class="layout-title">Scrollable header</span>
                        <span class="layout-switcher">
								<input type="checkbox" id="switch_3" class="js-switch" data-color="#2ecd99"
                                       data-secondary-color="#dedede" data-size="small"/>
							</span>
                        <h6 class="mt-30 mb-15">Theme colors</h6>
                        <ul class="theme-option-wrap">
                            <li id="theme-1"><i class="zmdi zmdi-check"></i></li>
                            <li id="theme-2"><i class="zmdi zmdi-check"></i></li>
                            <li id="theme-3"><i class="zmdi zmdi-check"></i></li>
                            <li id="theme-4"><i class="zmdi zmdi-check"></i></li>
                            <li id="theme-5"><i class="zmdi zmdi-check"></i></li>
                            <li id="theme-6" class="active-theme"><i class="zmdi zmdi-check"></i></li>
                        </ul>
                        <h6 class="mt-30 mb-15">Primary colors</h6>
                        <div class="radio mb-5">
                            <input type="radio" name="radio-primary-color" id="pimary-color-green" checked
                                   value="pimary-color-green">
                            <label for="pimary-color-green"> Green </label>
                        </div>
                        <div class="radio mb-5">
                            <input type="radio" name="radio-primary-color" id="pimary-color-red"
                                   value="pimary-color-red">
                            <label for="pimary-color-red"> Red </label>
                        </div>
                        <div class="radio mb-5">
                            <input type="radio" name="radio-primary-color" id="pimary-color-blue"
                                   value="pimary-color-blue">
                            <label for="pimary-color-blue"> Blue </label>
                        </div>
                        <div class="radio mb-5">
                            <input type="radio" name="radio-primary-color" id="pimary-color-yellow"
                                   value="pimary-color-yellow">
                            <label for="pimary-color-yellow"> Yellow </label>
                        </div>
                        <div class="radio mb-5">
                            <input type="radio" name="radio-primary-color" id="pimary-color-pink"
                                   value="pimary-color-pink">
                            <label for="pimary-color-pink"> Pink </label>
                        </div>
                        <div class="radio mb-5">
                            <input type="radio" name="radio-primary-color" id="pimary-color-orange"
                                   value="pimary-color-orange">
                            <label for="pimary-color-orange"> Orange </label>
                        </div>
                        <div class="radio mb-5">
                            <input type="radio" name="radio-primary-color" id="pimary-color-gold"
                                   value="pimary-color-gold">
                            <label for="pimary-color-gold"> Gold </label>
                        </div>
                        <div class="radio mb-35">
                            <input type="radio" name="radio-primary-color" id="pimary-color-silver"
                                   value="pimary-color-silver">
                            <label for="pimary-color-silver"> Silver </label>
                        </div>
                        <button id="reset_setting" class="btn  btn-success btn-xs btn-outline btn-rounded mb-10">reset
                        </button>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <button id="setting_panel_btn" class="btn btn-success btn-circle setting-panel-btn shadow-2dp"><i
                class="zmdi zmdi-settings"></i></button>
    <!-- /Right Setting Menu -->

    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>

    <!-- /Right Sidebar Backdrop -->