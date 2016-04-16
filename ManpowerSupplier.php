<?php
	session_start();
			
	if(!isset($_SESSION['user']['number'])){
		header("Location:index.php");
	}
?>
<html>
<head>
<title>Manpower Supplier Infra Members</title>
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

	th {
    white-space: nowrap;
}
	td {
    white-space: nowrap;
}
.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #000000;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #000;
}
table{border: 1px solid #000;}
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
<div class="container" id="mainborder" style="margin-top:30px;margin-bottom:71px;">
<p style="font-size:18px;" >We believe that the success of any project depends on the ability to build & availability of 

the dynamic, diverse, experienced and mobile teams whenever and wherever they are 

needed….</p><br><p style="font-size:16px;" ><b>The following Manpower Suppliers are available for you………….</b></p>
 <center></center>
 <center><?php 
	


	

		if(isset($_GET['msg'])){
			
			$msg = $_GET['msg'];
			$httphost = $_SERVER['HTTP_HOST'];
			$link = "http://$httphost/"."popup.php?msg=$msg";
			//echo "<script>window.open('$link','popup','width=400,height=200,scrollbar=yes' );</script>";
			//echo "<script>window.open('$link')</script>";
			?>
			<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <center class="message"> <label style="font-size: 14px;color:Red;"><?php echo $msg;?></label></center> 
  </div>
		 <?php	
		}?></center>
		 <center><?php 
	
	

		if(isset($_GET['msg1'])){
			
			$msg1 = $_GET['msg1'];
			$httphost = $_SERVER['HTTP_HOST'];
			$link = "http://$httphost/"."popup.php?msg=$msg";
			//echo "<script>window.open('$link','popup','width=400,height=200,scrollbar=yes' );</script>";
			//echo "<script>window.open('$link')</script>";
			?>
		<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center class="message"> <label style="font-size: 14px;color:green;"><?php echo $msg1;?></label></center>
  </div>
		 <?php	
		}?></center>
	
			
			
							<?php

							// databases
							
							require 'connect.php';
							$database = new connect();
							
							
							
							
							/*
							 * reteriving orders according search or whole
							 */
							$pageNumber = intval($_GET['page']);
							
							
							if($pageNumber == null or $pageNumber == '1'){
								$pageNumber = 0;
							}else{
								$pageNumber = ($pageNumber*5)-5;
							}
							
							$query = "SELECT * FROM profile WHERE manpowpost='1' LIMIT $pageNumber,5 ";
							if(isset($_POST['search'])){

$search_term = htmlspecialchars($_POST['search_box']);
$searchterm2 =  htmlspecialchars($_POST['search_box1']);


$query = "SELECT * FROM profile WHERE manpowpost='1' AND  location='$search_term'  OR mansupspec='$searchterm2' LIMIT $pageNumber,5";
								
$checkQuery= mysql_query($query);
if(mysql_num_rows($checkQuery) <= 0){
	$noFound= "No records to display.";
}else{
	$noFound = "";
}

	
}


							if(isset($_POST['reset'])){





$query = "SELECT * FROM profile WHERE manpowpost='1' LIMIT $pageNumber,5 ";


}




$resultQuery = mysql_query($query);




								/*
								 *page number counts 
								 */


							$pagesTotalCount = "SELECT * FROM profile WHERE manpowpost='1'";

							$resultPagesTotalCount = mysql_query($pagesTotalCount);
							$pages = mysql_num_rows($resultPagesTotalCount);

							if(isset($_POST['search'])){
								$pages = mysql_num_rows($resultQuery);
							}
							
							$pageCount = floatval($pages/5);
							$pageCount = ceil($pageCount);


							?>
<center>
        <div class="span12">
              <form method="post" action="ManpowerSupplier.php" class="form-inline" >
               <input type="text" name="search_box" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"  class="form-control input-sm" maxlength="10" placeholder="Enter location" />
            <input type="text" name="search_box1" oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);" class="form-control input-sm" maxlength="10" placeholder="Enter Machinery" />
               <button type="submit"  name="search" style="width:100px;" class="btn btn-default">Search</button>
            </form>
        </div></center>
							
							
							 <div class="table-responsive" style="margin-top:30px;">
							 <table class="table table-striped"  id="someid">
							
			<thead>
			  <tr>
			  					 <th ><strong>S.No</strong></th> 
								 <th ><strong>Specilization</strong></th>
								 <th><strong>Description</strong></th>
								 <th><strong>Location</strong> </th> 
                                                                   <th><strong>Contact</strong></th>
								  <th><strong>Profile</strong> </th> 
								 </tr>
			</thead>
			<tbody>
			
			<?php 
			/*
			 *if no found isset 
			 */
				if(isset($noFound)){
							 if(mysql_num_rows($resultQuery) <= 0){
							echo "<td style='font-size: 14px;color:Red;'>$noFound</td> ";
									for($i = 0; $i < 11;$i++){
										echo "<td></td>";
									}
								}
				}
			?>
			
			
			 <?php
			 		$counter = 1;
			 	while($row = mysql_fetch_array($resultQuery)){ ?>
							<tr>
								 <td><?php echo $counter; ?></td>
								 <td><?php echo $row['mansupspec'];?></td>
                                                                 <td><?php echo $row['mansupdescription']?>
								 <td><?php echo $row['location'];?></td> 
								
								 <td><?php echo $row['number'];?></td> 
								  <td><a href="<?php echo $row['mansupprofile'];?>">Profile</a></td> 
								 
							</tr>
							  
									 <?php
 					$counter++;
			 	} ?>
			</tbody>
		  </table>
						
							
  
						
					</div>
										   <div>
        <ul class="pagination pull-right" >
        
        <!--
        
        	pagnation reference
        	
        	  
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
            
            
            -->
            <?php 
            
            	for($i = 1;$i <= $pageCount; $i++){
            		?>  <li><a href="ManpowerSupplier.php?page=<?php echo $i;?>"><?php  echo $i; ?></a></li> <?php 
            	}
            
            ?>
            
            
        </ul>
    </div>
	
</div>

<footer style="margin-bottom:0px" class="navbar navbar-fixed-bottom footerbottom">

		<div class="col-md-12" style="text-align:center;">
			<center>     <p style="margin-top:10px;" class="footer">All Rights Reserved - 2016. <a target="t-blank" href="http://www.inframembers.com">Infra Members</a></p></center>
		</div>
   </footer>
</body>
</html>