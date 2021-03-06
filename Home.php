<?php
	session_start();
			
	if(!isset($_SESSION['user']['number'])){
		header("Location:index.php");
	}
?>
<html>
<head>
<title>Home Infra Members</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 <link rel="shortcut icon" href="/images/logofav.ico" type="image/x-icon" />
 	<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<style>


body {
    background: url(images/HomePage.jpg)no-repeat fixed center;
    }
.transparent .title 
	{
	text-align: center; 
	color: #FFF;
	font-size: 49px; 
	}
.transparent .tuyin .plan-name 
	{
	font-size: 20px;
	font-weight: 400;
	border-bottom: 1px solid #FFF;
	padding-bottom: 15px;
	padding: 10px
	}


.transparent .text {
    margin-top: 60px;
    font-size: 15px;
    color: #FFFFFF;
    text-align: center;
    font-weight: 300;
    margin-bottom: 16px;
    font-size: 18px;
}

</style>	
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
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Works for contract<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a  href="WorksSubContractView.php" >View On-Going works</a></li>
        <li class="headerlinks_drops"><a  href="WorksSubContractPost.php" >Post a work to Contract</a></li>                       
      </ul>
    </li>
 <li class="headerlinks"  ><a style=""  href="SubContractors.php" >Contractors</a></li>
    <li class="headerlinks" ><a style=""  href="MachinerySuppliers.php" >Machinery Suppliers</a></li>
    <li class="headerlinks" ><a style=""  href="MaterialSupplier.php" >Material Suppliers</a></li>
    <li class="headerlinks" ><a style=""  href="ManpowerSupplier.php">Manpower Suppliers</a></li>
     <li class="headerlinks" ><a style=""  href="FAQs.php">FAQs</a></li>
	<li class="headerlinks" ><a style=""  href="OurClients.php">Our Clients</a></li>
	<li class="headerlinks" ><a style=""  href="UserContactus.php">Contact Us</a></li>
  </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-bottom:50px;">
  <div class="row transparent">

    <div class="col-md-12">
    		
		<center>	<span class="title">Welcome to Infra Members</span>
			 
			  <div class="text">
				<p>We are one-of-its-kind online platform, build to bridge the gap between the EPC 

Companies and the Sub-Contractors, Material & Machinery Suppliers. Our intension is 

to provide the EPC companies with a list of execution team having experience in 

various fields & activities so as to cater their needs to accomplish the project on-time 

with the desired quality and also to provide the execution team with a list of 

opportunities where they can perform and prove themselves.</p>
<p>We developed this platform with a hope to explore the various opportunities available in

the field and to present them visible to the concerned and</p>
			  </div>
		  </div>
		</center>
  </div>
  
</div>
<footer style="margin-bottom:0px" class="navbar navbar-fixed-bottom footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Infra Members</a></p></center>
		</div>
   </footer>
</body>
</html>