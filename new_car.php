<?php include_once('includes/header_start.php'); ?>
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />

<?php include_once('includes/header_end.php'); ?>
<?php require_once ('classes/Brand.php')?>
                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Add New Car</h3>
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

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <form action="actions/create_new_car.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Car Model</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="example-text-input" name="model" required>
                                                </div>
                                            </div>
                                                <div class="form-group row">
                                                    <label  class="col-sm-2 col-form-label">Price</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" id="example-text-input" name="price" required>
                                                    </div>
                                                </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="file" value="Artisanal kale" required id="example-text-input" name="file">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="summernote form-control" required name="desc"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Brand</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="brand">
                                                        <?php $b = new Brand(); $b->read(); while ($row = mysqli_fetch_array($b->brands)){ ?>
                                                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                                <div class="form-group ">
                                                    <input type="submit" value="create" class="btn btn-primary col-sm-12 col-form-label">

                                                </div>
                                        </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

<?php include_once('includes/footer_start.php'); ?>
    <script src="assets/plugins/summernote/summernote.min.js"></script>

    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                 // set focus to editable area after initializing summernote
            });
        });
    </script>
<?php include_once('includes/footer_end.php'); ?>