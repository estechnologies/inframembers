<?php
	session_start();
	
	if(isset($_SESSION['user']['number'])){
		header("Location:Home.php");
	}
?>
<html>
<head>
<title>Infra Members</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
 	<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	   <img class="logo" src="images/logo.png"></img>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
  <ul class="nav navbar-nav navbar-right">
   <li style="margin-right:20px;margin-top:10px;"><a href="index.php" class="navbar-btn btn-default btn pull-right"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		 <li style="margin-right:20px;margin-top:10px;"><a href="Login.php" class="navbar-btn btn-default btn pull-right"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li style="margin-right:10px;margin-top:10px;"><a  href="Register.php" class="navbar-btn btn-default btn pull-right"><span class="glyphicon glyphicon-user"></span> Register</a></li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top:150px;margin-bottom:100px;">
<div class="col-md-3">
</div>


<div class="col-md-6 ">
    <div class="panel panel-default">
  <center>  <div style="background-color: #EAE9E9;" class="panel-heading"><h3 class="panel-title"><strong>Login</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
  	
  	<!-- messages -->
  	
  		
  	<center><p style="color: red;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }?></p></center>
  		<center><p style="color: green;"><?php if(isset($_GET['msg1'])){ echo $_GET['msg1']; }?></p></center>
  		
  	<!-- end messages-->
  	
   <form id="Login-form" action="loginBack.php" method="post" role="form" >
 <center></center>
		 <center></center>
		 <label for="Login">Login as*</label>
                            <div style="margin-bottom: 12px" class="input-group">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <select  required="required"  name="Login" id="Loginas" onchange="selectrow1()"  class="form-control">
								<option value="" disabled selected hidden>Select Login type</option>
								<option value="Sub-Contractor">Sub-Contractor</option>
								<option value="Supplier">Supplier</option>
								<option value="EPC Company">EPC Company</option>
							</select>
                                    </div>
	
		<label for="Mobilenumber">Mobile Number*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
             <input type="text" name="number" id="number" tabindex="1" oninvalid="InvalidMsg(this);" maxlength="10" oninput="InvalidMsg(this);" required="required" class="form-control" pattern="[0-9]{10}" placeholder="Enter mobile number" value="">                                       
  </div>

 <label for="password">Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="password" minlength="6" maxlength="20" name="password1" id="password" required="required" onpaste="return false;" tabindex="2" class="form-control"  oninvalid="InvalidMsglength(this);"  oninput="InvalidMsglength(this);" placeholder="Enter password">

  </div>
 <center><button style="margin-bottom: 12px;width:115px;" type="submit" class="btn btn-default">Login</button></center>
 </div>
</form>
  </div>
</div>
</div>
  

<footer style="margin-bottom:0px" class="navbar navbar-fixed-bottom footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Infra Members</a></p></center>
		</div>
   </footer>
</body>
</html>