<?php include_once('includes/header_account.php'); ?>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue.</p>

                        <form class="form-horizontal m-t-30" action="actions/login_user.php" method="post">

                            <div class="form-group">
                                <label for="useremail">Email</label>
                                <input type="text" class="form-control" id="useremail" placeholder="Enter email" name="useremail">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password">
                            </div>

                            <div class="form-group row">

                                <div class="col-sm-6">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Don't have an account ? <a href="pages-register.php" class="font-500 font-14 text-primary font-secondary"> Signup Now </a> </p>
            </div>

        </div>

<?php include_once('includes/footer_account.php'); ?>