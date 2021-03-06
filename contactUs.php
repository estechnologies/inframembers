<html>
<head>
<title>Contact Infra Members</title>
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
	<li class="headerlinks"  ><a style=""  href="WContractor.php" >Works for contracts</a></li>
      <li class="headerlinks"  ><a style=""  href="WContrators.php" >Contractors</a></li>
    <li class="headerlinks" ><a style=""  href="WMachinerySuppliers.php" >Machinery Suppliers</a></li>
    <li class="headerlinks" ><a style=""  href="WMaterialSuppliers.php" >Material Suppliers</a></li>
    <li class="headerlinks" ><a style=""  href="WManpowerSuppliers.php">Manpower Suppliers</a></li>
     <li class="headerlinks" ><a style=""  href="WFAQ.php">FAQs</a></li>
	<li class="headerlinks" ><a style=""  href="WOurClients.php">Our Clients</a></li>
	<li class="headerlinks" ><a style=""  href="Contactus.php">Contact Us</a></li>
  </ul>
    </div>
  </div>
</nav>
	<div class="main" style="background-color:white;margin-top:0px;margin-bottom:60px">
	<div class="container" >

	
	
	<div class="row">

      <div class="col-md-6 ">
       <div class="panel panel-default">
  <center>  <div style="background-color: #EAE9E9;" class="panel-heading"><h3 class="panel-title"><strong>Contact Us</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
   <form id="contact-form" action="contactus.php" method="post" >
   		           
	
	 <label for="Name">Name*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		 <input id="name" name="name" required="required" maxlength="50" type="text" placeholder="Enter your name" oninvalid="InvalidMsgfill(this);"  oninput="InvalidMsgfill(this);" class="form-control">
	</div>
	<label for="eEmail Address">Email Address</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input id="email" name="email" type="email" placeholder="Enter your email address" maxlength="50"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control">                                     
  </div>
	<label for="Mobilenumber">Mobile Number*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
              <input id="mobile" name="number" type="text"  pattern="[0-9]{10}"  oninvalid="InvalidMsg(this);" maxlength="10" oninput="InvalidMsg(this);" required="required" placeholder="Enter your mobile number " class="form-control">
              </div>                                      
  
 <label for="Message">Message*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
     <textarea class="form-control" id="message" required="required"  name="comments" oninvalid="InvalidMsgfill(this);"  oninput="InvalidMsgfill(this);" maxlength="200" rows="5" placeholder="Enter your message here" ></textarea>

  </div>
 
   
 <center><button style="margin-bottom: 12px" type="submit" name="submit" class="btn btn-default">Submit </button></center>
 </div>
</form>
  </div>
</div>
       <div class="col-md-6">
    <center>   <div class="address">
						<h3>Address</h3>
						<p><i class="glyphicon glyphicon-map-marker"></i> We work from Nizampet, Hyderabad</p>
						<p>Our services are spread are spread pan India</p>
						<p><i class="glyphicon glyphicon-earphone"></i> +91 9550066770</p>
						<p><i class="glyphicon glyphicon-envelope"></i> inframembers@gmail.com</p>
					</div></center>
       </div>
	</div>
<footer style="margin-bottom:0px" class="navbar navbar-fixed-bottom footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Infra Members</a></p></center>
		</div>
   </footer>
</body>
</html>