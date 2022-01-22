<!DOCTYPE html>
<html>
<head>
    <link href="form-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));  
        session_start();
        $sId = $_SESSION['sId'];
                
        $sql = "SELECT name FROM students WHERE sr='$sId'";
        $selectResult = mysqli_query($conn,$sql);
		
        $studentDetails = mysqli_fetch_assoc($selectResult);  
        $sName = $studentDetails["name"];

        $_SESSION['sId'] = $sId;
    ?>
    <div class="ExamPortal">AASAN Edu System</div>

    <div class="Frame1">
        <a class="name"><?php echo " Welcome {$sName} !"; ?></a>
        <a href="login.php" class='logout'>LOGOUT</a>
    </div>

	<img src="image2.png" width= 770px height= 650px class="img"/>

    <div class="Rectangle2">
        <center>    
            <br><br>
            <h1 class="Login">Courier Service</h1> <br>
            <form onsubmit="return registration() == true" method="POST" action="insert.php">
                <table>
                    <tr>
                        <td><label>First Name:</label></td>
                        <td><input type="text" id= "fname" name='fname'><br><br></td>
                    </tr>
                    <tr>
                        <td><label>Surname:</label></td>
                        <td><input type="text" id="lname" name='lname'> <br><br></td>
                    </tr>
                    <tr>
                        <td><label>Gender:</label></td>
                        <td>
                            <select name="gender" id="gender" >
                                <option value="" disabled selected></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="others">Other</option>
                            </select><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Phone No:</label></td>    
                        <td><input type="number" id="phone" name="phone"><br><br></td>
                    </tr>
                    <tr>
                        <td><label>Email Id:</label></td>
                        <td><input type="email" id="email" name="email"><br><br></td>
                    </tr>
                    <tr>
                        <td><label>Address:</label></td>
				        <td><input type="text" id="address" name="address" id="address" style="height: 150px;"><br><br></td>
                    </tr>
                    <tr>
                        <td><label>City:</label></td>
                        <td><input type="text"  id="city" name="city"><br><br></td>
                    </tr>
                    <tr>
                        <td><label>State:</label></td>
                        <td><input type="text"  id="state" name="state"><br><br></td>
                    </tr>
                    <tr>
                        <td><label>Pin Code:</label></td>
                        <td><input type="number"  id="pin" name="pin"><br><br></td>
                    </tr>
                    <tr>
                        <td><label>Country:</label></td>
                        <td><input type="text"  id="country" name="country"><br><br></td>
                    </tr>
                    <tr>
                        <td><label>Document:</label></td>
                        <td>
                            <select name="doc" id="doc">
                                <option value="" disabled selected>Choose Document</option>
                                <option value="Leaving Certificate">Leaving Certificate</option>
                                <option value="Train Concession">Train Concession</option>
                                <option value="Bonafide Certificate">Bonafide Certificate</option>
                                <option value="Migration Certificate">Migration Certificate</option>
                                <option value="Fee Reciept">Fee Reciept</option>
                            </select><br><br>
                        </td>
                    </tr>
                </table>
                <br><br>
                <input type="submit" value="Submit"  onclick="popup()">
                <input type="reset" value="Clear Form" onclick="clearFunc()" id="res" class="btn"/>
            </form>
        </center>  
        <br><br><br><br><br><br>     
    </div>
    <br><br>

    <script>
    function popup()
    {
        confirm("Are you sure to proceed for payment?");
    }
	function clearFunc()
	{
		document.getElementById("fname").value="";
		document.getElementById("lname").value="";
		document.getElementById("gender").value="";
		document.getElementById("phone").value="";
		document.getElementById("email").value="";
        document.getElementById("address").value="";
        document.getElementById("city").value="";
        document.getElementById("pin").value="";
		document.getElementById("state").value="";
		document.getElementById("country").value="";
	}
    </script>
</body>
</html>