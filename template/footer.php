<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <li>
                        <a href="#">
                            Terms and Condition
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
                <!--<p class="copyright text-muted">Copyright &copy; Your Website 2014</p>-->
            </div>
        </div>
    </div>
</footer>



<!--REGISTRATION MODAL-->
<div class="modal fade" id="userSignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog">
        <div id="logbox">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <form role="form" id="registerfrm" onsubmit="return false;" action="" method="post">
                <h3 class="text-center">Register</h3>

                <div class="form-group">
                    <input type="email" class="form-control ride_input" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control ride_input" id="exampleInputEmail1" placeholder="Password">
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Subscribe me to the Newsletter
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control ride_input" id="exampleInputEmail1" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control ride_input" id="exampleInputEmail1" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control ride_input" id="" placeholder="Phone Number">
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control ride_input">
                                        <option>Gender</option>
                                        <option>male</option>
                                        <option>female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group pull-right">
                                    <i class="fa fa-car fa-2x"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-car fa-2x"></i> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Confirm" class="input_modalButton"/>

                <div class="text-center" style="margin-top: 10px;">
                    already have account? <a href="#" id="login_id">login</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END REGISTRATION MODAL-->

<!--LOGIN MODAL-->
<div class="modal fade" id="userLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog">
        <div id="logbox">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <form role="form" id="loginfrm" onsubmit="return false;" action="" method="post">
                <h3 class="text-center">Login</h3>

                <div style="color: red;" class="text-center" id="error_login"></div>

                <div class="form-group">
                    <input type="email" class="form-control ride_input" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control ride_input" id="exampleInputEmail1" placeholder="Password">
                </div>

                <p style="margin-left: 43px;"><input class="" type="checkbox"  name="remember" id="remember"><span class="remember-me"> Remember me</span><p>

                    <input type="submit" value="login" class="input_modalButton"/>

                <div class="text-center" style="margin-top: 10px;">
                    <a href="#" id="register_id">create an account</a> - <a href="#" id="forgotPassword_id">forgot password</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END LOGIN MODAL-->

<!--FORGOT PASSWORD MODAL-->
<div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog">
        <div id="logbox">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <form role="form" id="forgotPassword_request" onsubmit="return false;" action="" method="post">
                <h3 class="text-center">Reset Password</h3>
                <div style="color: red;" class="text-center" id="error_forgot_password"></div>

                <div class="form-group">
                    <input type="email" class="form-control ride_input" id="exampleInputEmail1" placeholder="Email">
                </div>

                <input type="submit" value="Confirm" class="input_modalButton"/>

            </form>
        </div>
    </div>
</div>
<!--END FORGOT PASSWORD MODAL-->




<!-- jQuery -->
<script src="resources/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="resources/js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="resources/js/ride.js"></script>

<!-- Custom Theme JavaScript -->
<script src="resources/js/ride_frontend.js"></script>

<!--only load for range slider-->
<script src="resources/js/range_slider.js"></script>
<script src="resources/js/range_custom_slider.js"></script>

</body>

</html>
