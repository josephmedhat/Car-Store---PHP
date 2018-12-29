        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <!--<a href="index.php" class="logo text-center">Fonik</a>-->
                        <a href="index.php" class="logo"><img src="assets/images/race-car-309123_960_720.png" height="150" width="150" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>

                            <li>
                                <a href="index.php" class="waves-effect"><i class="dripicons-device-desktop"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-blog"></i><span> Forms </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-images.php">Cars</a></li>
                                    <?php
                                    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']==1)
                                    {?>
                                    <li><a href="new_car.php">Add car</a></li>
                                    <li><a href="view_brand.php">View Brand</a></li>
                                    <?php }?>
                                </ul>
                            </li>
                        <?php
                            if (!isset($_SESSION['user_name']))
                            {?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span> Registration <span class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-login.php">Login</a></li>
                                    <li><a href="pages-register.php">Register</a></li>
                                </ul>
                            </li>
                        <?php }?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->