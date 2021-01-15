// AOS.init(); 
AOS.init({
    delay: 200, // values from 0 to 3000, with step 50ms
    duration: 1200, // values from 0 to 3000, with step 50ms
    once: true, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    });

//sets current year
//$('#year').html(new Date().getFullYear());
var date = new Date();
document.getElementById("year").innerHTML = date.getFullYear();

//hide phone number
// var phoneNumber = "416-450-3387"
// document.getElementById("callme").innerHTML=`Phone: <a href="tel:${phoneNumber}">${phoneNumber}</a>`;

//hide email address
// var emailAddress = "ed@ewldesign.com";
// document.getElementById("sendmail").innerHTML=`Email: <a href="mailto:${emailAddress}">${emailAddress}</a>`;
