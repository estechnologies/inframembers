<?php
	session_start();
			
	if(!isset($_SESSION['user']['number'])){
		header("Location:index.php");
	}
?>
<html>
<head>
<title>Infra Members</title>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
 	<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/index.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  <h2 class="nav">Infra Members</h2>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
  <ul class="nav navbar-nav navbar-right">
   <li style="margin-right:20px;margin-top:10px;"><a href="Home.php" class="navbar-btn btn-default btn pull-right"><span class="glyphicon glyphicon-home"></span> Home</a></li>
		
      </ul>
    </div>
  </div>
</nav>
<nav style="margin-top: 100px;"  class="navbar navbar-default">
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
	 <li class="dropdown headerlinks">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sub-Contractors<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a  href="SubContractView.php" >View Sub-Contractors</a></li>
        <li class="headerlinks_drops"><a  href="SubContractPost.php" >Post Sub-Contractors</a></li>                       
      </ul>
    </li>
	 <li class="dropdown headerlinks">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Machinery Suppliers<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a  href="MachinerySuppliersView.php" >View Machinery Suppliers</a></li>
        <li class="headerlinks_drops"><a  href="MachinerySuppliersPost.php" >Post Machinery Suppliers</a></li>                       
      </ul>
    </li>
	 <li class="dropdown headerlinks">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Material Supplier<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a  href="MaterialSupplierView.php" >View Material Supplier</a></li>
        <li class="headerlinks_drops"><a  href="MaterialSupplierPost.php" >Post Material Supplier</a></li>                       
      </ul>
    </li>
	 <li class="dropdown headerlinks">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manpower Supplier<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li class="headerlinks_drops"><a  href="MaterialSupplierView.php" >View Manpower Supplier</a></li>
        <li class="headerlinks_drops"><a  href="MaterialSupplierPost.php" >Post Manpower Supplier</a></li>                       
      </ul>
    </li>
	<li class="headerlinks" ><a style=""  href="OurClients.php">Our Clients</a></li>
	<li class="headerlinks" ><a style=""  href="Login.php">Contact Us</a></li>
  </ul>
    </div>
  </div>
</nav>

<footer style="margin-bottom:0px" class="navbar navbar-fixed-bottom footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Infra Members</a></p></center>
		</div>
   </footer>
</body>
</html>