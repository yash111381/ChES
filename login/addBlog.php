<?php
include_once "session.php";
if(isset($_POST['blogsubmit']))
{
if(isset($_POST['title'])){
	include_once "connect.php";
	$btitle=$_POST['title'];
	$bdate=date('Y-m-d H:i:s');
	$bshort=$_POST['shortdesc'];
	$blong=$_POST['longdesc'];
	$row=$_SESSION['row'];
	$uname=$row['uname'];
	$name=$row['name'];	
	echo $name;
	echo $uname;
	//echo $_FILES['file']['error'];
  $filename = $_FILES["file"]["name"];
  echo $filename;
   $image_dir= 'images/'.$filename;
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  $filetmp= $_FILES["file"]["tmp_name"];
  
  move_uploaded_file($filetmp, $image_dir);
	

if(mysqli_query($conn,"INSERT INTO blog(uname,title,shortdesc,longdesc,name,blogimg) VALUES('$uname','$btitle','$bshort','$blong','$name','$image_dir')")){
	echo "
            <script type=\"text/javascript\">
            alert('Your account has succesfully been created\n');
            </script>
        ";	
	
}else{
echo "Unable to execute query on database";
}

mysqli_close($conn);



header("Location: loggedin.php");
die();
	

}
}
?>

