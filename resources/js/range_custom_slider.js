(function () {
        $('.range').slider({
            range: 'min',
            min: 0,
            max: 100,
            value: 40,
            slide: function (e, ui) {
                return $('.value').html(ui.value);
            }
        });
        $('.value').html('40');
    }.call(this));

    (function () {
        $('.range2').slider({
            range: 'min',
            min: 0,
            max: 100,
            value: 60,
            slide: function (e, ui) {
                return $('.value2').html(ui.value);
            }
        });
        $('.value2').html('60');
    }.call(this));

    (function () {
        $('.range3').slider({
            range: 'min',
            min: 0,
            max: 100,
            value: 80,
            slide: function (e, ui) {
                return $('.value3').html(ui.value);
            }
        });
        $('.value3').html('80');
    }.call(this));