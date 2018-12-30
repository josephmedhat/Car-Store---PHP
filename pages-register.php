<?php include_once('includes/header_account.php'); ?>


        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">


                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Free Register</h4>
                        <p class="text-muted text-center">Get your free account now.</p>

                        <form class="form-horizontal m-t-30"  name="regForm" action="actions/create_new_user.php" method="post" onsubmit="return validateForm() ">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                            </div>

                            <div class="form-group">
                                <label >Email</label>
                                <input type="email" class="form-control" id="useremail" placeholder="Enter email" name="email">
                            </div>

                            <div class="form-group">
                                <label >Phone Number</label>
                                <input type="number" class="form-control" style="appearance: none;-moz-appearance: none" id="phonenumber" placeholder="Enter phone number" name="phone">
                            </div>


                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password">
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Enter password" name="confirmPassword">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p>Already have an account ? <a href="pages-login.php" class="font-500 font-14 text-primary font-secondary"> Login </a> </p>
            </div>
        </div>

<?php include_once('includes/footer_account.php'); ?>
<script>
    function validateForm() {
        var user_name = document.forms["regForm"]["username"].value;
        var email = document.forms["regForm"]["email"].value;
        var phone = document.forms["regForm"]["phone"].value;
        var password= document.forms["regForm"]["password"].value;
        var confirmPassword= document.forms["regForm"]["confirmPassword"].value;
        if (user_name == "") {
            alert("user_name must be filled");
            return false;
        }
        else if (email == "") {
            alert("email must be filled");
            return false;
        }
        else if (phone == "") {
            alert("phone must be filled with valid number");
            return false;
        }
        else  if (password == "") {
            alert("password must be filled");
            return false;
        }
        else if (confirmPassword == ""){
            alert("confirm Password must be filled");
            return false;
        }
       else if (confirmPassword != password){
            alert("confirm Password must be identical with password ");
            return false;
        }
    }
</script>
