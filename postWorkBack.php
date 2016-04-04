<?php
		
		
	$description = htmlspecialchars($_POST['DescriptionWork']);
	$location = htmlspecialchars($_POST['Location']);
	$person = htmlspecialchars($_POST['ContactPerson']);
	$email1 = htmlspecialchars($_POST['email1']);
	$number = htmlspecialchars($_POST['number']);
	$userid = htmlspecialchars($_POST['userid']);
	
	if(empty($description) and empty($location) and empty($person) and empty($number)){	
		header("Location:WorksSubContractPost.php?msg=Fields can`t be empty");
	}else if(empty($description)){
		header("Location:WorksSubContractPost.php?msg=Description can`t be empty");
	}else if(empty($location)){
		header("Location:WorksSubContractPost.php?msg=Location can`t be empty");
	}else if(empty($person)){
		header("Location:WorksSubContractPost.php?msg=Contact Person can`t be empty");
	}else if(empty($number)){
		header("Location:WorksSubContractPost.php?msg=Contact Number can`t be empty");
	}else{
		require 'connect.php';
		$database = new connect();
		
		$query = "INSERT INTO postwork(userid,description,location,person,email,number)VALUES('$userid','$description','$location','$person','$email1','$number')";
		$resultQuery = mysql_query($query);
		
		if($resultQuery == 1){
			header("Location:WorksSubContractPost.php?msg1=Work posted successfully");
		}else{
			header("Location:WorksSubContractPost.php?msg=Work posted unsuccessfull");
		}		
	}
	
	
	
?>