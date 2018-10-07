<?php
include_once "session.php";
if(isset($_POST['submit']))
{
if(isset($_POST['username']) and isset($_POST['password'])){
	$uname=$_POST["username"];
	$pword=$_POST['password'];
	$pword=sha1($pword);
	
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
	$_SESSION['row'] = $row;
    
} else {
    echo "0 results";
	mysqli_close($conn);
	header("Location: index.php");
	die();
}

mysqli_close($conn);

}
	
}
else if(isset($_SESSION['row']) && (time() - $_SESSION['LAST_ACTIVITY'] < 1800)){
	$row = $_SESSION['row'];
	$maruUsername=$row["uname"];
	$maruEmail=$row["email"];
	$maruDesign=$row["design"];
	$maruName=$row["name"];
	$maruProjects=$row["proj"];
	$maruInterests=$row["interests"];
	$maruContact=$row["contact"];
	$maruPhoto=$row["imgpath"];
}
else{
	header("Location: index.php");
	die();	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="../images/head.ico" type="image/x-icon">
	<title>LoggedIn User</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/grid.css">
    <script src="../js/updateForm.js"></script>
    
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/isotope.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"
                 height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
</head>

<body>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModal-label" style="font-family:'Arial Black', Gadget, sans-serif;text-align:center">Update Profile</h3>
                </div>
                <div class="modal-body">
                    <form id="updateform" class="form-horizontal" name="updateForm" method="post" action="update.php" onsubmit="return validateUpdateForm()" enctype="multipart/form-data" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
     
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Designation</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="design" placeholder="Designation">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Email-Id</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Email-Id">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Contact</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="contact" placeholder="Contact No.">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Projects</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="projects" placeholder="Projects">
                                    </div>
                                </div>

								<div class="form-group">
                                    <label for="icode" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Interests</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="interests" placeholder="Interests">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="photo" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Profile Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="file" id="file">
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-6 col-md-6">
                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                      <input type="submit"  name="update" value="Update" class="col-md-offset-1 btn btn-success" />  
                                       
                                    </div>
                                </div>
                            </form>
                            
                </div>
                
            </div>
        </div>
    </div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModal-label" style="font-family:'Arial Black', Gadget, sans-serif;text-align:center">Add Event</h3>
                </div>
                <div class="modal-body">
                    <form id="addevent" class="form-horizontal" name="eventForm" method="post" action="addEvent.php" onsubmit="return validateEventForm()" enctype="multipart/form-data" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
     
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Event Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="eventname" placeholder="Event Name">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Event Venue</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="venue" placeholder="Event Venue">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Date</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" name="eventdate" placeholder="Date">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Prizes</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="prizes" placeholder="Prizes">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Description</label>
                                    <div class="col-md-9">
                                       <textarea rows="5" cols="32" name="eventdesc"></textarea>
                                    </div>
                                </div>
                                    
                                   <div class="form-group">
                                    <label for="photo" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Event Poster</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="file" id="file">
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-6 col-md-6">
                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                      <input type="submit"  name="eventsubmit" value="Add" class="col-md-offset-1 btn btn-success" />  
                                       
                                    </div>
                                </div>
                            </form>
                            
                </div>
                
            </div>
        </div>
    </div>






<div class="page">
<!--========================================================
                          HEADER
=========================================================-->
<header id="header">
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="brand put-left">
                 
                            
                                <img src="../images/logo.gif" style="margin-bottom:3%;float:left" width="15%" alt="Logo"/>
                            
                            <h1 class="flipInY" style="text-align:left;font-weight:bold;color:#300;font-size:30px;margin-top:4%;height:inherit;font-family:'Marvel', sans-serif">Chemical Engineering Society</h1>
                   
                    </div>
                    <nav class="nav put-right" style="float:right">
                        <ul class="sf-menu">
                            <li class="current"><a href="loggedin.php">View Profile</a></li>
                            <li>
                                <a href="viewblog.php">View Blogs</a>
                            </li>
                            <li>&nbsp;</li>
                            <li><a href="logout.php"  style="font-weight:bolder;color:#FF0" class="btn btn-danger">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="profile-sidebar wow fadeInRight" style="background-image:url(../images/wall1.jpg)">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="<?php echo $maruPhoto; ?>" class="img-responsive" alt="">
				</div>
			<div class="profile-usertitle">
					<div class="profile-usertitle-name" style="font-family:'Arial Black', Gadget, sans-serif">
						<?php echo $maruUsername; ?>
					</div>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<table width="400" cellspacing="10" cellpadding="10" style="margin-left:7.5%;margin-right:7.5%;font-size:15px">
                    
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;color:#333"> Name</td>
					    <td width="50%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right;color:#000"><?php echo $maruName; ?></td>
				    </tr>
                    
                    <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;color:#333">Designation</td>
					    <td width="50%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right;color:#000"><?php echo $maruDesign; ?></td>
				    </tr>
                    
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Interests</td>
					    <td width="50%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right"><?php echo $maruInterests; ?></td>
				    </tr>
                    
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Email-Id</td>
					    <td width="50%" style="text-align:right;font-family:'Times New Roman', Times, serif;font-weight:bold"><?php echo $maruEmail; ?></td>
				    </tr>
                    
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Contact:</td>
					    <td width="50%" style="text-align:right;font-family:'Times New Roman', Times, serif;font-weight:bold"><?php echo $maruContact; ?></td>
				    </tr>
                    
                    
                     <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Projects:</td>
					    <td width="50%" style="text-align:right;font-family:'Times New Roman', Times, serif;font-weight:bold"><?php echo $maruProjects; ?></td>
				    </tr>
                  <tr>
   						<td>&nbsp;
        				
    					</td>
      					<td>&nbsp;
        				
    					</td>
					</tr>
                   
                     <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Edit Profile</button></td>
					    <td width="50%" style="font-family:'Times New Roman', Times, serif;font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1">Add Event</button></td>
				    </tr>
                    
				  </table>
                  
				<!-- END MENU -->
			</div>
    


</div>


<footer id="footer" class="color_9 wow fadeInRight" style="background:#129894;margin-top:3%">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <p class="info text_4 color_4">
                    © ChES <span id="copyright-year"></span> <br>
                    Website designed by <a href="https://www.linkedin.com/in/yash-parikh-342792103?authType=NAME_SEARCH&authToken=bNEe&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CentityType%3AentityHistoryName%2CclickedEntityId%3Amynetwork_mynetwork_440872034%2Cidx%3A0" target="_blank" rel="nofollow">Yash Parikh</a>
                </p>
            </div>
        </div>
    </div>
</footer>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-1.2.1.js"></script>
    <script src="../js/jquery.equalheights.js"></script>
    <script src='../js/isotope.min.js'></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/script.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>