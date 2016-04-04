<?php

			require 'connect.php';
			$database = new connect();
			
		$name =htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$number = htmlspecialchars($_POST['number']);
		$comments =htmlspecialchars($_POST['comments']);
		
		
	if(empty($name) and empty($number) and empty($comments)){
		header("Location:UserContactus.php?msg=Feilds can`t be empty");
	}else if(empty($name)){
		header("Location:UserContactus.php?msg=Name can`t be empty");
	}else if(empty($number)){
		header("Location:UserContactus.php?msg=Number can`t be empty");
	}else if(empty($comments)){
		header("Location:UserContactus.php?msg=comments can`t be empty");
	}else{
		
		$query = "INSERT INTO contact(name,email,mobile,message)VALUES('$name','$email','$number','$comments')";
		$resultQuery = mysql_query($query);
		
		if($resultQuery == 1){
			header("Location:UserContactus.php?msg1=Message submitted successfully.We contact you shortly");
		}else{
			header("Location:UserContactus.php?msg=Message Failed.Please Try Again");	
		}
	}
?>