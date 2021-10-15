<?php
include_once 'database.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>OUR TEAM</title>
	<meta charset="utf-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="landing is-preload">
	<div id="page-wrapper">
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

				</section>
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