<?php
session_start();
?>
<?php 

include ("sql_connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/stylecontainer.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>
  <style>
    
</style>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product : HP</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="homepagehp.php">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>
            <a class="nav-link active" href="message.php">
                <i class="far fa-file-alt"></i> Customer Message
              </a>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="logout.php">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php
    $sql="select * from customer";
    $result = mysql_query($sql) or die('Query failed. ' . mysql_error());

     $tmpCount = 1;
     if(mysql_num_rows($result) != 0) {
     while($row = mysql_fetch_assoc($result)) {?>

        <div class="containerDD">
        <img src="img/cmt.png" alt="Avatar" style="width:90px">
        <p><span><?php echo $row['f_name'] ?> <?php echo $row['l_name'] ?> </span><?php echo $row['email'] ?></p>
        <p>Message: <?php echo $row['message'] ?></p>
        <p>Contact me at : <?php echo $row['phone'] ?></p>
      </div>

       <?php $tmpCount++; }
                   }else{            
            }
          ?>




    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Entregreen 
        </p>
      </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "editproduct.php";
        });
      });
    </script>
  </body>
</html>