<?php include ('template/header.php'); ?>

<!-- Main Content -->
<div class="container-fluid body_wrapper">

    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2" style="border-right: 1px solid #cccccc; height: 801px;">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Duration</label>
                        <div class="range"></div>

                        <p class="slider_position">&#8804; <span class="value slider_value"></span> min</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cost</label>
                        <div class="range2"></div>

                        <p class="slider_position">&#8804; $ <span class="value2 slider_value"></span></p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Range</label>
                        <div class="range3"></div>

                        <p class="slider_position">&#8804; <span class="value3 slider_value"></span> mile's</p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Rating</label>
                        <div class="stars_position">
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
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Vehicle Type</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Sedan
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> SUV
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Van
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Available Seats</label>
                        <select class="form-control ride_input">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Amenities</label>
                        <select class="form-control ride_input">
                            <option>Bluetooth</option>
                            <option>Charger</option>
                            <option>AC/HEAT</option>
                            <option>Auto</option>
                            <option>Tint</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-10">
            <div class="row">
                <?php
                for ($i = 1; $i <= 9; $i++) {
                    ?>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="">
                                <img src="http://placehold.it/289x289" class="img-responsive" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="text-center"> <i class="fa fa-arrow-circle-left"></i>  Showing 1-5 of 36 Result <i class="fa fa-arrow-circle-right"></i> </p>
                </div>
            </div>

        </div>
    </div>
</div>



<?php include ('template/footer.php'); ?>



