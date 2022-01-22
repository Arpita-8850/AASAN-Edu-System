<?php
$con = mysqli_connect("localhost","root","","image");

if (isset($_POST['upload'])) {
    $file = $_FILES['image']['name'];

    $query = "INSERT INTO upload(image) VALUES('$file')";

    $res = mysqli_query($con,$query);

    if ($res) {
        move_uploaded_file($_FILES['image']['tmp_name'], "$file");
    }
}
?>
