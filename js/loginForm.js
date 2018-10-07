// JavaScript Document
function validateLoginForm() {
    var x = document.forms["loginForm"]["username"].value;
    if (x == null || x == "") {
        alert("Please Enter Username");
        return false;
    }
	var y = document.forms["loginForm"]["password"].value;
    if (y == null || y == "") {
        alert("Please Enter Password");
        return false;
    }
}