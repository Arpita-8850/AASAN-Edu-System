<!DOCTYPE html>
<head>
    
    <link href="form-style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
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
    <div class="Rectangle1">
        <center>
            <h1>Upload Your Payment Receipt Here:</h1>
            <form method="post" enctype="multipart/form-data">
                <label for="img">Select image:</label>
                <input type="file" name="image" class="form-control">               
                <br><br><br><br>
                <input type="submit" name="upload" value="UPLOAD">
                <input type="button" style="margin-left: 200px;" id="cancel" name="payment" value="PAY FEES" onClick="window.location='payment.php';"/>
            </form>
        </center>
    </div>
    <?php
        $con = mysqli_connect("localhost","root","","image");

        if (isset($_POST['upload'])) {
            $file = $_FILES['image']['name'];

            $query = "INSERT INTO upload(image) VALUES('$file')";

            $res = mysqli_query($con,$query);

            if ($res) {
                move_uploaded_file($_FILES['image']['tmp_name'], "$file");
            }
            header("Location: image-uploaded.php");
        } 
    ?>
</body>
</html>