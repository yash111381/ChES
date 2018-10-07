<?php
include_once "session.php";
	
if(isset($_POST['update']))
{
include_once "connect.php";
	$row = $_SESSION['row'];
	$maruUsername=$row["uname"];
	$maruPhoto=$row['imgpath'];
	unlink($maruPhoto);
	$email=$_POST['email'];
	$proj=$_POST['projects'];
	$inter=$_POST['interests'];
	$contact=$_POST['contact'];
	$name=$_POST['name'];
	$design=$_POST['design'];
	$filename = $_FILES["file"]["name"];
  	echo $filename;
   $image_dir= 'images/'.$filename;
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  $filetmp= $_FILES["file"]["tmp_name"];
  
  move_uploaded_file($filetmp, $image_dir);
  	
$sql1 = "UPDATE profile SET email='$email',name='$name',design='$design',proj='$proj',interests='$inter',contact='$contact',imgpath='$image_dir' WHERE uname='$maruUsername'";
if (mysqli_query($conn, $sql1)) {
   // echo "New record created successfully";

   $row['uname']=$maruUsername;
   $row['email']=$email;
   $row['name']=$name;
   $row['design']=$design;
   $row['proj']=$proj;
   $row['interests']=$inter;
   $row['contact']=$contact;
   $row['imgpath']= $image_dir;
   unset($_SESSION['row']);
   $_SESSION['row']=$row;
   
} else {
    echo "<h1>Error: " . $sql1 . "<br>" . mysqli_error($conn)."</h1>";
}


mysqli_close($conn);
header("Location: loggedin.php");
die();
}
?>