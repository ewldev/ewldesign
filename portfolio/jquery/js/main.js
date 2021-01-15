//JQuery 105 assignment 2b  
//Careers - loading respective content 
//Based on class example day10-single-page-load-ajax

$(document).ready(function(){
    
    $(".left-col a").click(function(event){
		event.preventDefault(); // Prevents the default behaviour of the event i.e. clicking a link takes you to a new page.  We want to stay on the same page.
		
		const profile = $(this).attr("href");  // get the filename that the clicked button links to
		
		$("#opportunity").hide().load(`${profile}#new-page`).fadeIn("slow"); // chained together: hiding old page, loading new page plus a fadein effect 
        //$("#opportunity").load(`${profile}#new-page`); - without an effect
        //$("#opportunity").hide().load(`${profile}#new-page`).slideDown("slow"); - slideDown effect
    
    }); // close click
}); // close ready


//Contact Us - Form filling
//Setting all variables needed by the form-validation function
const nameInput = $("#name");
const emailInput = $("#email");
const clickSubscribe = $("#consent");

const nameError = $("#name-hint");
const emailError = $("#email-hint");
const clickError = $("#click-hint");

//The follow function controls how the form will react with different inputs
$(document).ready(function(){
	
    $("#contact-form").on("submit", function(){
	let errors = 0; //By placing that inside the function will prevent previous form filled conditions from being kept
    
    if(nameInput.val() == ""){
		errors = errors + 1; 
		nameInput.css("border","5px solid red");
		nameInput.css("box-shadow","0 0 20px purple");
		nameError.html("Please enter your name");
	}else{
		nameInput.css("border","2px solid green");
		nameInput.css("boxShadow","none");
		nameError.html("Thanks!");	
	}
		
	if(emailInput.val() == ""){
		errors = errors + 1; 
		emailInput.css("border","5px solid red");
		emailInput.css("box-shadow","0 0 20px purple");
		emailError.html("Please enter your email"); 
	}else{
		emailInput.css("border","2px solid green");
		emailInput.css("boxShadow","none");
		emailError.html("Thanks!");	
	}
		
	if(clickSubscribe.is(":checked") == false){
		//OR (clickSubscribe.prop("checked")==false)
		errors = errors + 1;
		clickError.html("Please check the box");
	}else{
		clickError.html("");
	}
	
	if(errors>0){
		return false; 
	}
	
}); // close submit

}); // close ready








