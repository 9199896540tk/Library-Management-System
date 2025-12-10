<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>product</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include("templates/inc.php") ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include("templates/header.php");?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include("templates/sidebar.php"); ?>
  <!-- End Sidebar-->
  <script src="./scripts/product.js" type="text/javascript" language="javascript"></script>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Product</h5>
               <!-- Vertical Form -->
              <form class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Product Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Price</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Quantity</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Enter quantity">
                </div>
                
                <div class="text-center">
                  <div id="msg"></div><br>
                  <button type="button" class="btn btn-primary" id="btnSubmit" name="btnSubmit">Submit</button>
                </div>
              </form><!-- Vertical Form -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <?php include("templates/footer.php"); ?>
  <!-- End Footer -->

  <?php include("templates/vendors.php") ?>

</body>

</html>