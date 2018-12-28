<?php include_once('includes/header_start.php'); ?>

<?php include_once('includes/header_end.php'); ?>
<?php require_once ('classes/Car.php')?>
                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Cars</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid row">
                            <?php $b = new Car(); $b->read(); while ($row = mysqli_fetch_array($b->cars)){ ?>

                            <div class="col-lg-6">


                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title"><?php echo $row['model']; ?></h4>
                                        <h6 class="header-title"><?php

                                            $getBrand=new Car();
                                            $t=mysqli_fetch_array($getBrand->getBrand($row['brand_id']));
                                                echo $t['name'];

                                            ?></h6>
<!--                                        <p class="text-muted m-b-30 font-14"><?php /*echo $row['des'];*/?></p>
-->                                        <div class="">
                                            <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image" width="500px" height="500px">
                                        </div>
                                        <br>
                                        <a class=" btn btn-primary" href="#">Read more</a>

                                    </div>
                                </div>


                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    </div>


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

<?php include_once('includes/footer_start.php'); ?>

<?php include_once('includes/footer_end.php'); ?>