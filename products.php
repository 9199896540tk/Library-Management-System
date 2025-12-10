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
    <a href="product-add.php">
           <button type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Add New</button>
           
    </a><br><br>
      <div class="row">
        <div class="col-lg-12">
           
          
          <div class="card">
            <div class="card-body">
            
              <h5 class="card-title">Products List</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Product Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                   <?php 
                   include("./conn.php");
                   $sl=1;
                   $sql="select * from tbl_products order by id desc";
                   $smt=mysqli_query($conn,$sql);
                   while($rs=mysqli_fetch_array($smt))
                   {
                    echo "<tr>";
                    echo "<td>".$sl."</td>";
                    echo "<td>".$rs['pcode']."</td>";
                    echo "<td>".$rs['name']."</td>";
                    echo "<td>".$rs['price']."</td>";
                    echo "<td>".$rs['quantity']."</td>";
                    echo '<td><a href="product-edit.php?id='.$rs['id'].'"><button type="button" class="btn btn-primary"><i class="bi bi-pencil me-1"></i> Edit</button></td>';
                    echo "</tr>";
                    $sl++;
                   }

                   ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->


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