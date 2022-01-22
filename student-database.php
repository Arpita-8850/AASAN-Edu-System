<?php
	$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$query = "SELECT s_password FROM students WHERE s_email = '$email'";
	$result = mysqli_query($conn,$query);
	
    if(mysqli_num_rows($result) == 0)
    {
        echo "<h1><center>Login failed. Invalid email or password.</center></h1>";  
	} 

    else
    {
        $selectQuery = "SELECT sr FROM students WHERE s_email = '$email' AND s_password = '$password'";
		$selectResult = mysqli_query($conn,$selectQuery);
		$sId = mysqli_fetch_assoc($selectResult)["sr"];
		session_start();
		$_SESSION['sId'] = $sId;
		header('Location:student-choose.php');				
	}
?>
