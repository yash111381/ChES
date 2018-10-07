<?php
include_once "session.php";
if(isset($_POST['submit']))
{
if(isset($_POST['username']) and isset($_POST['password'])){
	$uname=$_POST["username"];
	$pword=$_POST['password'];
	$pword=sha1($pword);
	echo $uname."\n";
	echo $pword."\n";
	
include_once "connect.php";

$sql = "SELECT uname, email, name, design, proj, interests, contact, imgpath FROM profile WHERE uname='$uname' AND password='$pword'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
	$maruUsername=$row["uname"];
	$maruEmail=$row["email"];
	$maruDesign=$row["design"];
	$maruName=$row["name"];
	$maruProjects=$row["proj"];
	$maruInterests=$row["interests"];
	$maruContact=$row["contact"];
	$maruPhoto=$row["imgpath"];
    echo $maruContact;
	echo $maruUsername;
	echo $maruName;
	echo $maruDesign;
	echo $maruEmail;
	echo $maruProjects;
	
    
} else {
    echo "0 results";
	mysqli_close($conn);
	header("Location: index.php");
	die();
}





mysqli_close($conn);

}
}
?>