"use strict";

jQuery(document).ready(function ($) {

    keyPressed();

    $("#email").keypress(keyPressed);
    $("#email").keyup(keyPressed);

    function keyPressed() {
        $("#to").html($("#email").val());
    }
    
    $("#my-form").submit(function (e) {
        e.preventDefault();

        if ($("#email").val() == "" || $("#text").val() == "") {
            $(".err").css("display", "block");
        } else {
            $(".err").css("display", "none");
            $("#my-form").unbind('submit').submit();
        }

    });

});