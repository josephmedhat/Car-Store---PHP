<?php include_once('includes/header_start.php'); ?>
<?php require_once ('classes/Car.php')?>

<?php $car= new Car();


if(isset($_GET['show'])){
    $car->read_by_id($_GET['show']);
}

?>
<?php include_once('includes/header_end.php'); ?>
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

                            <div class="col-lg-6">


                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title"><?php echo $car->getModel(); ?></h4>
                                        <h6 class="header-title"><?php

                                            $getBrand=new Car();
                                            $t=mysqli_fetch_array($getBrand->getBrand($car->brand_id));
                                                echo $t['name'];

                                            ?></h6>
                                        <p class="text-muted m-b-30 font-14"><?php echo $car->getDes();?></p>
                                        <div class="">
                                            <img src="<?php echo "actions/upload/".$car->getImgPath();?>" class="img-fluid" alt="Responsive image" width="500px" height="500px">
                                        </div>
                                        <br>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

<?php include_once('includes/footer_start.php'); ?>

<?php include_once('includes/footer_end.php'); ?>