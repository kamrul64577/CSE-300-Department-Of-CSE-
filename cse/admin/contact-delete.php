<?php

$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'cse');


$sql = "SELECT * FROM contacts WHERE id = '$id' ";
$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);






$sql = "DELETE FROM contacts WHERE id = '$id' ";
       
mysqli_query($conn,$sql);

       header("Location: contacts.php");

?>
