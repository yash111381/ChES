// JavaScript Document
// JavaScript Document
function validateUpdateForm() {
	 	input = document.getElementById('file');
        file = input.files[0];
		if((file.size/1024)>100){
        alert("Please upload an image with size less than 100 KB\n and ideally of height and width of 300 pixels each.");
		return false;
		}
    var x = document.forms["updateForm"]["name"].value;
    if (x == null || x == "") {
        alert("Please Enter your name");
        return false;
    }
	var u = document.forms["updateForm"]["email"].value;
    if (u == null || u == "") {
        alert("Please Enter Email-ID");
        return false;
    }
	var u = document.forms["updateForm"]["contact"].value;
    if (u == null || u == "") {
        alert("Please enter your contact number");
        return false;
    }
	var u = document.forms["updateForm"]["projects"].value;
    if (u == null || u == "") {
        alert("Please enter your project details");
        return false;
    }
	var u = document.forms["updateForm"]["interests"].value;
    if (u == null || u == "") {
        alert("Please enter your interests");
        return false;
    }
	var u = document.forms["updateForm"]["design"].value;
    if (u == null || u == "") {
        alert("Please Enter your Designation");
        return false;
    }
	
    
	
}

function validateEventForm() {
	 	input = document.getElementById('file');
        file = input.files[0];
		if((file.size/1024)>300){
        alert("Please upload an image with size less than 300 KB\n and ideally of height and width of 300 pixels each.");
		return false;
		}
    var x = document.forms["eventForm"]["eventname"].value;
    if (x == null || x == "") {
        alert("Please Enter Event name");
        return false;
    }
	var u = document.forms["eventForm"]["prizes"].value;
    if (u == null || u == "") {
        alert("Please Enter Prize-details");
        return false;
    }
	var u = document.forms["eventForm"]["eventdesc"].value;
    if (u == null || u == "") {
        alert("Please enter event's Description");
        return false;
    }
	var u = document.forms["eventForm"]["venue"].value;
    if (u == null || u == "") {
        alert("Please enter event's Venue");
        return false;
    }
    
	
}