<?php
     $conn = mysqli_connect('localhost', 'root', '', 'cse');
     $sql = "SELECT * from course";
       $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">ABC</a>
    <div>
      <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a href="logout.php" class="btn  text-white">Logout</a>
            </li>
       </ul>
    </div>
    </div>
  </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-2">

                <form action="course-store.php" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="name"><h1>Semester</h1></label>
                        <input type="text" name="name" placeholder="Enter Semester Number" class="form-control">
                    </div>
                    <br> <br>
                    <div class="form-group">
                        <label for="course1"><h4>Course Advisor </h4></label>
                        <input type="text" name="course1" placeholder="Enter Course Advisor name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-code1"><h4>Course Code </h4></label>
                        <input type="text" name="course-code1" placeholder="Enter Course code " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-title1"><h4>Course Title</h4></label>
                        <input type="text" name="course-title1" placeholder="Enter Course Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-credits1"><h4>Course Credits</h4></label>
                        <input type="text" name="course-credits1" placeholder="Enter Course Credits" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="course-teacher1"><h4>Course Teacher</h4></label>
                        <input type="text" name="course-teacher1" placeholder="Enter Course Teacher" class="form-control">
                    </div>
                    <br> <br> <br>



                    
                    <div class="form-group">
                        <label for="course-code2"><h4>Course Code </h4></label>
                        <input type="text" name="course-code2" placeholder="Enter Course code " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-title2"><h4>Course Title</h4></label>
                        <input type="text" name="course-title2" placeholder="Enter Course Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-credits2"><h4>Course Credits</h4></label>
                        <input type="text" name="course-credits2" placeholder="Enter Course Credits" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="course-teacher2"><h4>Course Teacher</h4></label>
                        <input type="text" name="course-teacher2" placeholder="Enter Course Teacher" class="form-control">
                    </div>
                    <br><br><br>



                   
                    <div class="form-group">
                        <label for="course-code3"><h4>Course Code </h4></label>
                        <input type="text" name="course-code3" placeholder="Enter Course code " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-title3"><h4>Course Title</h4></label>
                        <input type="text" name="course-title3" placeholder="Enter Course Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-credits3"><h4>Course Credits</h4></label>
                        <input type="text" name="course-credits3" placeholder="Enter Course Credits" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="course-teacher3"><h4>Course Teacher</h4></label>
                        <input type="text" name="course-teacher3" placeholder="Enter Course Teacher" class="form-control">
                    </div>
                    <br><br><br>




                    
                    <div class="form-group">
                        <label for="course-code4"><h4>Course Code </h4></label>
                        <input type="text" name="course-code4" placeholder="Enter Course code " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-title4"><h4>Course Title</h4></label>
                        <input type="text" name="course-title4" placeholder="Enter Course Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-credits4"><h4>Course Credits</h4></label>
                        <input type="text" name="course-credits4" placeholder="Enter Course Credits" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="course-teacher4"><h4>Course Teacher</h4></label>
                        <input type="text" name="course-teacher4" placeholder="Enter Course Teacher" class="form-control">
                    </div>
                    <br><br><br>




                    
                    <div class="form-group">
                        <label for="course-code5"><h4>Course Code </h4></label>
                        <input type="text" name="course-code5" placeholder="Enter Course code " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-title5"><h4>Course Title</h4></label>
                        <input type="text" name="course-title5" placeholder="Enter Course Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-credits5"><h4>Course Credits</h4></label>
                        <input type="text" name="course-credits5" placeholder="Enter Course Credits" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="course-teacher5"><h4>Course Teacher</h4></label>
                        <input type="text" name="course-teacher5" placeholder="Enter Course Teacher" class="form-control">
                    </div>
                    <br><br><br>



                    
                    <div class="form-group">
                        <label for="course-code6"><h4>Course Code </h4></label>
                        <input type="text" name="course-code6" placeholder="Enter Course code " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-title6"><h4>Course Title</h4></label>
                        <input type="text" name="course-title6" placeholder="Enter Course Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-credits6"><h4>Course Credits</h4></label>
                        <input type="text" name="course-credits6" placeholder="Enter Course Credits" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="course-teacher6"><h4>Course Teacher</h4></label>
                        <input type="text" name="course-teacher6" placeholder="Enter Course Teacher" class="form-control">
                    </div>
                    <br><br><br>




                    
                    <div class="form-group">
                        <label for="course-code7"><h4>Course Code </h4></label>
                        <input type="text" name="course-code7" placeholder="Enter Course code " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-title7"><h4>Course Title</h4></label>
                        <input type="text" name="course-title7" placeholder="Enter Course Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-credits7"><h4>Course Credits</h4></label>
                        <input type="text" name="course-credits7" placeholder="Enter Course Credits" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="course-teacher7"><h4>Course Teacher</h4></label>
                        <input type="text" name="course-teacher7" placeholder="Enter Course Teacher" class="form-control">
                    </div>
                    <br><br><br>



                  
                    <div class="form-group">
                        <label for="course-code8"><h4>Course Code </h4></label>
                        <input type="text" name="course-code8" placeholder="Enter Course code " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-title8"><h4>Course Title</h4></label>
                        <input type="text" name="course-title8" placeholder="Enter Course Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="course-credits8"><h4>Course Credits</h4></label>
                        <input type="text" name="course-credits8" placeholder="Enter Course Credits" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="course-teacher8"><h4>Course Teacher</h4></label>
                        <input type="text" name="course-teacher8" placeholder="Enter Course Teacher" class="form-control">
                    </div>
                   


                   

                    <input type="submit" value="Submit">
                </form>

            </div>
        </div>
    </div>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>