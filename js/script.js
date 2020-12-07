$(document).ready(function() {
	$("#register").on("click", function(event) {
		event.preventDefault();
		$(".container2").empty();
		$(".container2").load("../html/register.php");

	})
	$("#home").on("click", function(event) {
		event.preventDefault();
		$(".container2").empty();
		$("body").load("index.php");

	})



	$("#cartt").on("click", function(event) {
			event.preventDefault();
			$(".container2").empty();
			$(".container2").load("../html/cart2.html");

		})


});
