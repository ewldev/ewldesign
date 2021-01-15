//sets current year
//$('#year').html(new Date().getFullYear());
var date = new Date();
document.getElementById("year").innerHTML = date.getFullYear();

//hide phone number
var phoneNumber = "416-123-4567"
document.getElementById("callme").innerHTML=`Phone: <a href="tel:${phoneNumber}">${phoneNumber}</a>`;

//hide email address
var emailAddress = "hi@test.com";
document.getElementById("sendmail").innerHTML=`Email: <a href="mailto:${emailAddress}">${emailAddress}</a>`;
