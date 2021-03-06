<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="fonts/font.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!--START HEADER-->
  <header class="bg-light">
    <div class="container">
        <div class="row heading py-3">
            <a class="navbar-brand" href="#home"><img class="img-fluid" src="img/logo.png" alt=""></a>
          <div class="col-md-10 text-center">
            <h3>North East University Bangladesh</h3>
            <h1>Computer Science & Engineering</h1>
           </div>
         </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            
            <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#navbarNav">
                <i class="navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item "><a class="nav-link" href="faculty.php">Faculty</a></li>
                    <li class="nav-item "><a class="nav-link" href="admission.php">Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="course-outline.php">Course Outline</a></li>
                    <li class="nav-item "><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item active"><a class="nav-link" href="about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
 <!--END HEADER-->



 <!--START ABOUT CSE SECTION-->
 <section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row">
             <div class="col-md-12">
                <h1>Department Of Computer Science & Enginering</h1>
                <img class="img-fluid" src="img/about-cse.jpg" alt="">
            </div>
            <div class="col-md-12 pt-5">
                <h3 class="text-center"><span>A</span>bout <span>C</span>SE</h3>
                <p class="lead">The Department of Computer Science and Engineering (CSE) was established in North East University Bangladesh (NEUB) at the year of 2012. It established with the mission to educate students in the field of ICT from all over the country, including those from our rural areas, so that they become enlightened individuals, improving the living standards of their Families, Industry and Society.
                   .</p>
               <p> The program offers the most comprehensive studies in the field of computer science in Bangladesh. The aim is to train computer science experts and developers who have a balanced understanding of the field, capable of considering the user, the technological, the environmental, and the societal points of view.
                </p>
                <p>Computer Science and Engineering of NEUB prepare students for a range of career opportunities in hardware and computer system design, computer networks, software engineering, data communication, multimedia processing, and internet and information technology. Graduate can expect to take up jobs in government departments, software companies, service organizations such as banks, airlines and public utilities, commercial organizations, and manufacturing sector. More firms around the world are being computerized every year, and they require computer professional to manage them.</p>
            </div>
            
        </div>
    </div>

</section>
<!--END ABOUT CSE SECTION-->



 


<!--START CONTACT SECTION-->
<section id="Contact">
  <div class="container">
    <h1 class="text-center text-light">Get in Touch</h1>
      <div class="row">
          <div class="col-md-6">
              <form class="contact-form" action="admin/contact.php" method = "POST">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your name" name="name">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Mobile No.">
                  </div>
                  <div class="form-group">
                      <input type="Email" class="form-control" placeholder="Email Id" name="email">
                  </div>
                  <div class="form-group">
                      <textarea name="msg" class="form-control" rows="4" placeholder="Message"></textarea>
                  </div>
                  <input type="submit" class="btn btn-primary" value="Send Message"> 
              </form>
          </div>
          <div class="col-md-6 contact-info">
              <div class="follow"><b>Address:</b> <i class="fa fa-map-marker"></i>Sheikhghat - Kazirbazar Rd,Sylhet 3100</div>
              <div class="follow"><b>Telephone:</b><i class="fa fa-phone"></i> 0821-710221</div>
              <div class="follow"><b>Mobile:</b><i class="fa fa-mobile-phone"></i>01755566994</div>

              <div class="follow"><b>Facebook:</b><i class="fa fa-facebook"></i><a
                      href="https://www.facebook.com/NorthEastUniversityBangladesh/">NEUB-facebook page</a>
              </div>

              <div class="follow"><b>Email</b><i class="fa fa-envelope-o"><a href="https://www.neub.edu.bd/"></a></i> info@neub.edu.bd
              </div>
           </div>
       </div> 
  </div>
</section>
<!--END CONTACT SECTION-->


<!--START FOOTER-->
<section id="footer">
    <div class="container text-center">
         <p>Made with <i class="fa fa-heart-o"></i> End project</p>
     </div>
</section>
<!--END FOOTER-->

  <!--Js SCRIPT-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>

  <script src="https://kit.fontawesome.com/6ff3dbda61.js" crossorigin="anonymous"></script>


</body>

</html>












