<?php

$random =rand(999, 999999999999);

$pdf = 'upload/'.$random. $_FILES['pdf']['name'];


move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf);

$title = $_POST['title'];
$notice_details = $_POST['notice-details'];

$conn = mysqli_connect('localhost', 'root', '', 'cse');
     $sql = "INSERT INTO notices VALUES(NULL,'$title', '$pdf', '$notice_details')";
       if(mysqli_query($conn,$sql)) {
          session_start();
          $_SESSION['add_n'] = true;
          header("Location: notice.php");
       }
       