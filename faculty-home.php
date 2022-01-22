<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
   
    <?php
        $conn = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));  
        session_start();
        $fId = $_SESSION['fId'];
                
        $sql = "SELECT Name FROM users WHERE User_Id ='$fId'";
        $selectResult = mysqli_query($conn,$sql);
		
        $studentDetails = mysqli_fetch_assoc($selectResult);  
        $fName = $studentDetails["Name"];
    ?>
     <div class="ExamPortal">AASAN Edu System</div>

    <div class="Frame1">
        <a class="name"><?php echo " Welcome {$fName}!"; ?></a>
        <a href="login.php" class='logout' id='logout'>LOGOUT</a>
    </div>

    <br><br> <br><br> <br><br> <br><br> 
    <center>
        <div class="table-responsive">
            <table class="table table-hover table-striped"  style="width: 70%;  font-size: 20px;" >
                <thead style="background-color: #2765C1; color: white; font-size: 25px; ">
                    <tr>
                        <th>First Name</th>
                        <th>Last</th>
                        <th>Phone No</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Pin Code</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Document Needed</th>
                        <th>Fee Status</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $db = mysqli_connect("localhost", "root", "", "lc") or die(mysqli_error($conn));  
                        $records = mysqli_query($db,"SELECT * FROM courier"); // fetch data from database
                        while($data = mysqli_fetch_array($records))
                        {
                    ?>

                    <tr>
                        <td><?php echo $data['fname']; ?></td>
                        <td><?php echo $data['lname']; ?></td>
                        <td><?php echo $data['phone']; ?> min</td> 
                        <td><?php echo $data['gender']; ?></td> 
                        <td><?php echo $data['email']; ?></td> 
                        <td><?php echo $data['address']; ?></td> 
                        <td><?php echo $data['city']; ?></td> 
                        <td><?php echo $data['pin']; ?></td> 
                        <td><?php echo $data['state']; ?></td> 
                        <td><?php echo $data['country']; ?></td> 
                        <td><?php echo $data['doc']; ?></td> 
                        <td></td> 
                        <td><a><img src="edit.png"  id="icon"></a></td>
                        <td><a><img src="dustbin.png"  id="icon"></a></td>
                    </tr>	
                    <?php
                        }
                    ?>
                
                </tbody>
            </table> 
        </div>
    </center>
</body>
</html>