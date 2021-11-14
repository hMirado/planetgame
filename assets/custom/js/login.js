$(document).ready(function () {
	/********************************************************************************************
     *                                           EVENEMENTS                                     *
     ********************************************************************************************/
    // Open modal
    $(document).on("click","#login",function(e){
        e.preventDefault();
        $("#modal-login").modal({backdrop: "static", keyboard: false});
        $("#modal-login").css("z-index", "1500");

        $("#login-content").show();
        $("#register-content").hide();

        $(".login-nempty").removeClass("input-error");
    });

    $(document).on("click","#show-register",function(e){
        e.preventDefault();
        $("#login-content").hide();
        $("#register-content").show();

        $(".input-nempty").removeClass("input-error");
        $(".confirmPass").removeClass("input-error");
    });

    $(document).on("click","#show-login",function(e){
        e.preventDefault();
        $("#login-content").show();
        $("#register-content").hide();

        $(".login-nempty").removeClass("input-error");
    });

    $(document).on("submit","#register-form",function(e){
        e.preventDefault();
        var pass = $("#password").val();
        var confirmPass = $("#confirmPass").val();

        $(".input-nempty").removeClass("input-error");
        $(".confirmPass").removeClass("input-error");

        var empty = false;
        $(".input-nempty").each(function () {
            var value = $(this).val();
            if (value === '') {
                $(this).addClass("input-error");
                empty = true;
            }
        });

        if (empty) {
            return;
        }
        if (pass !== confirmPass) {
            $("#password").addClass("input-error");
            $("#confirmPass").addClass("input-error");
            return;
        }
        register()
    });

    $(document).on("submit","#login-form",function(e){
        e.preventDefault();
        $(".login-nempty").removeClass("input-error");
        $("#login-error").empty();

        var empty = false;
        $(".login-nempty").each(function () {
            var value = $(this).val();
            if (value === '') {
                $(this).addClass("input-error");
                empty = true;
            }
        });

        if (empty) {
            return;
        }

        login();
    });

    /********************************************************************************************
     *                                           FONCTIONS                                      *
     ********************************************************************************************/
    function register() {
        $.ajax({
            url: base_url + "User/register",
            type: "POST",
            data: $("#register-form").serialize(),
            dataType: "JSON",
            success: function (response) {
                if (response)
                    location.reload();
            },
            error: function (err) {
                console.error(err);
            }
        });
    }

    function login() {
        $.ajax({
            url: base_url + "User/login",
            type: "POST",
            data: $("#login-form").serialize(),
            dataType: "JSON",
            success: function (response) {
                console.log(response.status);
                if (response.status) {
                    location.reload();
                } else {
                    $("#login-error").empty();
                    var html = "<span class='text-danger text-right stext-111 cl2 plh3 size-116 p-lr-28' id='passError'>" + response.msg + "</span>";
                    $("#login-error").append(html);
                }
            },
            error: function (err) {
                console.error(err);
            }
        });
    }
});