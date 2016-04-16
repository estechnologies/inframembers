<?php
	session_start();
			
	if(!isset($_SESSION['user']['number'])){
		header("Location:index.php");
	}
?>
<html>
<head>
<title>Reset Password Infra Members</title>
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
   <li style="margin-top:10px;"><a href="Home.php" class="navbar-btn btn-default btn pull-right"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li style="margin-right:20px;margin-top:12px;" class="navbar-btn  btn pull-right dropdown headerlinks">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span  class="glyphicon glyphicon-user"></span> My Account<span class="caret"></span></a>
      <ul class="dropdown-menu">
        
        <li class="headerlinks_drops"><a  href="ResetPassword.php" >Reset Password</a></li>
        <li class="headerlinks_drops"><a  href="MyProfile.php" >My Profile</a></li>
           <li class="headerlinks_drops"><a  href="Logout.php" >Logout</a></li>                         
      </ul>
    </li>
		
      </ul>
    </div>
  </div>
</nav>
<nav style="margin-top:95px;"  class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="my">
      <ul class="nav nav-pills nav-justified">

	 <li class="dropdown headerlinks">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Works for Sub-contract<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a  href="WorksSubContractView.php" >View Works for Sub-contract</a></li>
        <li class="headerlinks_drops"><a  href="WorksSubContractPost.php" >Post Works for Sub-contract</a></li>                       
      </ul>
    </li>
 <li class="headerlinks"  ><a style=""  href="SubContractors.php" >Sub-Contractors</a></li>
    <li class="headerlinks" ><a style=""  href="MachinerySuppliers.php" >Machinery Suppliers</a></li>
    <li class="headerlinks" ><a style=""  href="MaterialSupplier.php" >Material Supplier</a></li>
    <li class="headerlinks" ><a style=""  href="ManpowerSupplier.php">Manpower Supplier</a></li>
	<li class="headerlinks" ><a style=""  href="OurClients.php">Our Clients</a></li>
	<li class="headerlinks" ><a style=""  href="UserContactus.php">Contact Us</a></li>
  </ul>
    </div>
  </div>
</nav>
<div class="main" id="mainborder" style="margin-bottom:65px;">
 <div class="container" >
		 	<div class="col-md-3 ">
		 	</div>
	<div class="col-md-6 ">
       <div class="panel panel-default">
  <center>  <div style="background-color: #eee;color:black;" class="panel-heading"><h3 class="panel-title"><strong> Reset Password</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
  	<!-- messages -->
  	
  		
  	<center><p style="color: red;"><?php if(isset($_GET['msg'])){ echo $_GET['msg']; }?></p></center>
  		<center><p style="color: green;"><?php if(isset($_GET['msg1'])){ echo $_GET['msg1']; }?></p></center>
  		
  	<!-- end messages-->
  	
  <center></center>
		 <center></center>	
   <form id="Employee-form" action="resetPasswordBack.php" method="POST" role="form" >
   		                            
  <label for="Mobilenumber">Mobile Number*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
             <input type="text" name="number" id="number" readonly value="<?php echo $_SESSION['user']['number']; ?>" tabindex="1" oninvalid="InvalidMsg(this);" maxlength="10" oninput="InvalidMsg(this);" required="required" class="form-control" pattern="[0-9]{10}" placeholder="Enter mobile number" value="">                                       
  </div>
														<label for="password">Current Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="password" minlength="6" maxlength="20" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); " name="oldPassword" id="password" tabindex="2" class="form-control" onpaste="return false;"  placeholder="Enter current password">			
	 </div>	
								
							 <label for="password">New Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="password" minlength="6" maxlength="20" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); " name="password1" id="password" tabindex="2" class="form-control" onpaste="return false;" placeholder="Enter new password">

  </div>
   <label for="password">Confirm New Password*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="password" minlength="6" maxlength="20" oninvalid="InvalidMsgError(this);" required="required" oninput="InvalidMsgError(this); " name="password2" id="password" tabindex="2" class="form-control" onpaste="return false;" placeholder="Re-enter new password">
  </div>
 
   
<center><button style="margin-bottom: 12px;width:100px;" type="submit"  name="login-submit" id="login-submit" class="btn btn-default">Reset</button></center>
									
 </div>
</form>
  </div>
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