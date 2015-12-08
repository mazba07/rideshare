<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ride Share</title>

        <!-- Bootstrap Core CSS -->
        <link href="resources/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="resources/css/ride.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


        <style>

            .review_section{
                padding: 10px;
                color: #4B92E5;
            }
            div.stars {
                /*width: 270px;*/
                display: inline-block;
            }

            input.star { display: none; }

            label.star {
                float: right;
                padding: 3px;
                /*font-size: 36px;*/
                color: #444;
                transition: all .2s;
            }

            input.star:checked ~ label.star:before {
                content: '\f005';
                color: #FD4;
                transition: all .25s;
            }

            input.star-5:checked ~ label.star:before {
                color: #FE7;
                text-shadow: 0 0 20px #952;
            }

            input.star-1:checked ~ label.star:before { color: #F62; }

            label.star:hover { transform: rotate(-15deg) scale(1.3); }

            label.star:before {
                content: '\f006';
                font-family: FontAwesome;
            }

        </style>
    </head>

    <body>
        <!-- Main Content -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="http://placehold.it/236x236" class="img-circle" alt="Responsive image" style="border: 1px solid whitesmoke;">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-2">

                            <div class="stars">
                                <form action="">
                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="row" style="border-right: 1px solid #cccccc; border-top: 1px solid #cccccc; margin-top: 21px; height: 728px;">
                        <div class="col-md-12">
                            <p>Write something about yourself</p>
                            <p>Occupation</p>
                            <p>Education</p>
                            <p>Hobbies</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-10 dis_lr">
                            <img src="http://placehold.it/668x300" class="img-responsive" alt="Responsive image" style="width: 100%; height: 300px;">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default btn-block banner_side_btn" type="submit">Button</button>
                            <button class="btn btn-default btn-block banner_side_btn" type="submit">Button</button>
                            <button class="btn btn-default btn-block banner_side_btn" type="submit">Button</button>
                            <button class="btn btn-default btn-block banner_side_btn" type="submit">Button</button>
                            <button class="btn btn-default btn-block banner_side_btn" type="submit">Button</button>
                            <button class="btn btn-default btn-block banner_side_btn" type="submit">Button</button>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
                        <div class="col-md-2 pull-right">
                        </div>
                        <div class="col-md-3 pull-right">
                            <button class="btn btn-default btn-block " type="submit">Button</button>
                        </div>
                        <div class="col-md-3 pull-right">
                            <button class="btn btn-default btn-block " type="submit">Button</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="text-center">Activity</h3>
                            <h4>11-14-15 Drove <span><a href="">Kasey</a>,<a href="">Mark</a> and <a href="">Frank</a></span> from downtown DC to Burbank </h4>
                            <h4>11-14-15 Drove <span><a href="">Kasey</a>,<a href="">Mark</a> and <a href="">Frank</a></span> from downtown DC to Burbank </h4>
                            <h4>11-14-15 Drove <span><a href="">Kasey</a>,<a href="">Mark</a> and <a href="">Frank</a></span> from downtown DC to Burbank </h4>
                        </div>
                        <div class="col-md-4">
                            <img src="http://placehold.it/289x289" class="img-responsive" alt="Responsive image">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="text-center">Reviews</h3>
                            <div style="border-left: 3px solid #4B92E5;">
                                <p class="review_section"> student-teacher affair stories in history: a video,
                                    taken by a cellphone camera, of then-Texas high school 
                                    teacher Brittni Colleps having group sex with four 18- and "
                                </p>
                            </div>
                            <div style="border-left: 3px solid #4B92E5;">
                                <p class="review_section"> student-teacher affair stories in history: a video,
                                    taken by a cellphone camera, of then-Texas high school 
                                    teacher Brittni Colleps having group sex with four 18- and "
                                </p>
                            </div>
                            <div style="border-left: 3px solid #4B92E5;">
                                <p class="review_section"> student-teacher affair stories in history: a video,
                                    taken by a cellphone camera, of then-Texas high school 
                                    teacher Brittni Colleps having group sex with four 18- and "
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5">

                        </div>
                    </div>
                </div>
            </div>

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

        <!-- jQuery -->
        <script src="resources/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="resources/js/bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="resources/js/ride.js"></script>

    </body>

</html>
