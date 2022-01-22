<?php
	$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$query = "SELECT Password FROM users WHERE Email = '$email'";
	$result = mysqli_query($conn,$query);
	
    if(mysqli_num_rows($result) == 0)
    {
        echo "<h1><center>Login failed. Invalid email or password.</center></h1>";  
	} 

    else 
    {
		$databasePassword = mysqli_fetch_assoc($result)["Password"];
		
		if($password != $databasePassword) 
   		{
        	echo "<h1><center>Invalid Password.</center></h1>";  
		}
		else
        {	
			$selectQuery = "SELECT User_Id FROM users WHERE Email = '$email' AND Password = '$password'";
			$selectResult = mysqli_query($conn,$selectQuery);
			$fId = mysqli_fetch_assoc($selectResult)["User_Id"];

			session_start();
			$_SESSION['fId'] = $fId;


			header('Location:faculty-home.php');	
        }
	}
?>