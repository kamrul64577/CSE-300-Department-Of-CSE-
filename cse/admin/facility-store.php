<?php

$random =rand(999, 999999999999);

$img = 'upload/'.$random. $_FILES['img']['name'];


move_uploaded_file($_FILES['img']['tmp_name'], $img);

$title = $_POST['title'];
$facility_details = $_POST['facility_details'];

$conn = mysqli_connect('localhost', 'root', '', 'cse');
     $sql = "INSERT INTO facility VALUES(NULL,'$title', '$img', '$facility_details')";
       if(mysqli_query($conn,$sql)) {
          session_start();
          $_SESSION['add_n'] = true;
          header("Location: facility.php");
       }
       