jQuery(function ($) {
    $('#log').on('click', function () {
        $('#ajax_form').css('display','block');



    });

    $('#btn-login').on('click',function () {
        location.reload();
    });

    $('#mycontact').on('click', function () {
        $("#table_contact").css('display','block');
    });

});