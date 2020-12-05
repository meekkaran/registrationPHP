<?php

    $username="";
    $email="";
    $errors=array();
   
   //connect to database

    $db = mysqli_connect("localhost","root","","registration");

    //if register button is clicked
    if(isset($_POST['register'])){
    	$username = mysql_real_escape_string($_POST['username']);
    	$email = mysql_real_escape_string($_POST['email']);
    	$password_1 = mysql_real_escape_string($_POST['password_1']);
    	$password_2 = mysql_real_escape_string($_POST['password_2']);

    	//ensure form fields are filled correctly
    	if(empty($username)){
    		array_push($errors, "Username is required");
    	}
    	if(empty($email)){
    		array_push($errors, "Email is required");
    	}
    	if(empty($password_1)){
    		array_push($errors, "Password is required");
    	}
    	if($password_1 != $password_2){
    		array_push($errors, "The two passwords do not match");
    	}

    	//if there are no errors save user to database
    	if(count($errors) == 0){
    		$password = md5($password_1);//encrypt password before storing in database
    		$sql = "INSERT INTO users (username,email,password)
    		       VALUES('$username','$email','$password')";
    		mysqli_query($db,$sql);       
    	}

    } 
?>