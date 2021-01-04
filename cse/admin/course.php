<?php

    session_start();

    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
    }

    $conn = mysqli_connect('localhost', 'root', '', 'cse');
    $sql = "SELECT * from course";
     $result = mysqli_query($conn, $sql);
    
   

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand">
    <div class="container">
      <a class="navbar-brand" href="#">ADMIN</a>
    <div>
    <ul class="navbar-nav mr-auto">
            <li class="nav-item px-3"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item px-3"><a href="notice.php" class="nav-link">Notice</a></li>
            <li class="nav-item px-3 "><a href="event.php" class="nav-link">Event</a></li>
            <li class="nav-item px-3"><a href="faculty.php" class="nav-link">Faculty</a></li>
            <li class="nav-item px-3 active"><a href="course.php" class="nav-link">Courses</a></li>
            <li class="nav-item px-3"><a href="facility.php" class="nav-link">Facility</a></li>
            <li class="nav-item px-3"><a href="contacts.php" class="nav-link">Inbox</a></li>
                <li class="nav-item px-3">
                <a href="logout.php" class="btn  text-white">Logout</a>
                </li>
       </ul>
    </div>
    </div>
  </nav>


  <?php if(isset($_SESSION['edit'])) { ?>
            <div class="alert alert-success text-center m-0">
                <strong>success!</strong> Updated Successfully
            </div>
            
     <?php } ?>

     <?php if(isset($_SESSION['add'])) { ?>
            <div class="alert alert-success text-center m-0">
                <strong>success!</strong> Data Added Successfully
            </div>
            
     <?php } ?>

  <section class="notice">
  <div class="container py-5 ">
        <div class="row">
            <div class="col-md-12">
               <!-- <h3><a href="notice-add.php">+ Add Notice</a></h3>-->
                <div class="card">
                    <div class="card-header">
                       <h1 class="text-center"> Courses</h1>
                    </div>
                    <div class="card-body">
                        
                    <a href="course-add.php" class="btn btn-primary add mb-5 mt-3">+ Add Course</a>
                           
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                
                                    
                                     <div class="row">
                                         <div class="col-lg-12 ">
                                                <table class="ml-5">
                                                    <h1 class="text-center"><?php echo $row['name'] ?></h1>
                                                    <tr>
                                                        <th>Course Title</th>
                                                        <th>Course Code</th>
                                                        <th>Credits</th>
                                                        <th>Advisor</th>
                                                        <th>Course Teacher</th>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $row['course-title1'] ?></td>
                                                        <td><?php echo $row['course-code1'] ?></td>
                                                        <td><?php echo $row['course-credits1'] ?></td>
                                                        <td><?php echo $row['course1'] ?></td>
                                                        <td><?php echo $row['course-teacher1'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><?php echo $row['course-title2'] ?></td>
                                                        <td><?php echo $row['course-code2'] ?></td>
                                                        <td><?php echo $row['course-credits2'] ?></td>
                                                        <td></td>
                                                        <td><?php echo $row['course-teacher2'] ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td><?php echo $row['course-title3'] ?></td>
                                                        <td><?php echo $row['course-code3'] ?></td>
                                                        <td><?php echo $row['course-credits3'] ?></td>
                                                        <td></td>
                                                        <td><?php echo $row['course-teacher3'] ?></td>
                                                    </tr>
                                                   
                                                    
                                                    
                                                    <?php if(!empty($row['course-code4'])) : ?>
                                                        <tr>
                                                                <td><?php echo $row['course-title4'] ?></td>
                                                                <td><?php echo $row['course-code4'] ?></td>
                                                                <td><?php echo $row['course-credits4'] ?></td>
                                                                <td></td>
                                                                <td><?php echo $row['course-teacher4'] ?></td>
                                                            </tr>
                                                     <?php endif; ?>

                                                     <?php if(!empty($row['course-code5'])) : ?>
                                                        <tr>
                                                                <td><?php echo $row['course-title5'] ?></td>
                                                                <td><?php echo $row['course-code5'] ?></td>
                                                                <td><?php echo $row['course-credits5'] ?></td>
                                                                <td></td>
                                                                <td><?php echo $row['course-teacher5'] ?></td>
                                                            </tr>
                                                     <?php endif; ?>

                                                     <?php if(!empty($row['course-code6'])) : ?>
                                                        <tr>
                                                                <td><?php echo $row['course-title6'] ?></td>
                                                                <td><?php echo $row['course-code6'] ?></td>
                                                                <td><?php echo $row['course-credits6'] ?></td>
                                                                <td></td>
                                                                <td><?php echo $row['course-teacher6'] ?></td>
                                                            </tr>
                                                     <?php endif; ?>

                                                     <?php if(!empty($row['course-code7'])) : ?>
                                                        <tr>
                                                                <td><?php echo $row['course-title7'] ?></td>
                                                                <td><?php echo $row['course-code7'] ?></td>
                                                                <td><?php echo $row['course-credits7'] ?></td>
                                                                <td></td>
                                                                <td><?php echo $row['course-teacher7'] ?></td>
                                                            </tr>
                                                     <?php endif; ?>

                                                     <?php if(!empty($row['course-code8'])) : ?>
                                                        <tr>
                                                                <td><?php echo $row['course-title8'] ?></td>
                                                                <td><?php echo $row['course-code8'] ?></td>
                                                                <td><?php echo $row['course-credits8'] ?></td>
                                                                <td></td>
                                                                <td><?php echo $row['course-teacher8'] ?></td>
                                                            </tr>
                                                     <?php endif; ?>
                                                   
                                                </table>

                                        </div>
                                       
                                        <div class="col-lg-6 offset-3 mt-5 text-center">
                                               
                                                <a href="course-delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"> Delete </a>
                                        </div>
                                        
                                     </div>
                                     <hr> <hr>
                                
                                         <br>
                                      
                            <?php } ?>
                            
                       
                        
                    </div>
                </div>
            </div>
           
        </div>
    </div>

  </section>

  <footer class="text-center bg-dark py-3">
      <p class="text-white">All copyright reserved 2020</p>
  </footer>

  <?php unset($_SESSION['edit']) ?>
  <?php unset($_SESSION['add']) ?>


    


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>