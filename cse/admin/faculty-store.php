<?php

$random =rand(999, 999999999999);

$img = 'upload/'.$random. $_FILES['img']['name'];


move_uploaded_file($_FILES['img']['tmp_name'], $img);

$name = $_POST['name'];
$designation = $_POST['designation'];
$qualification = $_POST['qualification'];
$institute = $_POST['institute'];

$conn = mysqli_connect('localhost', 'root', '', 'cse');
     $sql = "INSERT INTO facultys VALUES(NULL,'$img','$name' , '$designation' , '$qualification', '$institute')";
     if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION['add_f'] = true;
        header("Location: faculty.php");
     }
       