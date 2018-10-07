<?php
include_once "session.php";
if(isset($_POST['eventsubmit']))
{
if(isset($_POST['eventname'])){
	include_once "connect.php";
	$ename=$_POST['eventname'];
	$edate=date('Y-m-d', strtotime($_POST['eventdate']));
	echo $edate;
	$edesc=$_POST['eventdesc'];
	$eprizes=$_POST['prizes'];
	$evenue=$_POST['venue'];
	
	//echo $_FILES['file']['error'];
  $filename = $_FILES["file"]["name"];
  echo $filename;
   $image_dir= 'images/'.$filename;
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  $filetmp= $_FILES["file"]["tmp_name"];
  
  move_uploaded_file($filetmp, $image_dir);
  
	

if(mysqli_query($conn,"INSERT INTO event(eventname,eventdate,venue,prize,eventdesc,eventimg) VALUES('$ename','$edate','$evenue','$eprizes','$edesc','$image_dir')")){
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

