// javascript for index.html

// Based on class examples from day 4 events.html and timers.html
// Changing index page text caption
// I added id="title" on index.html line 37 and use this function to find the text and change it

function titleChange(){
	document.getElementById("title").innerHTML = "Life is short. Eat dessert first.";
}

// This will set the text caption to change after 3 secs
const titleChangeTimer = setTimeout(titleChange, 3000);

// Setting the variable clickButton to associate with clicking on the background image
const clickButton = document.getElementById("jumbo1");

// This function will replace default background image with donut.jpg when mouse pointer enters the image area
clickButton.addEventListener("mouseover", function(){
	clickButton.style.backgroundImage = "url(images/donuts.jpg)";
});

// This function removes the donut.jpg image when mouse pointer leaves the image area,
// the original background image from the CSS will be displayed again  
clickButton.addEventListener("mouseout", function(){
	clickButton.style.backgroundImage = "";
});
