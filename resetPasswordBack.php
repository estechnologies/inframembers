<?php

		require 'connect.php';
		$database = new connect();
		
		
		$number = htmlspecialchars($_POST['number']);
		$oldpass = htmlspecialchars($_POST['oldPassword']);
		$pass1 = htmlspecialchars($_POST['password1']);
		$pass2 = htmlspecialchars($_POST['password2']);
		
		$checkQuery = "SELECT * FROM logins WHERE number='$number'";
		$resultCheckQuery = mysql_query($checkQuery);
		
		if(mysql_num_rows($resultCheckQuery) >=1){
			$checkRow = mysql_fetch_array($resultCheckQuery);
			
			$oldpass = md5($oldpass);
			if($oldpass === $checkRow['password']){
				if($pass1 == $pass2){
					$pass1 = md5($pass1);
					$updateQuery = "UPDATE logins SET password='$pass1' WHERE number='$number'";
					$resultUpdate = mysql_query($updateQuery);
					
					if($resultUpdate == 1){
						header("Location:ResetPassword.php?msg=Password Update Sucessfull");
					}else{
						header("Location:ResetPassword.php?msg=Password update failed please try again");
					}
					
				}else{
					header("Location:ResetPassword.php?msg=password and confirm password not match");
				}
			}else{
				header("Location:ResetPassword.php?msg=Old Password was not correct");
			}
			
		}else{
			header("Location:ResetPassword.php?msg=No User found on  this number");
		}
		
?>