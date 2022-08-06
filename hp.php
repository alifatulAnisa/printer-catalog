<?php 

include('sql_connect.php');
?>



<html>
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
  font-size: 7.8px;
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

ul{
    margin: 0px;
    padding: 0px;
    list-style: none;
  }
  ul li{
    float: left;
    width: 150px;
    height: 40px;
    background-color: white;
    opacity: .8;
    line-height: 40px;
    text-align: center;
    font-size: 15px;
    margin-right: 2px;
  }
  ul li a{
    text-decoration: none;
    color: black;
    display: block;
  }
  ul li a:hover{
    background-color: white;
  }
  ul li ul li{
    display: none;
  }
  ul li:hover ul li{
    display: block;
  }

.btn{
  border: 1px solid #3498db;
  background: none;
  padding: 10px 20px;
  font-size: 15px;
  font-family: "Montserrat";
  cursor: pointer;
  margin: 0px;
  transition: 0.8s;  
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
}

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
              <img src="images/logoent.png" alt="Image" class="img-fluid" style="margin-top:-10px">
            </a>
          </div>
          <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
        </div>
      </div>
      
      <!--search-->  
   
   <form class="example" action="search.php" style="margin: auto;max-width:250px">
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
                <li class="active"><a href="products.php" class="nav-link text-left"><b>Products</b></a>
                 <ul>
                 <li><a href="hp.php?cat1=tonercartridge">Toner Cartridge</a></li>
                  <li><a href="hp.php?cat2=inkcartridge">Ink Cartridge</a></li>
                </ul></li>
                <li><a href="contact.php" class="nav-link text-left"><b>Contact</b></a></li>
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>

         
        </div>

      </div>

     
   
    </div>
    
    </div>


   

    <div class="site-section mt-5">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12 section-title text-center mb-5">
            <h2 class="d-block">BRAND : HP</h2>
          </div>
        </div>

        <div class="row">
        <?php
           $productName = "toner cartridge";
           $productNameT = "ink cartridge";

           if(isset($_GET['cat1']) == "tonercartridge")  
           $sqlSelProd = mysql_query("select * from hp where hp_type = '$productName' ") or die(mysql_error()); 
           else if(isset($_GET['cat2']) == "inkcartridge") 
           $sqlSelProd = mysql_query("select * from hp where hp_type = '$productNameT' ") or die(mysql_error());
           else
           $sqlSelProd = mysql_query("select * from hp") or die(mysql_error());

          if(mysql_num_rows($sqlSelProd) >= 1)
          {
              while($getRowSearchProduct = mysql_fetch_array($sqlSelProd))
             { ?>
              <div class="col-lg-4 mb-5 col-md-6">
              <div class="wine_v_1 text-center pb-4">
              <form action=""  method="post" class="tm-edit-product-form">
                
              <a href="hp.php" class="thumbnail d-block mb-4"><img src= <?php echo "EntregreenAdmin/Upload/hp/". $getRowSearchProduct['image_location'] ?> alt="Image" class="img-fluid"  style="width:200px;height: 150px" ></a>
              <div>
               <h3><b><?php echo $getRowSearchProduct['hp_model'] ?> </b></h3>
              <h3 class="heading mb-1"><a href="#">Type : <?php echo $getRowSearchProduct['hp_type'] ?> </a></h3>
              <h3 class="heading mb-1"><a href="#">Colour : <?php echo $getRowSearchProduct['hp_colour'] ?></a></h3>
              <h3 class="heading mb-1"><a href="#">Description : <?php echo $getRowSearchProduct['hp_ds'] ?></a></h3>
              <h3 class="heading mb-1"><a href="#">Price : Contact for more Info<!--?php echo $getRowSearchProduct['hp_price'] ?--></a></h3>
              </div>
              <div class="product-actions"> 
                <a href="https://wa.me/60135122507" class="btn btn1"><span class="icon-shopping-bag mr-3"></span>Save</a>            
                <a href="https://wa.me/60135122507" class="btn btn1"><span style="width: 50px;" class="icon-shopping-bag mr-3"></span>Contact</a>
              </div>
              </div>
              </div>
             <?php  } } ?>
        </div> 

        </div>
      </div>
    </div>

<div class="product-actions">             
                <a  href="hp.php" class="btn btn1" style="margin-left:10px; margin-bottom:10px;"> <<  Back To Hp </a>
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
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Entregreen 
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