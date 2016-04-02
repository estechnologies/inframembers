<?php
		session_start();

		require 'connect.php';
		$database =  new connect();

	$type = htmlspecialchars($_POST['Login']);
	$number = htmlspecialchars($_POST['number']);
	$password = htmlspecialchars($_POST['password1']);
	
	if(empty($type) and empty($number) and empty($password)){
		header("Location:Login.php?msg=Fields can`t be empty");
	}else if(empty($number) and empty($password)){
		header("Location:Login.php?msg=please enter number and password");
	}else if(empty($type)){
		header("Location:Login.php?msg=please select 'Login As'");
	}else if(empty($number)){
		header("Location:Login.php?msg=Please enter number");
	}else if(empty($password)){
		header("Location:Login.php?msg=please enter password");
	}else{
		
		$password = md5($password);
		$query = "SELECT * FROM logins WHERE type='$type' AND number='$number' AND password='$password'";
		$resultQuery = mysql_query($query);
		
		if(mysql_num_rows($resultQuery) >=1){
			$row = mysql_fetch_array($resultQuery);
			$_SESSION['user'] = $row;
			header("Location:Home.php");
		}else{
			session_destroy();
			header("Location:Login.php?msg=invalid login.Please check ");
		}
		
	}
	
?>
