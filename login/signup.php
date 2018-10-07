<?php

if(isset($_POST['submit']))
{
if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$auth=$_POST["auth"];
	if($auth!="chesyash@11138"){
			echo "
            <script type=\"text/javascript\">
            alert('Authorization password is incorrent \n Please try again.');
            </script>
        ";	
		echo "Error";
		header("Location: index.php");
		die();
	}
	include_once "connect.php";
	$sql = "SELECT uname FROM profile WHERE uname='$uname'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		echo "
            <script type=\"text/javascript\">
            alert('Username already taken...\nPlease enter a different username');
            </script>
        ";	
		header("Location: index.php");
		die();
	}
	$pword=$_POST['password'];
	$cnfpass=$_POST['cnfpass'];
	$email=$_POST['email'];
	$proj=$_POST['projects'];
	$inter=$_POST['interests'];
	$contact=$_POST['contact'];
	$name=$_POST['name'];
	$design=$_POST['design'];
	
	//echo $_FILES['file']['error'];
  $filename = $_FILES["file"]["name"];
  echo $filename;
   $image_dir= 'images/'.$filename;
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  $filetmp= $_FILES["file"]["tmp_name"];
  
  move_uploaded_file($filetmp, $image_dir);
  
	
if($pword==$cnfpass){
$pword=sha1($pword);

if(mysqli_query($conn,"INSERT INTO profile(uname,password,name,design,proj,interests,contact,email,imgpath) VALUES('$uname','$pword','$name','$design','$proj','$inter','$contact','$email','$image_dir')")){
	echo "
            <script type=\"text/javascript\">
            alert('Your account has succesfully been created\n');
            </script>
        ";	
	
}else{
echo "Unable to execute query on database";
}

mysqli_close($conn);



header("Location: index.php");
die();
	
}
}
}
?>

