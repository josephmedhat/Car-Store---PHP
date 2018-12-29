<?php include_once('includes/header_start.php'); ?>
<?php require_once ("classes/Brand.php"); ?>
<?php require_once ("classes/configration.php");?>

<?php $brand= new Brand();


if(isset($_GET['edit'])){
    $brand::$edit_state=true;
    $brand->read_by_id($_GET['edit']);
}

?>
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />
    <link href="assets/css/viewBrand.css" rel="stylesheet" />

<?php include_once('includes/header_end.php'); ?>

    <!-- Page title -->
    <ul class="list-inline menu-left mb-0">
        <li class="list-inline-item">
            <button type="button" class="button-menu-mobile open-left waves-effect">
                <i class="ion-navicon"></i>
            </button>
        </li>
        <li class="hide-phone list-inline-item app-search">
            <h3 class="page-title">Brands</h3>
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


            <div class="card m-b-20">
                <div class="card-body">
                    <form  method="post"  action="actions/create_new_brand.php">
                        <table >
                            <tr>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $brand->getId(); ?>">
                                    <label>Brand</label>
                                </td>

                                <td class="col-sm-10">
                                    <input class="form-control" type="text" id="example-text-input" name="brand" value="<?php echo $brand->getName(); ?>">
                                </td>
                                <td>
                                    <?php if(Brand::$edit_state==false): ?>
                                        <input type="submit" value="Create" name="create" class="btn btn-primary col-sm-12 col-form-label">
                                    <?php else: ?>
                                        <input type="submit" value="Update"  name="update" class="btn btn-primary col-sm-12 col-form-label">
                                    <?php endif;?>
                                </td>


                            </tr>
                        </table>




                    </form>
                </div>
            </div>

            <div class="card m-b-20">
                <div class="card-body">

                    <table >
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th colspan="2">Action</th>
                        </tr>



                        </thead>
                        <tbody>
                        <?php $b = new Brand(); $b->read(); while ($row = mysqli_fetch_array($b->brands)){ ?>
                            <tr id="brandtr">
                                <td><?php echo $row['name']; ?></td>
                                <td>
                                    <a class="edit_btn" href="view_brand.php?edit=<?php echo $row['id']; ?>">Edit</a>
                                </td>
                                <td class="brandtd">
                                    <a class="del_btn" href="actions/create_new_brand.php?delete=<?php echo $row['id']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>

                </div>
            </div>



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