<?php include ('template/header.php'); ?>


<!-- Main Content -->
<div class="container-fluid body_wrapper">

    <div class="row">
        <div class="col-md-1 col-sm-3 col-xs-12">
            <i class="fa fa-th fa-3x" style="margin-top: 12px;"></i>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Duration</label>
                <div class="range"></div>

                <p class="slider_position">&#8804; <span class="value slider_value"></span> min</p>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Cost</label>
                <div class="range2"></div>

                <p class="slider_position">&#8804; $ <span class="value2 slider_value"></span></p>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Range</label>
                <div class="range3"></div>

                <p class="slider_position">&#8804; <span class="value3 slider_value"></span> mile's</p>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Vehicle Type</label>
                <div class="checkbox" style="margin-top: 3px;">
                    <label>
                        <input type="checkbox"> Sedan
                    </label>
                    <label>
                        <input type="checkbox"> SUV
                    </label>
                    <label>
                        <input type="checkbox"> Van
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-1 col-sm-3 col-xs-12">
            <div class="form-group">
                <label for="exampleInputEmail1">Result</label>
                <select class="form-control ride_input">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12">
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

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="http://placehold.it/1270x800" class="img-responsive" alt="Responsive image">
        </div>
    </div>
</div>

<?php include ('template/footer.php'); ?>


