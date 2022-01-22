<?php
    $conn = mysqli_connect("localhost", "root", "", "lc");
    
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $phone = $_REQUEST["phone"];
    $gender = $_REQUEST['gender'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST["address"];
    $city = $_REQUEST["city"];
    $pin = $_REQUEST["pin"];
    $state = $_REQUEST["state"];
    $country = $_REQUEST["country"];
    $doc = $_REQUEST["doc"];
    
    $sql = "INSERT INTO courier(fname, lname, phone, gender, email, address, city, pin, state, country, doc) 
            VALUES ('$fname','$lname', '$phone', '$gender','$email','$address','$city','$pin','$state','$country','$doc')";
    
    if(mysqli_query($conn, $sql)){
        header("Location:payment-form.php");
    } 
    else{
        $target = "form.php";
        $linkname = "mylink";
        echo "Data not saved. Sign up again"; 
        link($target, $linkname);
    }
 
    mysqli_close($conn);   
?>

