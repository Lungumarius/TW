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
        $('.dropdown-submenu a.test').on("click", function(e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
        function myFunction() {
            var x = document.getElementById("displayPar");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function BlockPar() {
            var x = document.getElementById("displayPar");
            x.style.display = "none";
        }
        $("#ingrijire_par").on("click", function(event) {
            event.preventDefault();
            $(".container2").empty();
            $(".container2").load("../html/ingrijire_par.html");

        })
    });
