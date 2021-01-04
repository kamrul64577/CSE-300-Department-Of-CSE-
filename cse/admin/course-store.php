<?php

$name = $_POST['name'];

$course1 = $_POST['course1'];
$course_code1 = $_POST['course-code1'];
$course_title1 = $_POST['course-title1'];
$course_credits1 = $_POST['course-credits1'];
$course_teacher1 = $_POST['course-teacher1'];


$course_code2 = $_POST['course-code2'];
$course_title2 = $_POST['course-title2'];
$course_credits2 = $_POST['course-credits2'];
$course_teacher2 = $_POST['course-teacher2'];



$course_code3 = $_POST['course-code3'];
$course_title3 = $_POST['course-title3'];
$course_credits3 = $_POST['course-credits3'];
$course_teacher3 = $_POST['course-teacher3'];



$course_code4 = $_POST['course-code4'];
$course_title4 = $_POST['course-title4'];
$course_credits4 = $_POST['course-credits4'];
$course_teacher4 = $_POST['course-teacher4'];



$course_code5 = $_POST['course-code5'];
$course_title5 = $_POST['course-title5'];
$course_credits5 = $_POST['course-credits5'];
$course_teacher5 = $_POST['course-teacher5'];



$course_code6 = $_POST['course-code6'];
$course_title6 = $_POST['course-title6'];
$course_credits6 = $_POST['course-credits6'];
$course_teacher6 = $_POST['course-teacher6'];



$course_code7 = $_POST['course-code7'];
$course_title7 = $_POST['course-title7'];
$course_credits7 = $_POST['course-credits7'];
$course_teacher7 = $_POST['course-teacher7'];



$course_code8 = $_POST['course-code8'];
$course_title8 = $_POST['course-title8'];
$course_credits8 = $_POST['course-credits8'];
$course_teacher8 = $_POST['course-teacher8'];



$conn = mysqli_connect('localhost', 'root', '', 'cse');

     $sql = "INSERT INTO course VALUES(NULL, '$name', '$course1', '$course_code1', '$course_title1',          
     '$course_credits1', '$course_teacher1' , 


     '$course_code2', '$course_title2',  '$course_credits2', '$course_teacher2', 

     '$course_code3', '$course_title3',  '$course_credits3', '$course_teacher3', 

     '$course_code4', '$course_title4',  '$course_credits4', '$course_teacher4',

     '$course_code5', '$course_title5',  '$course_credits5', '$course_teacher5',  

      '$course_code6', '$course_title6',  '$course_credits6', '$course_teacher6', 

      '$course_code7', '$course_title7',  '$course_credits7', '$course_teacher7',
                
      '$course_code8', '$course_title8',  '$course_credits8', '$course_teacher8')";

      if(mysqli_query($conn,$sql)){
           session_start();
           $_SESSION['add'] = true;
           header("Location: course.php");

      } 
      else{
           echo "error";
      }
?>
      