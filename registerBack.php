<?php

	
		$type = htmlspecialchars($_POST['Register']);
		$name = htmlspecialchars($_POST['Name']);
		$number = htmlspecialchars($_POST['number']);
		$email = htmlspecialchars($_POST['email1']);
		$pass1 = htmlspecialchars($_POST['password1']);
		$pass2 = htmlspecialchars($_POST['password2']);
		
		
		if($pass1 != $pass2){
			header("Location:Register.php?msg=password and confirm password should be same");
		}else if(empty($pass1)){
			header("Location:Register.php?msg=passwords can`t be empty");
		}else if(empty($name)){
			header("Location:Register.php?msg=name can`t be empty");
		}else if(empty($number)){
			header("Location:Register.php?msg=number can`t be empty");
		}else{
			require 'connect.php';
			$database = new connect();
			
			
			$pass1 = md5($pass1);
			
			$query = "INSERT INTO logins(type,name,number,email,password)VALUES('$type','$name','$number','$email','$pass1')";
			$resultQuery = mysql_query($query);
			
			if($resultQuery == 1){
				header("Location:Login.php?msg1=Account create successfully... Please Login");
			}else{
				header("Location:Register.php?msg=Account create failed. Try again");
			}
			
		}

?>