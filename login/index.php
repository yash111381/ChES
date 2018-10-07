<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="../images/head.ico" type="image/x-icon">
	<title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <script src="../js/signupForm.js"></script>
    <script src="../js/loginForm.js"></script>
</head>

<body style="background-image:url(../images/wall.jpg)">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal-label" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModal-label" style="font-family:'Arial Black', Gadget, sans-serif;text-align:center">Sign-Up Form</h3>
                </div>
                <div class="modal-body">
                    <form id="signupform" class="form-horizontal" name="signupForm" role="form" method="post" action="signup.php" onsubmit="return validateForm()" enctype="multipart/form-data">
                                
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
                                    <label for="design" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Designation</label>
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
                                    <label for="icode" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Confirm Password</label>
                                    <div class="col-md-9" style="height:50px">
                                        <input type="password" class="form-control" name="cnfpass" placeholder="Confirm Password">
                                    </div>
                                </div>
								<div class="form-group">
                                    <label for="icode" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Authorization Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="auth" placeholder="Authorization Password">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="photo" class="col-md-3 control-label" style="font-family:'Comic Sans MS', cursive;font-size:15px">Profile Image</label>
                                    <div class="col-md-9">
                                        <input type="file" id="file" class="form-control" name="file">
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-6 col-md-6">
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                      <input type="submit"  name="submit" value="Sign Up" class="col-md-offset-1 btn btn-success" />  
                                       
                                    </div>
                                </div>
                            </form>
                            
                </div>
                
            </div>
        </div>
    </div>

<div class="form wow fadeInUp" style="background:#666;  margin-top:5%">
  <a href="../index.html"><div class="thumbnail"><img src="../images/logo.gif"/></div></a>
  <form class="login-form" name="loginForm" method="post" action="loggedin.php" onsubmit="return validateLoginForm()">
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="Password"/>
    <input style="background:#C00;color:#FFF" name="submit" type="submit" value="Login" />
    <p class="message"  data-toggle="modal" data-target="#myModal">Not registered? <a href="#">Create an account</a></p>
  </form>
</div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script>
		new WOW().init();
</script>
</body>
</html>