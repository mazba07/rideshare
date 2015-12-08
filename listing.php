<?php include ('template/header.php'); ?>

<style>
    .range {
        width: 200px;
        height: 2px;
        background: green;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        border-radius: 10px;
    }

    .ui-slider-range {
        height: 100%;
        background: red;
        border-radius: 10px;
    }

    .ui-slider-handle {
        position: absolute;
        width: 15px;
        height: 15px;
        background: white;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        border-radius: 50%;
        cursor: pointer;
        outline: none;
    }

</style>

<!-- Main Content -->
<div class="container-fluid body_wrapper">

    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2" style="border-right: 1px solid #cccccc;">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Duration</label>

                        <div class="range"></div>

                        <!--<p class="value"></p>-->
                        <br/> &#8804; <span class="value"></span>

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
        </div>
    </div>
</div>



<?php include ('template/footer.php'); ?>

<script>
    (function () {
        $('.range').slider({
            range: 'min',
            min: 0,
            max: 100,
            value: 50,
            slide: function (e, ui) {
                return $('.value').html(ui.value);
            }
        });
        $('.value').html('50');
    }.call(this));
</script>