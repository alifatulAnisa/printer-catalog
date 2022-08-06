<?php 
include('sql_connect.php'); 

include('contact-.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Entregreen Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--search-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--search-->
  

  
  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">


</head>

<!--search-->
<style>

  form.example input[type=text] {
  padding: 10px;
  font-size: 13px;
  border: 1px solid #ffe6e6;
  float: left;
  width: 80%;
  background: white;
  
}

form.example button {
  float: left;
  width: 15%;
  padding: 10px;
  background: white;
  color:#ffb3b3;
  font-size: 13px;
  border: 1px solid #ffe6e6;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: white;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}

.cust{
  border: 1px solid #3498db;
  background: none;
  padding: 10px 20px;
  font-size: 20px;
  font-family: "Montserrat";
  cursor: pointer;
  margin: 0px;
  transition: 0.8s; 
  float:right; 
}

.btn1{
  color: #3498db;
}

.btn1:hover{
  color: #000;
}

.btn1::before{
  content: "";
  position: absolute;
  left: 0;
  width: 100%;
  height: 0%;
  background: #3498db;
  z-index: -1;
  transition: 0.8s;
}

.btn1::before{
  top: 0;
  border-radius: 0 0 50% 50%;
}

.btn1:hover::before{
  height: 0%;

</style>

<!--search-->

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <a href="registerCust.php" class="cust btn1"><span class="icon-shopping-bag mr-3"></span>Register</a>            
    <a href="loginCust.php" class="cust btn1"><span style="width: 50px;" class="icon-shopping-bag mr-3"></span>Login</a>
    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center">
            <a href="index.html" class="site-logo">
              <img src="images/logoent.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
        </div>
      </div>
      

        <!--search-->  
   
   <form class="example" action="search.php" style="margin-top: 10px;margin-left: 530px;max-width:250px">
   <input type="text" name="keyword" placeholder="What are you looking for?" name="search2">
   <button type="submit"><i class="fa fa-search"></i></button>
   </form>

   <!--search-->
    

      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mx-auto">
            <nav class="site-navigation position-relative text-left" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                <li><a href="index.php" class="nav-link text-left"><b>Home</b></a></li>
                <li><a href="services.html" class="nav-link text-left"><b>Our Services</b></a></li>
                <li><a href="products.php" class="nav-link text-left"><b>Products</b></a></li>
                <li class="active"><a href="contact.php" class="nav-link text-left"><b>Contact</b></a></li>
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    <div class="site-section mt-5">
      <div class="container">
        <div class="col-lg-12">
            <div class="section-title mb-5">
              <h2>Our location</h2>
            
            <!--p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, perspiciatis!</p-->
          </div>
        </div>
     
<center>
    <div class="polaroid">
  <img src="images/maps.jpg" alt="5 Terre" style="width:100%">
  <div class="container">
    <p>9-01, Jalan Ros Merah 2/12, Taman Johor Jaya, 81100 Johor Bahru, Johor, Malaysia</p>
    <p>Tel: 012-7072507</p>
  </div>
</div>
</center>




    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <div class="section-title mb-5">
              <h2>Contact Form</h2>
            </div>
            <form method="POST" action="contact.php">
              
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="fname"><span>&#42;</span>First Name</label>
                          <input type="text" name="f_name" id="fname" class="form-control form-control-lg" required="required">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="lname"><span>&#42;</span>Last Name</label>
                          <input type="text" name="l_name" id="lname" class="form-control form-control-lg">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6 form-group">
                          <label for="email"><span>&#42;</span>Email Address</label>
                          <input type="email" name="email" id="email" class="form-control form-control-lg" required="required">
                      </div>
                      <div class="col-md-6 form-group">
                          <label for="phone"><span>&#42;</span>Tel. Number</label>
                          <input type="text" name="phone" id="phone" class="form-control form-control-lg" required="required">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 form-group">
                          <!--label for="message"><span>&#42;</span>Message</label-->
                          <label color="red">*</font>Message</label>
                          <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required"></textarea>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-12">
                          <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                      </div>
                  </div>
              
            </form>
          </div>
          
        </div>

        
      </div>
    </div>

  

    
    
    <div class="footer">
      <div class="container">
        
        <div class="row">
          <div class="col-12 text-center">
            <div class="social-icons">
              <a href="https://wa.me/60135122507"><span class="icon-whatsapp"></span></a>
              <a href="mailto:sales@entregreen.com"><span class="icon-envelope"></span></a>
              <a href="skype:<iruwin.iruwin>?<action>"><span class="icon-skype"></span></a>
              <a href="tg://user?id=EntreGreen"><span class="icon-telegram"></span></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Entregreen
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>



            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>