<?php
	session_start();
			
	if(!isset($_SESSION['user']['number'])){
		header("Location:index.php");
	}
	
	require 'connect.php';
	$database =  new connect();
	
	$userId = $_SESSION['user']['uid'];
	$checkQuery = "SELECT * FROM profile WHERE userid='$userId'";
	$resultCheckQuery = mysql_query($checkQuery);
	
	if(mysql_num_rows($resultCheckQuery) > 0){
		$row = mysql_fetch_array($resultCheckQuery);
	}
	
?>
<html>
<head>
<title>My Profile Infra Members</title>
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
  <div class="container" style="">
<div class="col-md-3">
</div>


<div class="col-md-6 ">
    <div class="panel panel-default">
  <center>  <div style="background-color: #EAE9E9;" class="panel-heading"><h3 class="panel-title"><strong>Details</strong></h3>
      
  </div> </center> 
  
  <div class="panel-body">
   <form id="Login-form" action="<?php if(isset($row)){ echo'myProfileBackUpdate.php'; }else{echo 'myprofileBack.php';}?>" method="post" role="form" enctype="multipart/form-data">
 <center></center>
		 <center></center>
	<label for="Name">Name*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input type="hidden" name="userid" value="<?php  echo $_SESSION['user']['uid']; ?>"/>
     <input type="text" name="Name" id="Name" required="required" value="<?php if(isset($row)){ echo $row['name'];} ?>" class="form-control" placeholder="Enter Name"></input>

  </div>
 
   <label for="Location">Location*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
     <input type="text" name="Location" id="Location" required="required" value="<?php if(isset($row)){ echo $row['location'];} ?>" placeholder="Enter Location" class="form-control" ></input>

  </div>

		<label for="Contactnumber">Contact Number*</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
             <input type="text" name="Contactnumber" id="Contactnumber" tabindex="1" oninvalid="InvalidMsg(this);" maxlength="10" oninput="InvalidMsg(this);" required="required" value="<?php if(isset($row)){ echo $row['number'];} ?>" class="form-control" pattern="[0-9]{10}" placeholder="Enter Mobile number" value="">                                       
  </div>
<label for="email">Email address</label>
  <div style="margin-bottom: 12px" class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		<input  name= "email1" id="email1" maxlength="50"  class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  type="text" class="form-control"  value="<?php if(isset($row)){ echo $row['email'];} ?>" placeholder="Enter Email Address">                                     
  </div>
  <label for="Access">Access*</label>
   <div style="margin-bottom: 12px" class="input-group">
   <div class="col-md-12">
   <div class="col-md-6">
    <label class="checkbox-inline" for="Access-0">
      <input type="checkbox" name="AccessSubContractors" id="AccessSubContractors" <?php if(isset($row['subconpost']) and $row['subconpost'] == '1'){ echo 'checked';}?> onclick="validateSubContractors()" value="1">
      Sub Contractors
    </label>
    </div>
    <div class="col-md-6">
    <label class="checkbox-inline" for="Access-1">
      <input type="checkbox" name="AccessMachinerySuppliers" id="AccessMachinerySuppliers" <?php if(isset($row['macsuppost']) and $row['macsuppost'] == '1'){ echo 'checked';}?> onclick="validateMachinerySuppliers()" value="1">
      Machinery Suppliers
    </label>
    </div>
    </div>
     <div class="col-md-12">
     <div class="col-md-6">
    <label class="checkbox-inline" for="Access-2">
      <input type="checkbox" name="AccessMaterialSuppliers" id="AccessMaterialSuppliers" <?php if(isset($row['matsuppost']) and $row['matsuppost'] == '1'){ echo 'checked';}?> onclick="validateMaterialSuppliers()" value="1">
      Material Supplier
    </label>
    </div>
    <div class="col-md-6">
    <label class="checkbox-inline" for="Access-3">
      <input type="checkbox" name="AccessManpowerSupplier" id="AccessManpowerSupplier" <?php if(isset($row['manpowpost']) and $row['manpowpost'] == '1'){ echo 'checked';}?> onclick="validateManpowerSupplier()" value="1">
      Manpower Supplier
    </label>
    </div>
  </div>
  </div>


