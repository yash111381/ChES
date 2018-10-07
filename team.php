<?php
include_once "login/connect.php";
$sql = "SELECT uname,name,design,imgpath,email,proj,interests,contact FROM profile";
$result = mysqli_query($conn, $sql);
$count=0;
$javaArray = array(array());

//header("Location: Website/login.php");
//echo "<h1>Hello</h1>";
//die();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Team ChES</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/head.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/hybrid.css">
     <link rel="stylesheet" href="css/cards.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/profile1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    
    

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
                 
                            <a href="index.html">
                                <img src="images/logo.gif" style="margin-bottom:3%;float:left;margin-left:-8%" width="15%" alt="Logo"/>
                            </a>
                           <h1 class="flipInY" style="text-align:left;font-weight:bold;color:#300;font-size:30px;margin-top:4%;height:inherit;font-family:'Marvel', sans-serif">Chemical Engineering Society</h1>
                  
                    </div>
                    <nav class="nav put-right" style="float:right;margin-right:-0.5%">
                        <ul class="sf-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>
                                <a href="events.php">Events</a>
                            </li>
                            <li class="current"><a href="team.php">Team</a></li>
                            <li><a href="blogs.php">Blogs</a></li>
                            <li><a href="aboutus.html">About Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--========================================================
                          CONTENT
=========================================================-->

	
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
              
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="images/person_2.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						example@gmail.com
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">See Blogs@<span class="modUname"></span></button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<table width="400" cellspacing="10" cellpadding="10" style="margin-left:7.5%;margin-right:7.5%;font-size:15px">
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;"> Contact No.</td>
					    <td width="50%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right"><span class="myContact">94275795555</span></td>
				    </tr>
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Projects:</td>
					    <td width="50%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right"><span class="myProjects">Automated fuel design , bfb, nfan</span></td>
				    </tr>
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Interests:</td>
					    <td width="50%" style="text-align:right;font-family:'Times New Roman', Times, serif;font-weight:bold"><span class="myInterests">Nkankfsd f ksnfnsd nsl</span></td>
				    </tr>
                    <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Designation:</td>
					    <td width="50%" style="text-align:right;font-family:'Times New Roman', Times, serif;font-weight:bold"><span class="myDesign">Nkankfsd f ksnfnsd nsl</span></td>
				    </tr>
				  </table>
                    
                    
                    
                 
				<!-- END MENU -->
			</div>
		</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




<div class="container">
     <div id="fh5co-page">

      <div class="fh5co-team-style-1">
         <div class="container">
            <div class="row p-b" style="margin-bottom:5%">
               <div class="col-md-6 col-md-offset-3 text-center">
                  <h2 class="fh5co-heading wow flip" style="font-weight:bold;color:#F00">Team 2015-16</h2>
      
               </div>
            </div>
            <div class="row" style="margin-top:-3%">
               
     <?php
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
   	while($row = mysqli_fetch_assoc($result)){ 
	$javaArray[$count][0]=$row['uname'];
	$javaArray[$count][1]=$row['name'];
	$javaArray[$count][2]=$row['design'];
	$javaArray[$count][3]=$row['proj'];
	$javaArray[$count][4]=$row['interests'];
	$javaArray[$count][5]=$row['contact'];
	$javaArray[$count][6]=$row['email'];
	$javaArray[$count][7]=$row['imgpath'];
	
   	$maruPhoto="login/".$row["imgpath"];
	$count++;
   	?>          
               
               
               <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInUp">
                  <a data-toggle="modal" data-target="#myModal" id="<?php echo $row['uname']; ?>" class="fh5co-person" style="background-image: url(<?php echo $maruPhoto ?>);">
                     <img src="<?php echo $maruPhoto ?>" alt="Image" class="img-responsive sr-only">
                     <div class="fh5co-overlay"></div>
                     <div class="fh5co-text">
                        <h3><?php echo $row["name"]; ?></h3>
                        <p><?php echo $row["design"]; ?></p>
                     </div>
                  </a>
               </div>
               <div class="clearfix visible-sm-block"></div>
               
               <?php    
	 
   				}
				} else {
  
				}
				mysqli_close($conn);?>

               
               
            </div>
         </div>
      </div></div>
        
    </div>
</div>

</div>




<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer" class="color_9 wow fadeInRight" style="background:#129894">
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

	
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.equalheights.js"></script>
<script src="js/script.js"></script>
	<script>
    new WOW().init();
    </script>
    <script>
	
        $('#myModal').on('show.bs.modal', function(e) {
            
            var $modal = $(this),
                esseyId = e.relatedTarget.id;
				
                    $modal.find('.modUname').html(esseyId);
					 var a = <?php echo json_encode( $javaArray ) ?>;
					 
					 var result;
					 var len;
						for( var i = 0, len = a.length; i < len; i++ ) {
    						if( a[i][0] == esseyId ) {
        					result=a[i];
        					break;
   							}
						}
					 
					 $modal.find('.profile-usertitle-name').html(result[1]);
					 $modal.find('.profile-usertitle-job').html(result[6]);
					 $modal.find('.myContact').html(result[5]);
					 $modal.find('.myProjects').html(result[3]);
					 $modal.find('.myInterests').html(result[4]);
					 $modal.find('.myDesign').html(result[2]);
					 $modal.find('.img-responsive').attr("src","login/"+result[7]);
					  
					 
					           
        });
    </script>
</body>
</html>