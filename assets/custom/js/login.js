$(document).ready(function () {
	/********************************************************************************************
     *                                           EVENEMENTS                                     *
     ********************************************************************************************/

    // Open modal
    $(document).on("click","#login",function(e){
        e.preventDefault();
        $("#modal-login").modal({backdrop: "static", keyboard: false});
        $("#modal-login").css("z-index", "1500");
    });
})