<div id="SubContractors" style="display:<?php if(isset($row['subconpost']) and $row['subconpost'] == '1'){ echo 'block';}else{ echo 'none';} ?>;">
<center><h4>SubContractors</h4></center>
  <label for="SubContractorsSpecialization">Specialization*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
       <select name="SubContractorsSpecialization" id="SubContractorsSpecialization" onchange="selectrow1()" class="form-control">
								<option  value="" disabled selected hidden>Select Specialization</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Drilling'){ echo 'selected';}?> value="Drilling">Drilling</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Blasting'){ echo 'selected';}?> value="Blasting">Blasting</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Excavation'){ echo 'selected';}?> value="Excavation">Excavation</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Earthwork'){ echo 'selected';}?> value="Earthwork">Earthwork</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Bridge works'){ echo 'selected';}?> value="Bridge works">Bridge works</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Building Works'){ echo 'selected';}?> value="Building Works">Building Works</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Road works'){ echo 'selected';}?> value="Road works">Road works</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Power Plants'){ echo 'selected';}?> value="Power Plants">Power Plants</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Solar Projects'){ echo 'selected';}?> value="Solar Projects">Solar Projects</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Ramming'){ echo 'selected';}?> value="Ramming">Ramming</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Irrigation'){ echo 'selected';}?> value="Irrigation">Irrigation</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Metro projects'){ echo 'selected';}?> value="Metro projects">Metro projects</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Tunnel Works'){ echo 'selected';}?> value="Tunnel Works">Tunnel Works</option>
								<option <?php if(isset($row) and $row['subconspec'] == 'Others'){ echo 'selected';}?> value="Others">Others</option>
							</select>

  </div>
  <div id="subcontractorsother" style="display:none">
  <label for="Name">Specialization Specify*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
     <input type="text" name="SubSpecializationSpecify" id="SubSpecializationSpecify" class="form-control" placeholder="Please Specify"></input>

  </div>
  </div>
  
<label for="SubContractorsDescription">Description*</label>
  <div style="margin-bottom:6px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <textarea type="text" name="SubContractorsDescription" id="SubContractorsDescription" value="" placeholder="Enter Work description" class="form-control" ><?php if(isset($row)){ echo $row['subcondes'];} ?></textarea>

  </div>
  <label for="SubContractorsProfile">Profile*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="file" name="SubContractorsProfile" id="SubContractorsProfile" class="form-control" ></input>

  </div>
</div>
<div id="MachinerySuppliers" style="display:<?php if(isset($row['macsuppost']) and $row['macsuppost'] == '1'){ echo 'block';}else{ echo 'none';} ?>;">
<center><h4>Machinery Suppliers</h4></center>
  <label for="MachinerySuppliersAvailable">Available Machinery*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
       <select name="MachinerySuppliersAvailable" id="MachinerySuppliersAvailable"  onchange="selectrow2()"  class="form-control">
								<option  value="" disabled selected hidden>Select Available Machinery</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'JCB'){ echo 'selected';}?> value="JCB">JCB</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Excavators'){ echo 'selected';}?> value="Excavators">Excavators</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Rollers'){ echo 'selected';}?> value="Rollers">Rollers</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Loaders'){ echo 'selected';}?> value="Loaders">Loaders</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Tippers'){ echo 'selected';}?> value="Tippers">Tippers</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Water Tankers'){ echo 'selected';}?> value="Water Tankers">Water Tankers</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Millers / Mixers'){ echo 'selected';}?> value="Millers / Mixers">Millers / Mixers</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'RMC Millers'){ echo 'selected';}?> value="RMC Millers">RMC Millers</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Tractors'){ echo 'selected';}?> value="Tractors">Tractors</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Azax'){ echo 'selected';}?> value="Azax">Azax</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Concrete Pumps / Boomplacers'){ echo 'selected';}?> value="Concrete Pumps / Boomplacers">Concrete Pumps / Boomplacers</option>
								<option <?php if(isset($row) and $row['macsupmachinery'] == 'Others'){ echo 'selected';}?> value="Others">Others</option>
							</select>

  </div>
    <div id="Machinerysother" style="display:none">
  <label for="Name">Specialization Specify*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
     <input type="text" name="MachSpecializationSpecify" id="MachSpecializationSpecify" class="form-control" placeholder="Please Specify"></input>

  </div>
  </div>
