 <!DOCTYPE html>
 <html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Regestration page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel='stylesheet' type='text/css' media='screen' href='./CSS/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./CSS/register.css'>
    
    <script src='main.js'></script>
 </head>
 <body>
 <header>
        <div class="main_header  header-mobile-m">
            <div class="header_container sticky-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="http://localhost/The%20Perfume-Planet%20project/"><img src="./logo.png" alt=""></a>
                                <!-- <video width="120" height="140" autoplay muted controls loop>
                                    <source src="./The-perfume-planet.mp4" type="video/mp4">
                                    <source src="./The-perfume-planet.mp4" type="video/ogg">
                                </video> -->
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <!-- main-menu starts -->
                            <div class="main_menu menu_two menu_position">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.html" class="active">Home <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="#">Men</a></li>
                                                <li><a href="#">Women</a></li>
                                                <li><a href="#">Unisex</a></li>
                                                <li><a href="#">Kids</a></li>
                                            </ul>

                                        </li>

                                        
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="login.php">Login In</a></li>
                                        <li><a href="regestration.php" target="_blank">Sign Up</a></li>
                                        <li >
                                            <li class="mega_items">
                                                <a href="#">Brands <i class="fa fa-angle-down"></i></a>
                                                <div class="mega_menu">
                                                    <ul class="mega_menu_inner">
                                                        <li>
                                                            <a href="#">Men</a>
                                                            <ul>
                                                                <li><a href="#">Versace</a></li>
                                                                <li><a href="#">Hugo Boss</a></li>
                                                                <li><a href="#">Jaguar</a></li>
                                                                <li><a href="#">Armani</a></li>
                                                                
                                                            </ul>
    
                                                        </li>
                                                        <li>
                                                            <a href="#">Women</a>
                                                            <ul>
                                                                <li><a href="#">Bvlgari</a></li>
                                                                <li><a href="#">Coach</a></li>
                                                                <li><a href="#">Kenzo</a></li>
                                                                <li><a href="#">D&G</a></li>
                                                               
                                                            </ul>
    
                                                        </li>
                                                        <li>
                                                            <a href="#">Unisex</a>
                                                            <ul>
                                                                <li><a href="#">Ajmal</a></li>
                                                                <li><a href="#">Calvin Klein</a></li>
                                                                <li><a href="#">The Body Shop</a></li>
                                                                <li><a href="#">Lattafa</a></li>
                                                            </ul>
    
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
   
<form action="reg.php" method="post"  enctype="multipart/form-data">
    <section class="h-100" style="background-color: #FFA500;">
  <div class="container py-0 h-100">
    
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="./images/Register-bg.jpg"
                alt="photo  is not available" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase"> Register Here </h3>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" name="first_name" />
                      <label class="form-label" for="form3Example1m" >First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" name="last_name" />
                      <label class="form-label" for="form3Example1n" >Last name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example8" class="form-control form-control-lg" name="address" />
                  <label class="form-label" for="form3Example8" >Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                
                  Select Gender :
        <input type="radio" name="gender" value="Male"/> Male
        <input type="radio" name="gender" value="Female"/> Female
        

                </div>

               

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example90" class="form-control form-control-lg" name="pincode" />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" class="form-control form-control-lg" name="email" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example97" class="form-control form-control-lg" name="password" />
                  <label class="form-label" for="form3Example97"> Password</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <!-- <button type="button" class="btn btn-warning btn-lg ms-2" name="submit">Submit form</button> -->
                  <input type="submit" class="btn btn-warning btn-lg ms-2" value="Submit">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>

<!-- footer started -->
<div class="footerr">
<footer class="footer_widgets color_two">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="widgets_container contact_us">
                            <div class="footer_logo">
                                <a href="#"><img src="./logo.png" alt="Logo"></a>
                                <!-- <video width="120" height="140" autoplay muted controls loop>
                                    <source src="./The-perfume-planet.mp4" type="video/mp4">
                                    <source src="./The-perfume-planet.mp4" type="video/ogg">
                                </video> -->
                            </div>
                            <div class="footer_desc">
                                <p>Get all types of perfume from us within 2 day delivery. We can even order the
                                    perfumes which are not in our database. To do that kindly send a E-mail to the
                                    company's mail id.</p>
                            </div>
                            <p>
                                <span>Address :</span> Perfume Gali, Kannauj, Uttar Pradesh(209727)
                            </p>
                            <p><span>Email :</span> <a href="#">ThePerfumePlanet@gmail.com</a></p>
                            <p><span>Phone :</span> <a href="tel: +91 6387343245">+91 6387343245</a> </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-5">
                      
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Prices Drop</a></li>
                                    <li><a href="#">New Products</a></li>
                                    <li><a href="#">Best Sales</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Gift Certificate</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Wish List</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113694.9099064773!2d79.76486296249998!3d27.062823200000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399e6fa4ffffc8c7%3A0x41a5cb3bb4c9f8fd!2sKannauj%20ittar%2C%20Kannauj%20Attar%2C%20essential%20oils!5e0!3m2!1sen!2sin!4v1677489152994!5m2!1sen!2sin" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                </div>
            </div>
        </div>

        <div class="footer_link">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Affiliate</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer section starts  -->

        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>Copyright &copy; 2023 <a href="#"> The perfume Planet </a>All right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <ul>
                                <li><a href="#"><img src="images/icon/paypal.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="images/icon/paypal5.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>

    <!-- footer section ends -->



 <script src="./JS/main.js"></script>
    <script src="./JS/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="./JS/countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="./JS/main.js"></script>
    <script src="./JS/bootstrap.bundle.min.js"></script>
 </body>
 </html>
