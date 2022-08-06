<?php
session_start();
?>
<?php include('sql_connect.php');
      include('add-product.php');
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="homepagehp.php">
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
              <a class="nav-link active" href="homepagehp.php">
                <i class="fas fa-shopping-cart"></i> Products
              </a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.html">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="add-product.php" enctype="multipart/form-data" method="post" class="tm-edit-product-form">
                	<!--model-->
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Model
                    </label>
                    <input
                      id="hp_model"
                      name="hp_model"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <!--end model-->
                  <!--type-->
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Type
                    </label>
                    <input
                      id="hp_type"
                      name="hp_type"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <!--end type-->
                  <!--colour-->
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Colour</label
                    >
                    <select
                      class="custom-select tm-select-accounts" name="hp_colour"
                      id="hp_colour"
                    >
                      <option selected>Select colour</option>
                      <option value="Black">Black</option>
                      <option value="Cyan">Cyan</option>
                      <option value="Magenta">Magenta</option>
                      <option value="Yellow">Yellow</option>
                    </select>
                  </div>
                  <!--end colour-->
                  <!--description-->
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description
                    </label>
                    <input
                      id="hp_description"
                      name="hp_ds"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <!--end description-->
                  <!--price-->
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                    for="stock"
                    >Price in RM
                    </label>
                    <input
                    id="hp_price"
                    name="hp_price"
                    type="text"
                    class="form-control validate"
                    required
                    />
                    </div>
                  </div>
                  <!--end price-->
                  

<!-- image prview -->
                  <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                  <div class="text-center img-placeholder">
              <img src="img/img.png" id="profileDisplay" height="250" width="300">
            </span>
                  
              <!--add image-->
              
                  <input class="col_3 marginleft_3" type="file" name="image" id="image"  onChange="displayImage(this)" id="profileDisplay" >
                  
                </div>
              </div>
              <!--end image-->

              <div class="col-12">
                <button input type="submithp" name="submithp" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="footer">
      <div class="container">
        
        <div class="row">
          <div class="col-12 text-center">
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function() {
          $("#expire_date").datepicker();
        });
    </script>
    <script>
        function triggerClick(e) {
          document.querySelector('#image').click();
        }
        function displayImage(e) {
          if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
              document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
          }
        }
    </script>

  </body>
</html>
