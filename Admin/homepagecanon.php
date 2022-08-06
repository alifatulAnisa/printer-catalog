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
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product : CANON</h1>
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
              <a class="nav-link active" href="homepagecanon.php">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>
             <a class="nav-link" href="message.php">
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
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">MODEL</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">COLOUR</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>    
                  <tr>
                    
                   <?php
                    $sql="select * from canon";
                    $result = mysql_query($sql) or die('Query failed. ' . mysql_error());

                     $tmpCount = 1;
                     if(mysql_num_rows($result) != 0) {
                     while($row = mysql_fetch_assoc($result)) {?>

                        <th scope="row"></th>
                        <td class="tm-product-name"><?php echo $row['c_model'] ?></td>
                        <td><?php echo $row['c_type'] ?></td>
                        <td><?php echo $row['c_colour'] ?></td>
                        <td><?php echo $row['c_ds'] ?></td>
                        <td><?php echo $row['c_price'] ?></td>
                    <td>

                      <a href="delete.php?deletedcanon=1&c_id=<?php echo $row['c_id'] ?>" class="tm-product-delete-link" onclick="return confirm ('Are you sure want to delete?');">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                        <a href="editcanon.php?editedcanon=1&c_id=<?php echo $row['c_id'] ?>" class="tm-product-delete-link">
                        <i class="fas fa-file-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <?php $tmpCount++; }
                   }else{            
            }
          ?>

                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="addcanon.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories By Brand</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  <tr>
                      <td class="text-center">
                      <a class="nav-link d-block" href="homepagehp.php">HP</a>
                      
                  </tr>
                  <tr>
                     <td class="text-center">
                      <a class="nav-link d-block" href="homepagebrother.php">BROTHER</a>
                     
                    </td>
                  </tr>
                  <tr>
                    <tr>
                     <td class="text-center">
                      <a class="nav-link d-block" href="homepagecanon.php">CANON</a>           
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- table container -->
           
          </div>
        </div>
      </div>
    </div>
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