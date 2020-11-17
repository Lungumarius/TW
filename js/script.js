    $(document).ready(function() {
        $("#register").on("click", function(event) {
            event.preventDefault();
            $(".container2").empty();
            $(".container2").load("../html/register.html");

        })
        $("#home").on("click", function(event) {
            event.preventDefault();
            $(".container2").empty();
            $("body").load("index.html");

        })
    });