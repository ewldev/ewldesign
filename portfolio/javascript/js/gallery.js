// Javascript for gallery.html
// Adding functionality to have the big picture changed to match thumbnail
// plus changing the caption text when hovering on each thumbnail.
// Based on class example from day9 practice-build, assistance from Jaya and my own creativity

// We will first need to create an array to pick and choose the right component.
// Chaining methods together allows items to be selected more precisely.
const thumbList = document.getElementById("image-list").getElementsByTagName("li");

// We then set up a loop to go through the array and figure out which item is being hovered on
// The info is then passed to a function to make the actual image change.
for(let i=0; i<thumbList.length; i++){
	thumbList[i].onmouseover = loadBigImage; 
}

function loadBigImage(){
	// This array is created at the zero position, adding [0] will get the actual item and all it's attributes, in this case the <img>
	const selectedImage = this.getElementsByTagName("img")[0];
	
	//I added alt descriptions for each image item under id=image-list
	//The alt info will be inserted in the image file name so the right big image will be loaded 
	const bigImage = document.getElementById("big-image");
	bigImage.alt = selectedImage.alt;
	bigImage.src = "images/" + bigImage.alt + "_large.jpg";
	
	//Assigning new text caption title
	//I added titles for each img item under id=image-list, line 37 of gallery.html
	
	//The title info will then be applied to line 56 big-image title and to line 56 art-title h2 of gallery.html
	bigImage.title = selectedImage.title;
	const artTitle = document.getElementById("art-title");
	artTitle.innerHTML = selectedImage.title;

}	
