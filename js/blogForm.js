// JavaScript Document
function validateblogForm() {
	 	input = document.getElementById('file');
        file = input.files[0];
		if((file.size/1024)>300){
        alert("Please upload an image with size less than 300 KB\n and ideally of height and width of 300 pixels each.");
		return false;
		}
    var x = document.forms["blogForm"]["title"].value;
    if (x == null || x == "") {
        alert("Please Enter Blog-Title");
        return false;
    }
	var u = document.forms["blogForm"]["shortdesc"].value;
    if (u == null || u == "") {
        alert("Please Enter Short Description field");
        return false;
    }
	var u = document.forms["blogForm"]["longdesc"].value;
    if (u == null || u == "") {
        alert("Please enter blog's Description");
        return false;
    }
    
	
}