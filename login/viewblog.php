<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="../images/head.ico" type="image/x-icon">
	<title>User Blogs</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/grid.css">
    
    
    <link rel="stylesheet" href="../css/profile1.css">
    <link rel="stylesheet" href="../css/isotope.css"/>
    <link rel="stylesheet" href="../css/style.css">
	<script src="../js/blogForm.js"></script>
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

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="../images/quiz.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Blog Title
					</div>
					<div class="profile-usertitle-job">
						Yash
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
					<table cellspacing="10" cellpadding="10" style="margin-left:7.5%;margin-right:7.5%;font-size:15px">
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;"> Blog Title</td>
					    <td width="55%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right">Whatever</td>
				    </tr>
                    <tr>
   						<td>&nbsp;
        				
    					</td>
      					<td>&nbsp;
        				
    					</td>
					</tr>
					  <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;">Blog Short Description</td>
					    <td width="100%" style="font-family:'Times New Roman', Times, serif;font-weight:bold;text-align:right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
				    </tr>
                    <tr>
   						<td>&nbsp;
        				
    					</td>
      					<td>&nbsp;
        				
    					</td>
					</tr> 
                      <tr>
					    <td width="35%" style="font-family:'Comic Sans MS', cursive;text-align:start">Blog Description</td>
					    <td width="100%" style="text-align:right;font-family:'Times New Roman', Times, serif;font-weight:bold">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</td>
				    </tr>
					  
				  </table>
                    
                    
                    
                 
				<!-- END MENU -->
			</div>
		</div>
                <div class="modal-footer">
                	<button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" style="width:200%;margin-left:-50%">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModal-label" style="font-family:'Arial Black', Gadget, sans-serif;text-align:center">Complete Blog</h3>
                </div>
                <div class="modal-body">
                    <form id="blogcreate" class="form-horizontal" name="blogForm" method="post" action="addBlog.php" onsubmit="return validateBlogForm()" enctype="multipart/form-data" role="form">
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
     
                                <div class="form-group">
                                    <label for="email" class="col-md-2 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="title" placeholder="Title">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-2 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Short Description</label>
                                    <div class="col-md-10">
                                      <textarea rows="2" class="form-control" cols="32" name="shortdesc" placeholder="Enter short description for the blog here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-2 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Description</label>
                                    <div class="col-md-10">
                                        <textarea rows="8" class="form-control" cols="32" name="longdesc" placeholder="Enter your full blog here"></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="blogphoto" class="col-md-2 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Image</label>
                                    <div class="col-md-10">
                                        <input type="file" class="form-control" name="file" id="file">
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-6 col-md-6">
                                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                      <input type="submit" name="blogsubmit" value="Add Blog" class="col-md-offset-1 btn btn-success" />                    
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
                            <li><a href="loggedin.php">View Profile</a></li>
                            <li class="current">
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

<div class="container">
	<button class="btn btn-danger wow tada" style="margin-left:43%" data-toggle="modal" data-target="#myModal">Add New Blog</button>
</div>

 <section id="content">
        <div class="container">
            <div class="row wrap_11">
                <div class="grid_12">
                    <div class="wrap_10">
                        <div class="box_6 wow fadeInLeft">
                            <div class="put-left">
                                <div class="caption">
                                    <img src="../images/index-3_img01.jpg" alt="Image 1"/>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text_2 color_2">Tertomino verto</h3>
                                <p class="text_3">
                                    Horem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque cilisis, sit
                                    amet <br/>
                                    ultries wertolio dasererat rutrume. <br/>
                                    <br/>
                                    In mollis erat mattis neque cilisis, sit amet ultries wertolio dasererat rutrume.
                                </p>
                                <p class="pull-right" style="margin-top:1%"><span class="label label-default">2 days ago</span></p>
                                <p class="lead" style="margin-top:1%"><button class="btn btn-success" data-toggle="modal" data-target="#myModal1">Read More</button></p>
                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                       <div class="box_6 wow fadeInLeft">
                            <div class="put-left">
                                <div class="caption">
                                    <img src="../images/index-3_img01.jpg" alt="Image 1"/>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text_2 color_2">Tertomino verto</h3>
                                <p class="text_3">
                                    Horem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque cilisis, sit
                                    amet <br/>
                                    ultries wertolio dasererat rutrume. <br/>
                                    <br/>
                                    In mollis erat mattis neque cilisis, sit amet ultries wertolio dasererat rutrume.
                                </p>
                                <p class="pull-right" style="margin-top:1%"><span class="label label-default">2 days ago</span></p>
                                <p class="lead"><button class="btn btn-success" data-toggle="modal" data-target="#myModal1"  style="margin-top:1%">Read More</button></p>
                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                       <div class="box_6 wow fadeInLeft">
                            <div class="put-left">
                                <div class="caption">
                                    <img src="../images/index-3_img01.jpg" alt="Image 1"/>
                                </div>
                            </div>
                            <div class="caption">
                                <h3 class="text_2 color_2">Tertomino verto</h3>
                                <p class="text_3">
                                    Horem ipsum dolor sit amettetur ing elit. In mollis erat mattis neque cilisis, sit
                                    amet <br/>
                                    ultries wertolio dasererat rutrume. <br/>
                                    <br/>
                                    In mollis erat mattis neque cilisis, sit amet ultries wertolio dasererat rutrume.
                                </p>
                                <p class="pull-right" style="margin-top:1%"><span class="label label-default">2 days ago</span></p>
                                <p class="lead" style="margin-top:1%"><button class="btn btn-success" data-toggle="modal" data-target="#myModal1" >Read More</button></p>
                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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