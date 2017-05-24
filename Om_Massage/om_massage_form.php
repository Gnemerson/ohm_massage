<?php
	
	//set variables database
	$servername = "localhost:8889";
	$username = "root";
	$password = "root";
	$database = "massage_customers";
	
	//connect
	$conn = mysqli_connect($servername, $username, $password, $database);
	//failsafe
	if (!$conn) {
		die ("connection failed: " . mysqli_connect_error());
	};
	
	//if submit is clicked
	if(isset($_POST['submit'])) {
		
	//set variables from form
	$name = htmlspecialchars($_POST["fullname"]);
	$email = htmlspecialchars($_POST["email"]);
	$date = htmlspecialchars($_POST["date"]);
	$time = htmlspecialchars($_POST["time"]);	
	
	
	
	//get ready to send the schtuff
	$sql = "INSERT INTO appointments (customer, email, date, time) 
					VALUES ($name, $email, $date, $time)";
	//actually send the schtuff
	if (mysqli_query($conn, $sql)) {
		echo "Great! can't wait to see you :)";
	} else {
		echo "OH NO! something went wrong :(";
	}
	
	//email to om massage
	$to = "fishfan0614@gmail.com";
	$subject = "New Appointment";
	$header = "From: $email";
	$message = "You have an appointment on " . $date . " at " . $time;
	
	mail($to, $subject, $message, $header);
	
	//email to customer with confirmation

	$usersubject = "Your Appointment";
	$usermessage = "Thank You for choosing Om Massage. Your Appointment is on $date at $time";
	
	mail($email , $usersubject, $usermessage, $to );
	
	
	mysqli_close($conn);
	
	};
	
	
	
	
	
	
	
	?>