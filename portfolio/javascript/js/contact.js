//Javascript for contact.html
//Based on class example day5 form-validation 
//Setting all variables needed by the form-validation function
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const messageInput = document.getElementById("message");

const nameError = document.getElementById("name-hint");
const emailError = document.getElementById("email-hint");
const messageError = document.getElementById("message-hint");
console.log(nameInput);
console.log(nameError);
let errors = 0; // Setting number of errors to start counting with value of zero, but after experimenting it seems to work without it   

//The follow controls how the form will react with different inputs
document.getElementById("myform").onsubmit = function(){
	errors=0; //By placing it inside the function will prevent previous form filled conditions from being kept
	if(nameInput.value == ""){
		errors = errors + 1;  
		nameInput.style.border = "5px solid red";
		nameInput.style.boxShadow = "0 0 20px purple";
		nameError.innerHTML = "Please enter your name.";
	}else{
		nameInput.style.border = "2px solid green";
		nameInput.style.boxShadow = "none";
		nameError.innerHTML = "Thanks!";		
	}
	
	if(emailInput.value == ""){
		errors = errors + 1;  
		emailInput.style.border = "5px solid red";
		emailInput.style.boxShadow = "0 0 20px purple";
		emailError.innerHTML = "Please enter your email.";
	}else{
		emailInput.style.border = "2px solid green";
		emailInput.style.boxShadow = "none";
		emailError.innerHTML = "Thanks!";	
	}
	
	if(messageInput.value == ""){
		errors = errors + 1;
		messageInput.style.border = "5px solid red";
		messageInput.style.boxShadow = "0 0 20px purple";
		messageError.innerHTML = "Please enter your message.";
	}else{
		messageInput.style.border = "2px solid green";
		messageInput.style.boxShadow = "none";
        messageError.innerHTML = "Thanks!";
	} 
	
	if(errors>0){
		return false;  
	}
}

//Inserting email address back to html code 

//Email address are removed from line 60 of contact.html to prevent from being discovered by spammers

//Setting email address as a variable
var emailAddress = "vanillajsbakery@example.com";

//The goal is to recreate line 60 as:
//<p><a href="mailto:vanillajsbakery@example.com">vanillajsbakery@example.com</a></p>	
//So that the email address will show and is clickable

//The syntax is based on class examples from day1 javascript-basics.html and dom-manipulation.html
//Find the element based on id and then add the components
document.getElementById("sendmail").innerHTML=`<a href="mailto:${emailAddress}">${emailAddress}</a>`;









