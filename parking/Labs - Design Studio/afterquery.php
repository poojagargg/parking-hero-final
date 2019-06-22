<?php
if(isset($_POST["submit"])) {
	
		
		require_once("server.php");
		$db_handle = new DBController();
		
		
	$email=$_POST["email"];
	$query = "INSERT INTO queries (`name`, `email`, `subject`, `message`) VALUES
		('". $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["subject"] . "', '" . $_POST["message"] . "')";
		$result = $db_handle->insertQuery($query) or die(mysqli_error($conn));
		if(!empty($result)) {
			$error_message = "";
			$success_message = "We will contact you soon!!";
			header("location:home.html");
			unset($_POST);
		} else {
			$error_message = "Problem in processing. Try Again!";	
		}
		
					
}
?>