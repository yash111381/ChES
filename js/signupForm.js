// JavaScript Document
function validateForm() {
	 	input = document.getElementById('file');
        file = input.files[0];
		if((file.size/1024)>50){
        alert("Please upload an image with size less than 50 KB\n and ideally of height and width of 300 pixels each.");
		return false;
		}
    var x = document.forms["signupForm"]["name"].value;
    if (x == null || x == "") {
        alert("Please Enter your name");
        return false;
    }
	var y = document.forms["signupForm"]["password"].value;
    if (y == null || y == "") {
        alert("Please Enter Password");
        return false;
    }
	var z = document.forms["signupForm"]["cnfpass"].value;
    if (z == null || z == "") {
        alert("Please Enter Password");
        return false;
    }
	var u = document.forms["signupForm"]["email"].value;
    if (u == null || u == "") {
        alert("Please Enter Email-ID");
        return false;
    }
	var u = document.forms["signupForm"]["contact"].value;
    if (u == null || u == "") {
        alert("Please enter your contact number");
        return false;
    }
	var u = document.forms["signupForm"]["projects"].value;
    if (u == null || u == "") {
        alert("Please enter your project details");
        return false;
    }
	var u = document.forms["signupForm"]["interests"].value;
    if (u == null || u == "") {
        alert("Please enter your interests");
        return false;
    }
	var u = document.forms["signupForm"]["auth"].value;
    if (u == null || u == "") {
        alert("Please Enter Authorization Password");
        return false;
    }
	var u = document.forms["signupForm"]["design"].value;
    if (u == null || u == "") {
        alert("Please Enter your Designation");
        return false;
    }
	var u = document.forms["signupForm"]["username"].value;
    if (u == null || u == "") {
        alert("Please Enter a username");
        return false;
    }
	
    
	
}