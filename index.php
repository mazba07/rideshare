<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Clean Blog</title>

        <!-- Bootstrap Core CSS -->
        <link href="resources/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="resources/css/ride.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

              
    </head>

    <body style="height: 900px;">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><i class="fa fa-thumbs-o-up fa-2x"></i></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a data-toggle="modal" href="#userSignup">Register</a>
                        </li>
                        <li class="hidden-sm hidden-xs">
                            <a>  | </a>
                        </li>

                        <li>
                            <a data-toggle="modal" href="#userLogin">Login</a>
                        </li>
                        <!--                    <li>
                                                <a href="contact.html">Contact</a>
                                            </li>-->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->
        <header class="intro-header" style="background-image: url('resources/images/intro-banner.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <!--<h1></h1>-->
                            <p class="subheading">We`re all headed the same way anyhow...</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container-fluid">

            <section>
                <div class="container">
                    <div class="" style="text-align: center;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                <form class="form-inline">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control ride_input" id="exampleInputName2" placeholder="From">
                                            </div>
                                            <div class="form-group" style="padding-left: 0px; margin-left: -4px;">
                                                <input type="email" class="form-control ride_input" id="exampleInputEmail2" placeholder="To">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control ride_input" id="exampleInputEmail2" placeholder="When">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control ride_input">
                                                    <option>Passengers</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="padding-top: 20px;">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="btn btn-default ride_search_btn" style="text-align: center;">Search!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="row">
                    <div class="col-md-12" style="padding-right: 0px; padding-left: 0px; margin-top: 50px;">
                        <!--<img src="resources/images/body_img.jpg" class="img-responsive" alt="Responsive image">-->
                    </div>
                </div>
            </section>
        </div>

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

    </body>

</html>

<script>
                        $(document).ready(function () {
                            //login to register
                            $('#register_id').click(function (e) {
                                $('#error').html('');
                                $('#userLogin').modal('hide');
                                $('#userSignup').modal('show');

                            });
                            //register to login
                            $('#login_id').click(function (e) {
                                $('#error_login').html('');
                                $('#userSignup').modal('hide');
                                $('#userLogin').modal('show');

                            });
                            //login to forgotPassword
                            $('#forgotPassword_id').click(function (e) {
                                $('#error_forgot_password').html('');
                                $('#userLogin').modal('hide');
                                $('#forgotPassword').modal('show');
                            });

                        });
</script>


