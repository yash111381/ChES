<?php
include_once "login/connect.php";
$sql = "SELECT eventid,eventname,eventdate,venue,prize,eventimg,eventdesc FROM event ORDER BY eventdate DESC";
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
    <title>Events</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/head.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="css/profile1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/isotope.css"/>
    <link rel="stylesheet" href="css/style.css">
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
              
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="images/quiz.jpg"  class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						ChES Quiz
					</div>
					<div class="profile-usertitle-job">
						17th March, 2015
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<table cellspacing="10" cellpadding="10" style="margin-left:7.5%;margin-right:7.5%;font-size:15px">
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;"> Event Name </td>
					    <td width="50%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right"><span class="marueventName">94275795555</span></td>
				    </tr>
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Event Description</td>
					    <td width="50%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right"><span class="marueventDesc">Automated fuel design , bfb, nfan nbdsg sdnb m bsdnbf sbu sdbf j</span></td>
				    </tr>
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Event Venue:</td>
					    <td width="50%" style="text-align:right;font-family:'Times New Roman', Times, serif;font-weight:bold"><span class="marueventVenue">Nkankfsd f ksnfnsd nsl</span></td>
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
                                <img src="images/logo.gif" style="margin-bottom:3%;float:left;margin-left:-5.5%" width="15%" alt="Logo"/>
                            </a>
                            <h1 class="flipInY" style="text-align:left;font-weight:bold;color:#300;font-size:30px;margin-top:4%;height:inherit;font-family:'Marvel', sans-serif">Chemical Engineering Society</h1>
                   
                    </div>
                    <nav class="nav put-right" style="float:right;margin-right:-2%">
                        <ul class="sf-menu">
                            <li><a href="index.html">Home</a></li>
                            <li class="current">
                                <a href="events.php">Events</a>
                            </li>
                            <li><a href="team.php">Team</a></li>
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
<section id="content">
    <div class="container" style="margin-top:-3%">
        
    
    <div class="container">
    <div class="wrap_1">
                <div class="grid_8" style="margin-left:8.66%">
                    <div class="wrap_10">
                        
                       
    <?php
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
   	while($row = mysqli_fetch_assoc($result)){ 
	$javaArray[$count][0]=$row['eventid'];
	$javaArray[$count][1]=$row['eventdate'];
	$javaArray[$count][2]=$row['venue'];
	$javaArray[$count][3]=$row['eventname'];
	$javaArray[$count][4]=$row['prize'];
	$javaArray[$count][5]=$row['eventimg'];
	$javaArray[$count][6]=$row['eventdesc'];
   	$maruPhoto="login/".$row["eventimg"];
	$count++;
   	?>          
                
                        
                        
                        <div class="box_6 wow fadeInRight">
                            <div class="put-left">
                                <div class="caption">
                                    <img src="<?php echo $maruPhoto;?>" width="400" height="200" alt="Image 1"/>
                                    <p class="text_2 color_1">
                                        <?php echo $row['eventname']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text_2 color_2" style="text-indent:13%;color:#300"><?php echo $row['eventname']; ?></h3>
                                <p class="text_3">
                                    <ul style="float:left;text-align:center">
                   
                    <li  style="font-family:'Lucida Console', Monaco, monospace;">Prizes:</li>
                    <li style="font-family:'Lucida Console', Monaco, monospace;">Date:</li>
                    <li style="font-family:'Lucida Console', Monaco, monospace;">Venue:</li>
                    
                    </ul>
                    
                    <ul style="list-style-type:none;text-align:center">
                    
                    <li style="font-family:'Arial Black', Gadget, sans-serif;"><?php echo $row['prize']; ?></li>
                    <li style="font-family:'Arial Black', Gadget, sans-serif;"><?php echo $row['eventdate']; ?></li>
                    <li style="font-family:'Arial Black', Gadget, sans-serif;"><?php echo $row['venue']; ?></li>
                    
                    </ul>
                                </p>
                                <button class="btn_2" data-toggle="modal" id="<?php echo $row['eventid']; ?>" data-target="#myModal" style="margin-top:3%;margin-left:8%">Read More</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                         <?php    
	 
   				}
				} else {
  
				}
				mysqli_close($conn);?>

                        
                        
                        
                        
                        
                        
                    </div>
          </div>
    </div>
      <div class="container">
        <div class="row wrap_9 wrap_4 wrap_10">
            <div class="grid_12 wow fadeInDown">
                <div class="header_1 wrap_3 color_3">
                    Get in Touch
                </div>
                <div class="box_3">
                    <ul class="list_1">
                    <li><a class="fa fa-facebook" href="https://www.facebook.com/SVNITChemEngSoc/?ref=br_tf" target="_blank"></a>					                   	</li>
                </ul>
                </div>
            </div>
        </div>
    </div>      
</section>
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
    <script src="js/jquery.equalheights.js"></script>
    <script src='js/isotope.min.js'></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/script.js"></script>
<script>
    new WOW().init();
</script>
<script>
	
        $('#myModal').on('show.bs.modal', function(e) {
            
            var $modal = $(this),
                esseyId = e.relatedTarget.id;
				
					 var a = <?php echo json_encode( $javaArray ) ?>;
					 
					 var result;
					 var len;
						for( var i = 0, len = a.length; i < len; i++ ) {
    						if( a[i][0] == esseyId ) {
        					result=a[i];
        					break;
   							}
						}
					 
					 $modal.find('.profile-usertitle-name').html(result[3]);
					 $modal.find('.profile-usertitle-job').html(result[1]);
					 $modal.find('.marueventName').html(result[3]);
					 $modal.find('.marueventDesc').html(result[6]);
					 $modal.find('.marueventVenue').html(result[2]);
					 $modal.find('.img-responsive').attr("src","login/"+result[5]);
					  
					 
					           
        });
    </script>
</body>
</html>