<label for="MachinerySuppliersDescription">Description*</label>
  <div style="margin-bottom:6px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <textarea type="text" name="MachinerySuppliersDescription" id="MachinerySuppliersDescription"  placeholder="Enter Work description" class="form-control" ><?php if(isset($row)){ echo $row['macsupdescription'];} ?></textarea>

  </div>
  <label for="MachinerySuppliersProfile">Profile*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="file" name="MachinerySuppliersProfile" id="MachinerySuppliersProfile"  class="form-control" ></input>

  </div>
</div>
<div id="MaterialSuppliers" style="display:<?php if(isset($row['matsuppost']) and $row['matsuppost'] == '1'){ echo 'block';}else{ echo 'none';} ?>;">
<center><h4>Material Suppliers</h4></center>
  <label for="MaterialSuppliersAvailable">Available Material*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
       <select name="MaterialSuppliersAvailable" id="MaterialSuppliersAvailable" onchange="selectrow3()" class="form-control">
								<option value="" disabled selected hidden>Select Available Material</option>
								<option <?php if(isset($row) and $row['matsupmaterial'] == 'Sand'){ echo 'selected';}?> value="Sand">Sand</option>
								<option <?php if(isset($row) and $row['matsupmaterial'] == 'Aggregates / Metal'){ echo 'selected';}?> value="Aggregates / Metal">Aggregates / Metal</option>
								<option <?php if(isset($row) and $row['matsupmaterial'] == 'Morrum / Sub-Grade'){ echo 'selected';}?> value="Morrum / Sub-Grade">Morrum / Sub-Grade</option>
								<option <?php if(isset($row) and $row['matsupmaterial'] == 'Earth / Sub-Base'){ echo 'selected';}?> value="Earth / Sub-Base">Earth / Sub-Base</option>
								<option <?php if(isset($row) and $row['matsupmaterial'] == 'Timber / Wood'){ echo 'selected';}?> value="Timber / Wood">Timber / Wood</option>
								<option <?php if(isset($row) and $row['matsupmaterial'] == 'Water'){ echo 'selected';}?> value="Water">Water</option>
								<option <?php if(isset($row) and $row['matsupmaterial'] == 'Others'){ echo 'selected';}?> value="Others">Others</option>
							</select>

  </div>
    <div id="MaterialSupplierother" style="display:none">
  <label for="Name">Specialization Specify*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
     <input type="text" name="MatSpecializationSpecify" id="MatSpecializationSpecify" class="form-control" placeholder="Please Specify"></input>

  </div>
  </div>
<label for="MaterialSuppliersDescription">Description*</label>
  <div style="margin-bottom:6px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <textarea type="text" name="MaterialSuppliersDescription" id="MaterialSuppliersDescription"  placeholder="Enter Work description" class="form-control" ><?php if(isset($row)){ echo $row['matsupdescription'];} ?></textarea>

  </div>
  <label for="MaterialSuppliersProfile">Profile*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="file" name="MaterialSuppliersProfile" id="MaterialSuppliersProfile"  class="form-control" ></input>

  </div>
</div>
<div id="ManpowerSupplier" style="display:<?php if(isset($row['manpowpost']) and $row['manpowpost'] == '1'){ echo 'block';}else{ echo 'none';} ?>;">
<center><h4>Manpower Suppliers</h4></center>
  <label for="ManpowerSupplierSpecialization">Specialization*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
       <select name="ManpowerSupplierSpecialization" id="ManpowerSupplierSpecialization" onchange="selectrow4()" class="form-control">
								<option value="" disabled selected hidden>Select Specialization</option>
								<option <?php if(isset($row) and $row['mansupspec'] == 'Labour/Masson Gang'){ echo 'selected';}?> value="Labour/Masson Gang">Labour/Masson Gang</option>
								<option <?php if(isset($row) and $row['mansupspec'] == 'Shuttering Team'){ echo 'selected';}?> value="Shuttering Team">Shuttering Team</option>
								<option <?php if(isset($row) and $row['mansupspec'] == 'Bar-Benders'){ echo 'selected';}?> value="Bar-Benders">Bar-Benders</option>
								<option <?php if(isset($row) and $row['mansupspec'] == 'Carpenters'){ echo 'selected';}?> value="Carpenters">Carpenters</option>
								<option <?php if(isset($row) and $row['mansupspec'] == 'Others'){ echo 'selected';}?> value="Others">Others</option>
							</select>
  </div>
    <div id="ManpowerSupplierother" style="display:none">
  <label for="Name">Specialization Specify*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
     <input type="text" name="ManSpecializationSpecify" id="ManSpecializationSpecify" class="form-control" placeholder="Please Specify"></input>

  </div>
  </div>
