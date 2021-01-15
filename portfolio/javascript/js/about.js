//Javascript for about.html 
//To show current date under About Us

//Creat arrays for days and months
const days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

//Setting variables for each component of the date 
const currentDate = new Date();
const currentWeekday = currentDate.getDay();
const currentMonth = currentDate.getMonth();
const currentDay = currentDate.getDate(); 
const currentYear = currentDate.getFullYear();

//Added id="date" on line35 of about.html
//The following will find the old date based on the id and the <span>, and replace it with the current date.
//Based on class example day3 arrays and objects - date object
document.getElementById("date").innerHTML = days[currentWeekday] + ", " + months[currentMonth] + " " + currentDay + ", " + currentYear;


