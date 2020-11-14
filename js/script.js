https: //maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js
    https: //cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js
    $(document).ready(function() {
        $("#register").on("click", function(event) {
            event.preventDefault();
            $(".container2").empty();
            $(".container2").load("register.html");

        })
        $("#home").on("click", function(event) {
            event.preventDefault();
            $(".container2").empty();
            $("body").load("index.html");

        })
    });