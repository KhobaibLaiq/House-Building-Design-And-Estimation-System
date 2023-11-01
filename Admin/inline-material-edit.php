<!-- Main Header -->
<?php
include_once('top-head.php')
?>
<?php
include_once('admin-header.php')
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Material Price CUD
      <small>here update material in database with details.</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard </a>
      </li>
      <li class="active"><i class="fa fa-plus"></i> Add Map</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Add Map</h3>
      </div>
      <!-- /.box-header -->
      <?php
      $conn = mysqli_connect("localhost", "root", "", "house-design") or die("connection failled");
      $id = $_GET['id'];
      $sql = "SELECT * FROM material_rates  WHERE id = {$id} ";

      $reslut = mysqli_query($conn, $sql) or die("querry unsuccefull");
      if (mysqli_num_rows($reslut)) {
        while ($row = mysqli_fetch_assoc($reslut)) {


      ?>
          <!-- form start -->
          <form role="form" action="update-material-rates.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <!-- for name -->
                <div class="form-group" style="width : 70%">
                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />

                  <label for="name">Enter Item Name </label>
                  <input type="Text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>" required>
                </div>

                <!-- for price-->
                <div class="form-group" style="width : 70%">
                  <label for="price">Item Price (in pkr)</label>
                  <input type="Text" class="form-control" name="price" id="price" required value="<?php echo $row['price']; ?>">
                </div>

             <!-- for unit-->
             <div class="form-group" style="width : 70%">
                  <label for="unit">Unit</label>
                  <input type="Text" class="form-control" name="unit" id="unit" required value="<?php echo $row['unit']; ?>">
                </div>
  

                <div class="form-group">
                  <label for="image">Item File input</label>
                  <input type="file" id="image" name="image" value="<?php echo $row['image']; ?>" required accept="image/png, image/gif, image/jpeg">

                  <p class="help-block">upload image of map in (jpeg or png).</p>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
      <?php }
      } ?>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<?php include_once('admin-footer.php')
?>


<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


</body>

</html>