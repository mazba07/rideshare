
//for login, register and forgot password modal
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

//range slider custom clone
