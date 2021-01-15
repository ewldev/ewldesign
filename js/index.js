//add class to initiate fade out animation
$(document).ready(function() {
    $("body").addClass("animate");
});

//sets current year
//$('#year').html(new Date().getFullYear());
var date = new Date();
document.getElementById("year").innerHTML = date.getFullYear();

