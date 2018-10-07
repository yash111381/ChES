<?php
$start=0;
$limit=5;
if(isset($_GET['number']))
{
	$number=$_GET['number'];
	$start=($number-1)*$limit;
}
else{
$number=1;
}


include_once "login/connect.php";


$totalrows=mysqli_query($conn,"select count(*) FROM blog");
$totalrows=mysqli_num_rows($totalrows);
$total=ceil($totalrows/$limit);

$sql = "SELECT uname,id,title,shortdesc,longdesc,blogimg,blogdate,name FROM blog ORDER BY blogdate DESC";
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
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/head.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile1.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.equalheights.js"></script>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="images/quiz.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<span class="blogTitle">Blog Title</span>
					</div>
					<div class="profile-usertitle-job">
						<span class="blogUsername">Yash</span>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
                
                <div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm"><span class="blogName"></span></button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<table  cellspacing="10" cellpadding="10" style="margin-left:7.5%;margin-right:7.5%;font-size:15px">
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Blog Short Description</td>
					    <td width="100%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right"><span class="blogShortdesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></td>
				    </tr>
                    <tr>
   						<td>&nbsp;
        				
    					</td>
      					<td>&nbsp;
        				
    					</td>
					</tr> 
                      <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;text-align:start">Blog Description</td>
					    <td width="100%" style="text-align:right;font-family:'Times New Roman', Times, serif;font-weight:bold"><span class="blogLongdesc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</span></td>
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
                                <img src="images/logo.gif" style="margin-bottom:3%;float:left;margin-left:-8%" width="15%" alt="Logo"/>
                            </a>
                           <h1 class="flipInY"  style="text-align:left;font-weight:bold;color:#300;font-size:30px;margin-top:4%;height:inherit;font-family:'Marvel', sans-serif">Chemical Engineering Society</h1>
                  
                    </div>
                    <nav class="nav put-right" style="float:right;margin-right:-.5%">
                        <ul class="sf-menu">
                            <li><a href="index.html">Home</a></li>
                            <li>
                                <a href="events.php">Events</a>
                            </li>
                            <li><a href="team.php">Team</a></li>
                            <li class="current"><a href="blogs.php">Blogs</a></li>
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
           <div class="container" style="margin-top:1%;margin-left:15%">
                        
                        
                                            
    <?php
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
   	while($row = mysqli_fetch_assoc($result)){ 
	$javaArray[$count][0]=$row['id'];
	$javaArray[$count][1]=$row['uname'];
	$javaArray[$count][2]=$row['title'];
	$javaArray[$count][3]=$row['longdesc'];
	$javaArray[$count][4]=$row['blogimg'];
	$javaArray[$count][5]=$row['name'];
	$javaArray[$count][6]=$row['shortdesc'];
	
	//$javaArray[$count][6]=$row['eventdesc'];
   	$maruPhoto="login/".$row["blogimg"];
	$count++;
   	?>           
                        
    <div class="row">
    
    <div class="col-md-12" > 
      
      <div class="panel">
        <div class="panel-body">
        
          <!--/stories-->
		  <div class="row wow fadeInRight">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <a class="story-img"><img src="<?php echo $maruPhoto; ?>" style="width:130px;height:130px;margin-top:15%" class="blogImg"></a>
            </div>
            <div class="col-md-10 col-sm-9">
              <h3 style="font-family:'Arial Black', Gadget, sans-serif;margin-left:23%;color:#550055"><?php echo $row['title']; ?></h3>
              <div class="row">
                <div class="col-xs-9">
                  <p style="font-size:18px;text-indent:100px;margin-top:1%;color:#2A3F00"><?php echo $row['shortdesc']; ?></p>
                  <p class="pull-right"><span class="label label-default"> <?php 
                                $end_date=new DateTime();
								$date = date_create_from_format('Y-m-d H:i:s', $row['blogdate']);
								$diff=date_diff($end_date,$date);
								echo $diff->format("%a days ");
								?>ago</span></p>
                  <p class="lead"><button class="btn btn-default"  data-toggle="modal"  id="<?php echo $row['id']; ?>" data-target="#myModal" >Read More</button></p>
                  </div>
                <div class="col-xs-3"></div>
              </div>
              
            </div>
          </div>
            </div>     
                       
                           <?php    
	 
   				}
				} else {
  
				}
				mysqli_close($conn);?>

                  </div>
                     
                 <div class="container">
                 <div class="col-md-3 col-md-offset-3">
                 	<a href="blogs.php?number=<?php echo --$number; ?>"  class="btn btn-success">Previous</a>
                 </div>
                 <div class="col-md-3">
                 	<a href="blogs.php?number=<?php echo ++$number; ?>"  class="btn btn-success">Next</a>
                 </div>
                 </div>    
                     
              
        <div class="container" style="margin-left:-15%">
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
<script src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>

	
	<!-- WOW -->
	<script src="js/wow.min.js"></script>
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
					 
					 $modal.find('.blogTitle').html(result[2]);
					 $modal.find('.blogUsername').html(result[1]);
					 $modal.find('.blogName').html(result[5]);
					 $modal.find('.blogShortdesc').html(result[6]);
					 $modal.find('.blogLongdesc').html(result[3]);
					 $modal.find('.img-responsive').attr("src","login/"+result[4]);
					  
					 
					           
        });
    </script>
</body>
</html>