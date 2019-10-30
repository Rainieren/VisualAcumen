$(document).ready(function() {

    $('#slide-next').on('click', function() {
        $('.register-form-user').toggle("slide", { direction: "left" }, 250);
        $('.register-form-company').toggle("slide", { direction: "right" }, 250);
    });

    $('#slide-prev').on('click', function () {
        $('.register-form-user').toggle("slide", { direction: "left" }, 250);
        $('.register-form-company').toggle("slide", { direction: "right" }, 250);
    })


});

