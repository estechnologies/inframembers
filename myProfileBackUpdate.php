<?php 


require 'connect.php';
$database = new connect();


$name = htmlspecialchars($_POST['Name']);
$location = htmlspecialchars($_POST['Location']);
$number = htmlspecialchars($_POST['Contactnumber']);
$email = htmlspecialchars($_POST['email1']);
$userid = htmlspecialchars($_POST['userid']);

//access
$accessSubContractor = htmlspecialchars($_POST['AccessSubContractors']);
$accessMachinerySupplier = htmlspecialchars($_POST['AccessMachinerySuppliers']);
$accessMaterialSupplier = htmlspecialchars($_POST['AccessMaterialSuppliers']);
$accessManPowerSupplier = htmlspecialchars($_POST['AccessManpowerSupplier']);

// sub contractor post
$subContractSpec = htmlspecialchars($_POST['SubContractorsSpecialization']);
$subConDes = htmlspecialchars($_POST['SubContractorsDescription']);
$subConProfile = profileUpload('SubContractorsProfile');

//machinery suppilers
$machsupavail = htmlspecialchars($_POST['MachinerySuppliersAvailable']);
$machsupdes = htmlspecialchars($_POST['MachinerySuppliersDescription']);
$machsupprofile = profileUpload('MachinerySuppliersProfile');

// material suppliers
$matsupavail = htmlspecialchars($_POST['MaterialSuppliersAvailable']);
$matsupdes = htmlspecialchars($_POST['MaterialSuppliersDescription']);
$matsupprofile = profileUpload('MaterialSuppliersProfile');


$manpowavail = htmlspecialchars($_POST['ManpowerSupplierSpecialization']);
$manpowdes = htmlspecialchars($_POST['ManpowerSupplierDescription']);
$manpowprofile = profileUpload('ManpowerSupplierProfile');

/*
 * profile uploaded
*/
function profileUpload($var){
	$folder = "uploads/";
	$profile = rand(100,100000).$_FILES[$var]['name'];
	if($profile != null){
		$profileloc = $_FILES[$var]['tmp_name'];
		$newProfileName = strtolower($profile);
		$finalProfile = str_replace('', '-', $newProfileName);

		if(move_uploaded_file($profileloc, $folder.$finalProfile)){
			return 'http://www.inframembers.com/'.$folder.$finalProfile;
		}else{
			return '';
		}
	}else{
		return '';
	}
}



$query = "UPDATE profile SET name='$name',";
$query .="location='$location',number='$number',";
$query .="email='$email',subconpost='$accessSubContractor',";
$query .="macsuppost='$accessMachinerySupplier',matsuppost='$accessMaterialSupplier',";
$query .="manpowpost='$accessManPowerSupplier',subconspec='$subContractSpec',";
$query .="subcondes='$subConDes',subconprofile='$subConProfile',";
$query .="macsupmachinery='$machsupavail',macsupdescription='$machsupdes',macsupprofile='$machsupprofile',";
$query .="matsupmaterial='$matsupavail',matsupdescription='$matsupdes',matsupprofile='$matsupprofile',";
$query .="mansupspec='$manpowavail',mansupdescription='$manpowdes',mansupprofile='$manpowprofile' WHERE userid='$userid'";

$resultQuery = mysql_query($query);

if($resultQuery == 1){
	header("Location:MyProfile.php?msg1=Profile Updated successfully");
}else{
	header("Location:MyProfile.php?msg=Profile Update Failed");
}


?>