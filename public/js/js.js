jQuery(function ($) {
    $('#log').on('click', function () {
        $('.div_form').load('../page/login.php');

    });

    $('#btn-login').on('click',function () {
        location.reload()
    });

    $('#mycontact').on('click', function () {
        $('.div_form').load('../page/myContacs.php');

    });

});