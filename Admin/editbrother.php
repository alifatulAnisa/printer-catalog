<?php
session_start();
?>
<?php include('sql_connect.php'); ?>

<?php
if(isset($_POST['submit'])) 
{ 
        $allowedCompressedType = array("image/jpeg", "image/jpg", "image/jpeg", "image/png");

      if(in_array($_FILES["image"]["type"], $allowedCompressedType) && $_FILES["image"]["size"] > 0)
      {
        $b_model=$_POST['b_model'];
        $b_type=$_POST['b_type'];  
        $b_colour=$_POST['b_colour'];
        $b_ds=$_POST['b_ds'];
        $b_price=$_POST['b_price'];

    $location=$_FILES["image"]["name"];
  move_uploaded_file($_FILES["image"]["tmp_name"],"upload/brother/" . $_FILES["image"]["name"]);

    $sql="UPDATE brother set b_model='$b_model', b_type= '$b_type', b_colour='$b_colour', b_ds='$b_ds', b_price= '$b_price', bimage_location= '$location'  where b_id= '{$_GET['b_id']}'";

    $sql_check = mysql_query ( $sql) or die ("Query failed");

      if(!$sql_check)
        echo "SQL ERROR";

      else {
        echo "<script> alert('done update!');
        window.location= 'homepagebrother.php'</script>";
      }
    }
      else 
      echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('File type does not support. Please try again. Thank you')
            window.location.href='homepagehp.php'
            </SCRIPT>");

}  

if(isset($_GET['editedbrother'])) 
{
  $sql="select * from brother where b_id='{$_GET['b_id']}' ";
  $query=mysql_query($sql);
  $row=mysql_fetch_object($query);
  $b_model=$row->b_model;
  $b_type=$row->b_type;
  $b_colour=$row->b_colour;
  $b_ds=$row->b_ds; 
  $b_price=$row->b_price;
  $location=$row->bimage_location;
  
}

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
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">Product Admin</h1>
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
              <a class="nav-link active" href="homepagebrother.php">
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
                <h2 class="tm-block-title d-inline-block">Edit Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action=""  enctype="multipart/form-data" method="post" class="tm-edit-product-form">
                  <!--model-->
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Model
                    </label>
                    <input
                      name="b_model"
                      type="text"
                      value="<?php echo $b_model; ?>"
                      class="form-control validate"
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
                      name="b_type"
                      type="text"
                      value="<?php echo $b_type; ?>"
                      class="form-control validate"
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
                      class="custom-select tm-select-accounts" name="b_colour"
                      id="b_colour" value="<?php echo $b_colour; ?>"
                    >
                      <option selected>Select colour</option>
                      <option value="Black" <?php if(!(strcmp("Black",$b_colour))){ echo " selected=\"selected\""; } ?> >Black </option>
                      <option value="Cyan" <?php if(!(strcmp("Cyan",$b_colour))){ echo " selected=\"selected\""; } ?>>Cyan</option>
                      <option value="Magenta"  <?php if(!(strcmp("Magenta",$b_colour))){ echo " selected=\"selected\""; } ?>>Magenta</option>
                      <option value="Yellow" <?php if(!(strcmp("Yellow",$b_colour))){ echo " selected=\"selected\""; } ?>>Yellow</option>
                      <option value="YellowMagentaCyan" <?php if(!(strcmp("YellowMagentaCyan",$b_colour))){ echo " selected=\"selected\""; } ?>>Yellow Magenta Cyan</option>
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
                      name="b_ds"
                      type="text"
                      class="form-control validate"
                      value="<?php echo $b_ds; ?>"
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
                    name="b_price"
                    type="text"
                    value="<?php echo $b_price; ?>"
                    class="form-control validate"
                    />
                    </div>
                  </div>
                  <!--end price-->
                  
             <!--for update image: you need to upload image-->
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="custom-file mt-3 mb-3">
                  <img src=<?php echo "Upload/brother/". $location; ?> id="profileDisplay" height="250" width="300">
                  <input class="col_3 marginleft_3"  type="file" name="image" id="image"  onChange="displayImage(this)" id="profileDisplay" />
                  
                </div>
              </div>
              <!--end image-->

              <div class="col-12">
                <input type="submit" name="submit">
              </div>
             
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
        </div>
    </footer> 

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