$(document).ready((function() {

    $("#scroll").click(function() {
        $("body").animate({scrollTop: $("#form-wrap").offset().top});
    });

}));