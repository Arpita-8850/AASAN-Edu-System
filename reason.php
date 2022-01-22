<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
    
    <br><br> <br><br> <br>
    <center>
    <p style="font-size:30px; margin-top:150px;">Reason for bonafide Certificate</p>
	<form action="bonafide.php" >
        <select required name="reason" id="r" style="font-size:25px; margin-top:5px;">
            <option value="" disabled selected hidden>Please Choose...</option>
            <option value="reason" name="reason">Bus Concession</option>
            <option value="reason" name="reason">Income Certificate</option>
            <option value="reason" name="reason">Industrial visit for project work</option>
            <option value="reason" name="reason">Educational loans</option>
            <option value="reason" name="reason">Visa Applications</option>
        </select>							
	</form>
    
    <br><br> <br><br><br> <br><br><br>
    <a href="bonafide.php" target="_blank"><input type="button" name="submit" value="SUBMIT"></a>
    <input type="button" id="cancel" style=" margin-left: 200px;" name="cancel" value="CANCEL" onClick="window.location='student-choose.php';"/>
    <br><br><br><br>
    </center>
</body>
</html>