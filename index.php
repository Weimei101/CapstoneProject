<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ITSD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/ui3.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">


      <div class="logo">
        <h1><a href="index.html"><span>IT</span>SD</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
       
      <nav id="navbar" class="navbar">
        <ul>
        
          <li><a class="nav-link scrollto active" href="#hero">HOME</a></li>
          <li><a class="nav-link scrollto" href="#services">SERVICES</a></li>
          <li><a href="#"  data-bs-toggle="modal" data-bs-target="#registermodal">REGISTER</a></li>                  
          <li class="dropdown"><a href="#"><span> ACCOUNT</span> <i class="bi bi-chevron-down"></i></a>
          
            <ul>
              <li><a href="dashboard.php" data-bs-toggle="modal" data-bs-target="#UserModal">Login User</a></li>
              <li><a href="dashboard.php" data-bs-toggle="modal" data-bs-target="#AdminModal">Login Admin</a></li>
              
            </ul>
          </li>
        
        </ul>
      
      </nav><!-- .navbar -->  

    </div>
  </header><!-- End Header -->

  <!-- ======= landing page first ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(img/ui4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">iStockIT: Inventory Checker for ITSD</h2>
                <p class="animate__animated animate__fadeInUp"> Information Technology Services Department</p>
                <a href="dashboard.php"  data-bs-toggle="modal" data-bs-target="#registermodal" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(img/ui.jpg)">
            <div class="carousel-container">
              <div class="container">              
                <h2 class="animate__animated animate__fadeInDown">iStockIT: Inventory Checker for ITSD</h2>
                <p class="animate__animated animate__fadeInUp">Information Technology Services Department</p>
                <a href="dashboard.php"  data-bs-toggle="modal" data-bs-target="#registermodal" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>
           <!--muni nisa ang sa slid2-->         
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

     </div>
    </div>
  </section><!-- End of the landing page Section -->
        
    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-briefcase"></i>
                  </a>
                  <h4>Trouble</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-card-checklist"></i>
                  </a>
                  <h4>Troubleshooting</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-bar-chart"></i>
                  </a>
                  <h4>CompTIA Network</h4>
                  <p>
                    This certification involves mastery of installing, maintaining and solving common issues with digital networks..
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-binoculars"></i>
                  </a>
                  <h4>Social Marketer </h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-brightness-high"></i>
                  </a>
                  <h4>Seo Expart</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-calendar4-week"></i>
                  </a>
                  <h4>24/7 Support</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section -->


            <!-- Modal -->
         <!-- Modal nisa sa REGISTER --> 
      <div class="modal fade" id="registermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-danger">
              <h4 class="modal-title text-white" id="exampleModalLabel">Register Now</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Modal USER REGISTER form -->
                <form action="process.php" method="POST">

                        <div class="input-group"style="border: 3px solid;">                
                      <div class="input-group-text  bg-danger text-white">
                      <i class="bi bi-person-circle"></i>
                      
                      </div>
                      <input type="text" name="fname"class="form-control" placeholder="Your First Name:">
                  </div><br>
                      <div class="input-group" style="border: 3px solid;">
                      <div class="input-group-text bg-danger text-white">
                      <i class="bi bi-person-check-fill"></i>
                  </div>
                      <input type="text"name="lname" class="form-control" placeholder="Your Last Name:">
                  </div><br>
                  <div class="input-group" style="border: 3px solid;">
                      <div class="input-group-text bg-danger text-white">
                      <i class="bi bi-envelope-arrow-up-fill"></i>               
                  </div>
                      <input type="email" name="email" class="form-control" placeholder="Your Email">
                  </div><br>
                  <div class="input-group" style="border: 3px solid;">
                      <div class="input-group-text bg-danger text-white">
                      <i class="bi bi-lock-fill"></i>              
                  </div>
                      <input type="password"name="password" class="form-control" placeholder=" Password:">
                  </div><br>
                  <div class="input-group" style="border: 3px solid;">
                      <div class="input-group-text bg-danger text-white">
                      <i class="bi bi-clipboard-check-fill"></i>             
                  </div>
                      <input type="text" name="schoolid" class="form-control" placeholder="School ID:">
                  </div><br>
                  <div class="input-group"style="border: 3px solid;">                
                      <div class="input-group-text  bg-danger text-white">
                      <i class="bi bi-buildings-fill"></i>   
                      
                      </div>
                      <input type="text" name="department"class="form-control" placeholder="Department:">
                  </div><br>
                </div>
                  <div class="modal-footer">
                      <input type="reset" class="btn btn-secondary " value="Clear">
                      <input type="submit" class="btn btn-success" name="user_reg" value="Register">
                      
                    </div>
                  </div>
                </div>
              </div>
</form>


                  <!-- Modal nisa sa login as Admin --> 
                  <!-- Modal --> 
              <div class="modal fade" id="AdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h4 class="modal-title text-white" style="font-weight: bold;" id="exampleModalLabel">Login as Admin</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <!--Modal Login Admin form -->
                      <form action="process.php" method="POST">
                        <div class="input-group mb-3"  style="border: 3px solid; padding: 4px;">
                          <div class="input-group-text bg-danger text-white">
                            <i class="bi bi-envelope-arrow-up-fill"></i>
                          </div>
                          <input type="email" class="form-control" name="login_email" placeholder="Enter your Email!" required>
                        </div><br>
                                  
                        <div class="input-group" style="border: 3px solid; padding: 4px;">
                          <div class="input-group-text  bg-danger text-white">
                            <i class="bi bi-lock-fill"></i>
                          </div>
                          <input type="password" class="form-control" name="login_pass" placeholder="Enter your Password!" required
                          id="myInput1">
                        </div>

                        <div class="float-start"> &nbsp;  
                      <input type="checkbox" onclick="myFunction1()">  Show Password                     
                      </div> 
                        
                    </div>
                    <div class="modal-footer">
                      <input type="reset" class="btn btn-secondary btn-lg" value="CLEAR">
                      <input type="submit" class="btn btn-success btn-lg" name="login_button" value="LOGIN">
                    
                    </form>

      </div>
    </div>
  </div>
</div>
                <!-- NOT WORKING YET --> 
        <!-- Modal nisa sa login as USER --> 
            <!-- Modal --> 
              <div class="modal fade" id="UserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header bg-danger">
                      <h4 class="modal-title text-white" style="font-weight: bold;" id="staticBackdropLabel">Login as User</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
                      <!--Modal Login USER form -->
                      <form action="process.php" method="POST">   
                      <div class="input-group mb-3 " style="border: 3px solid; padding: 4px;">
                        <div class="input-group-text  bg-danger text-white">     
                        <i class="bi bi-envelope-arrow-up-fill"></i>           
                        </div>
                        <input type="email" class="form-control" name="login_email" placeholder="Enter your Email!">
                      </div><br>

                      <div class="input-group" style="border: 3px solid; padding: 4px; ">
                        <div class="input-group-text  bg-danger text-white">
                        <i class="bi bi-lock-fill"></i>
                        </div>
                        <input type="password" class="form-control"  name="login_pass" placeholder="Enter your Password!"
                        id="myInput2">
                        
                      </div> 
                      
                      <div class="float-start"> &nbsp;  
                      <input type="checkbox" onclick="myFunction2()">  Show Password                     
                      </div>     
                        
                      <div class="modal-footer">
                <input type="reset" class="btn btn-secondary btn-lg" value="CLEAR">
                <input type="submit" class="btn btn-success btn-lg" name="login_user" value="LOGIN">
                  </div>
                </div>
              </div>
              </form>

              <script>
        function myFunction1() {
        var x = document.getElementById("myInput1");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      </script> 

<script>
        function myFunction2() {
        var x = document.getElementById("myInput2");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      </script> 
            
  
              


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>