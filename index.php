<?php
include_once 'database.php';
 ?>

<!DOCTYPE HTML>

<html>
  <head>
    <title>EUROMAX DRIVING SCHOOL & COMPUTER COLLEGE</title>
    
    <meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="landing is-preload">
    <div id="page-wrapper">

      <!-- Header -->
        <header id="header" class="alt " style="background-color: black;" >
          <h1><a href="index.html">EUROMAX DRIVING SCHOOL & COMPUTER COLLEGE</a></h1>
          <nav id="nav">
            <ul>
              <li><a href="index.php">Home</a></li>
              <!-- <li> -->
                <!-- <a href="#" class="icon solid fa-angle-down">Layouts</a>
                <ul> -->
                  <li><a href="#">About Us</a>
                    <ul>
                    <li><a href="team.php">Our Team</a></li>
                      <li><a href="videos.php">Tutorials</a></li>
                      <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.php">Contact</a></li>
                  
                  <li><a href="courses.php">Courses</a></li>
                  <li><a href="login.php">Login</a></li>
                  
                </ul>
              </li>
              
              <!-- <li><a href="#" class="button">Sign Up</a></li> -->
            </ul>

          </nav>
        </header>

      <!-- Banner -->
        <section id="banner" style="background-image:url(images/roadsigns.jpg);alignment-baseline: stretch;background-repeat: no-repeat;
        background-size: cover;">

        
        </section>

      <!-- Main -->
        <section id="main" class="container">

          <section class="box special">
            <header class="major">
              <h2><strong>EUROMAX DRIVING SCHOOL AND COMPUTER COLLEGE</strong></h2>
              <p>Euromax Driving School & computer college offers a comprehensive list of services for teenage first-time drivers and computer partakers, new adult learners and existing drivers with lapsed licenses.</p>
            </header>
            <span class="image featured"><img src="images/WhatsApp Image 2021-10-06 at 4.13.30 AM (1).jpeg" alt="" /></span>
          </section>

          <section class="box special features">
            <div class="features-row">
              <section>
                <img src="images/pic3.jpg" alt="" class="icon solid major fa-chart-area accent3">
                <h3>Expert Driver Preparation</h3>
                <p>We offer top-notch driving instruction designed to help prepare you for the challenges of driving, avoid aggressive drivers and observe road signs and laws.</p>
              </section>
              <section>
                <img src="images/pic6.jpg" class="icon solid major fa-chart-area accent3">
                <h3>Drive Safer For Parents</h3>
                <p>We've taught hundreds of local teenagers to drive safely. You can trust us with your son's or daughter's driver education - we take pride in helping our drivers stay crash-free.</p>
              </section>
            </div>
            <div class="features-row">
              <section>
                
                <img src="images/pic5.jpg" class="icon solid major fa-chart-area accent3">
                <h2>What We Offer</h2>
              <p>Euromax Driving School & computer college offers a comprehensive list of services for teenage first-time drivers and computer partakers, new adult learners and existing drivers with lapsed licenses.</p>
              </section>
              <section>
                <img src="images/pic2.jpg" class="icon solid major fa-chart-area accent3">
                <h3>goal</h3>
                <p>The goals of the computer and are to prepare students for graduate training in some specialized area of computer science, to prepare students for jobs in industry, business or government, and to provide support courses for students in engineering, mathematics and other fields requiring computing skills.</p>
              </section>
            </div>
          </section>

          <h4 style="text-align: center;"><strong>Trophies</strong> </h4>
                    
          <div class="row">
<?php
           $sql = "SELECT * FROM uploads";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                   // output data of each row
                     while($row = $result->fetch_assoc()) {

                      
                       $img = $row["name"];

                       echo '
              
              <div class="col-3 col-12-narrower">
              <section class="box special">
                <span class="image featured">
                  <img src="./uploads/'.$row['name'].'" />
                </span>
                
                
                
              </section>
                </div>
                ';

                     

                      
                       }
                                  }
                                  ?>
             </div>
  

</div>
  <footer class="ftco-footer ftco-section" style="margin-top:5px;color: white;" style="background-color: white;" id="about">
      <div class="container"  >
        <div class="row">

          </div>
        </div>
        <div class="row mb-5"style="background-color:#081828;color:white;" >
          <div class="col-md">
            <div class="ftco-footer-widget mb-4" style="padding-right:  150px;">
              <h2 class="ftco-heading-2" style="color: white;">CONTACTS</h2>
              <p>we are locatd in emali makueni county</p>
              <p>P.O Box 81-90121,Emali-Kenya</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5" style="list-style-type: none;">
                <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md" >
            <div class="ftco-footer-widget mb-4 ml-md-5" style="padding-right:  150px;text-align: center;" >
              <h2 class="ftco-heading-2" style="color: white;">Menu</h2>
             <ul style="list-style-type: none;">
                <li><a href="index.html" class="py-2 d-block">Home</a></li>
                <a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Our Instructor</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2" style="color: white;">CONTACTS</h2>
              <div class="d-flex">
                <ul style="list-style-type: none;" >
                  <li><a href = "mailto:info@euromaxdrivingsch.org">click to send mail</a></li>
                  <li><a href="#" class="py-2 d-block">0707183976</a></li>
                  <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                  <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Footer -->


        
          <div class="icons" style="list-style-type: none; display: flex;padding-left: 50%;">
            <div><a href="#" class="icon brands fa-twitter" style="margin-right: 20px;"><span class="label" >Twitter</span></a></div>
            <div><a href="#" class="icon brands fa-facebook-f" style="margin-right: 20px;"><span class="label">Facebook</span></a></div>
            <div><a href="#" class="icon brands fa-instagram"><span class="label"style="margin-right:20px;">Instagram</span></a></div>
            
          </div>
              </div>
            </div>
          </div>
        </div>
      
        <div class="row" style="align-content: center; padding-left:40%;" >
           <div >
            <p
             style="background-color:white;color:black;">
              Copyright ©<script>document.write(new Date().getFullYear());</script>2020 All rights reserved              
            </p>
            </div>
        </div>
    </footer>
     

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>