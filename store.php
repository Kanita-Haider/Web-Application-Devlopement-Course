<?php

include ('../controller/controller.php');
$db=new controller;

if ($_SERVER['REQUEST_METHOD']=="POST") {
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	// echo $name."<hr>";
	// echo $email."<hr>";
	// echo $date."<hr>";
	// echo $gender."<hr>";
	// echo $city."<hr>";

	if ($name==''|| $email==''||$date==''||$gender==''|| $city=='') {
		echo "Field Must not empty";
	}
	else{
		//sql insert query
		$chayan="INSERT INTO `student` (`name`, `email`, `dob`, `gender`, `city`) VALUES ('$name', '$email', '$date', '$gender', '$city')";
		//call function
		$db->store($chayan);
	}
	
}