<label for="ManpowerSupplierDescription">Description*</label>
  <div style="margin-bottom:6px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <textarea type="text" name="ManpowerSupplierDescription" id="ManpowerSupplierDescription"  placeholder="Enter Work description" class="form-control" ><?php if(isset($row)){ echo $row['mansupdescription'];} ?></textarea>

  </div>
  <label for="ManpowerSupplierProfile">Profile*</label>
  <div style="margin-bottom: 12px" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
     <input type="file" name="ManpowerSupplierProfile" id="ManpowerSupplierProfile"  class="form-control" ></input>

  </div>
</div>
 
 <center><button style="margin-bottom: 12px;width:115px;" type="submit" class="btn btn-default">Submit</button></center>
 </div>
</form>
  </div>
</div>
</div>

<footer style="margin-bottom:0px" class="navbar  footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.yodhaa.com">Infra Members</a></p></center>
		</div>
   </footer>
   <script>
   
 function validateSubContractors(){
    var remember = document.getElementById('AccessSubContractors');
    if (remember.checked){
        document.getElementById('SubContractors').style.display='inline';
         document.getElementById("").setAttribute("required","required");
 document.getElementById("").setAttribute("required","required");
    }else{
       document.getElementById('SubContractors').style.display='none';
    }
}
 function validateMachinerySuppliers(){
    var remember = document.getElementById('AccessMachinerySuppliers');
    if (remember.checked){
        document.getElementById('MachinerySuppliers').style.display='inline';
    }else{
       document.getElementById('MachinerySuppliers').style.display='none';
    }
}
 function validateMaterialSuppliers(){
    var remember = document.getElementById('AccessMaterialSuppliers');
    if (remember.checked){
        document.getElementById('MaterialSuppliers').style.display='inline';
    }else{
       document.getElementById('MaterialSuppliers').style.display='none';
    }
}
 function validateManpowerSupplier(){
    var remember = document.getElementById('AccessManpowerSupplier');
    if (remember.checked){
        document.getElementById('ManpowerSupplier').style.display='inline';
    }else{
       document.getElementById('ManpowerSupplier').style.display='none';
    }
}
function selectrow1() {
var selectedValue = document.getElementById('SubContractorsSpecialization').value
if (selectedValue == 'Others'){

document.getElementById('subcontractorsother').style.display='inline';
 document.getElementById("SubSpecializationSpecify").setAttribute("required","required");

}
else{

document.getElementById('subcontractorsother').style.display='none';
 
     }

}
function selectrow2() {
var selectedValue = document.getElementById('MachinerySuppliersAvailable').value
if (selectedValue == 'Others'){

document.getElementById('Machinerysother').style.display='inline';
 document.getElementById("MachSpecializationSpecify").setAttribute("required","required");

}
else{

document.getElementById('Machinerysother').style.display='none';
 
     }

}
function selectrow3() {
var selectedValue = document.getElementById('MaterialSuppliersAvailable').value
if (selectedValue == 'Others'){

document.getElementById('MaterialSupplierother').style.display='inline';
 document.getElementById("MatSpecializationSpecify").setAttribute("required","required");

}
else{

document.getElementById('MaterialSupplierother').style.display='none';
 
     }

}function selectrow4() {
var selectedValue = document.getElementById('ManpowerSupplierSpecialization').value
if (selectedValue == 'Others'){

document.getElementById('ManpowerSupplierother').style.display='inline';
 document.getElementById("ManSpecializationSpecify").setAttribute("required","required");

}
else{

document.getElementById('ManpowerSupplierother').style.display='none';
 
     }

}
   </script>
</body>
</html>