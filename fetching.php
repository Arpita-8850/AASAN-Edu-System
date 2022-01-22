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
    
    <br><br> <br><br> <br><br>
    <center>
        <?php
			$conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));
            $_SESSION['sId'] = $sId;
            $query = "SELECT * FROM students WHERE sr='$sId' ";
            $query_run = mysqli_query($conn,$query);					
            $row = mysqli_fetch_assoc($query_run);		 
		?>
        
        <h1> Leaving Certificate</h1>
        <br><br>
        
        <table class="table table-hover table-striped"  style="width: 80%;  font-size: 23px;">	
            <thead style="background-color: #2765C1; color: white; font-size: 26px; ">
                <tr>
                    <th>Section</th>
                    <th>Status</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tr>
                <td> Library Dues</td>
                <td> <?php echo $row['librarystatus']; ?> </td>
                <td> <?php echo $row['lia']; ?> </td>
            </tr>
            <tr>
                <td> Hostel Dues </td>
                <td> <?php echo $row['hostelstatus']; ?> </td>
                <td> <?php echo $row['hoa']; ?> </td>
            </tr>
            <tr>
                <td> Workshop Dues </td>
                <td> <?php echo $row['workshopstatus']; ?> </td>
                <td> <?php echo $row['woa']; ?> </td>
            </tr>
            <tr>
                <td> Department Dues</td>
                <td> <?php echo $row['departmentstatus']; ?> </td>
                <td> <?php echo $row['dea']; ?> </td>
            </tr>
            <tr>
                <td> All Exam cleared </td>
                <td> <?php echo $row['ktstatus']; ?> </td>
                <td></td>
            </tr>
            <tr>
                <td> All Fees cleared </td>
                <td> <?php echo $row['feestatus']; ?> </td>
                <td></td>
            </tr>
            <tr>
                <td> Documents verified</td>
                <td> <?php echo $row['documentstatus']; ?> </td>
                <td></td>
            </tr>
        </table>
        <br>
        <?php    
            if($row['librarystatus']=="Yes" 
                && $row['hostelstatus']=="Yes" 
                && $row['workshopstatus']=="Yes" 
                && $row['departmentstatus']=="Yes"
                && $row['ktstatus']=="Yes"
                && $row['documentstatus']=="Yes") 
            {      
                if($row['gpmlc']=="Yes") 
                {
                    echo '<div id="note">Your LC had already been printed.</div><br>';
                } 
                else 
                {
                echo '<a href="lc.php" target="_blank"><input type="button" name="submit" value="SUBMIT";/></a>';                        
                }
            } 
            else 
            { 
                echo '<div id="note">Dues not completed or documents not verified.</div><br>';
                echo '<a href="payment.php" target="_blank"><input type="button" name="payment" value="PAYMENT";/></a>';
            }
        ?> 
       <input type="button" id="cancel" style=" margin-left: 200px;" name="cancel" value="CANCEL" onClick="window.location='login.php';"/>
       <br><br><br><br>
    </center>

    <script>
        AOS.init({
        duration: 1500,
        })
    </script>
</body>
</html>