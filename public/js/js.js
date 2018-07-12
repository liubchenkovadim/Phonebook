jQuery(function ($) {
    $('#log').on('click', function (event) {
        event.preventDefault();

        $('#ajax_container').load(this.href);

        });

    $('#btn-login').on('click', function(){
        let user = $('#user').val();
        let pass = $('#pass').val();
        $.post("../page/login.php",{
            user:user,
            pass:pass}
            ,function () {

        }
        );
        location.reload();

    });

    $('#my_contact').on('click', function (event) {
        event.preventDefault();


        $('#ajax_container').load('../page/contact.php', { 'user[]': [function () {
                var user = document.getElementById("user").valueOf();


                $.ajax({
                    url: "../page/login.php",
                    type: "post",
                    data: {user:user},
                    success: function (data) {


                    }
                });
            }]});

    });



});