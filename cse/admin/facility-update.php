<?php

    $id = $_GET['id'];
    $title = $_POST['title'];
    $facility_details = ($_POST['facility_details']);
    

    $conn = mysqli_connect('localhost', 'root', '', 'cse');
    
    
    $sql = "SELECT * FROM facility WHERE id = '$id' ";
    $result = mysqli_query($conn,$sql);
    
    $data = mysqli_fetch_assoc($result);
    

    $pdf1 = '';
    $update_sql = "UPDATE facility SET title = '$title' , facility_details = '$facility_details'";

if(!empty($_FILES['img']['name'])) {
    $random =rand(999, 999999999999);

    $pdf = 'upload/'.$random. $_FILES['img']['name'];
     move_uploaded_file($_FILES['img']['tmp_name'], $img);

    $update_sql .= ",img = '$img'";
    if(!empty($data['img'])) {
        unlink($data['img']);
    }
}

  
  
  $update_sql .= "WHERE id = '$id' ";
  if(mysqli_query($conn,$update_sql)){
      session_start();
      $_SESSION['edit_n'] = true;
      header("Location:facility.php");
  }
  