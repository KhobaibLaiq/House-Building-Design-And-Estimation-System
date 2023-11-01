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
      Map CUD
      <small>here updating maps in database with details.</small>
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
      $sql = "SELECT * FROM maps  WHERE id = {$id} ";

      $reslut = mysqli_query($conn, $sql) or die("querry unsuccefull");
      if (mysqli_num_rows($reslut)) {
        while ($row = mysqli_fetch_assoc($reslut)) {


      ?>
          <!-- form start -->
          <form role="form" action="update-map-data.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <!-- for name -->
                <div class="form-group" style="width : 70%">
                  <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />

                  <label for="name">Enter Title </label>
                  <input type="Text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>" required>
                </div>

                <!-- for area -->
                <div class="form-group" style="width : 70%">
                  <label for="Area">Area (in marla)</label>
                  <input type="Text" class="form-control" name="area" id="area" required value="<?php echo $row['area']; ?>">
                </div>

                               <!-- for Coverd Area L & W-->
                <div class="form-group" style="width: 25%;float: left;margin-right: 10px;">
                  <label for="s_length">Slab Length (in cft)</label>
                  <input type="Text" class="form-control" name="s_length" id="s_length" required placeholder="Enter Slab Length In Cft" value="<?php echo $row['s_length']; ?>">
                </div>
                <div class="form-group" style="width : 25%;float: left; ">
                  <label for="s_width">Slab Width (in cft)</label>
                  <input type="Text" class="form-control" name="s_width" id="s_width" required placeholder="Enter Slab Width In Cft" value="<?php echo $row['s_width']; ?>">
                </div>
                <!-- for Dimension -->
                <div class="form-group" style="width : 50%">
                  <label for="Dimension">Wall Dimension (in Cubic Foot)</label>
                  <input type="Text" class="form-control" name="wall_dimension" id="wall_dimension" required placeholder="Enter value of wall dimension = (LxW - Doors Dimensions) Cft" value="<?php echo $row['wall_dimension']; ?>">
                </div>
                <!-- for beds  -->
                <div class="form-group" style="width : 50%">
                  <label for="beds">No Of Bed Rooms</label>
                  <input type="number" id="beds" class="form-control" required name="beds" value="<?php echo $row['beds']; ?>" min="0" max="10" step="1" value="0">
                </div>

                <!-- for  baths-->
                <div class="form-group" style="width : 50%">
                  <label for="baths">No Of Baths</label>
                  <input type="number" id="baths" class="form-control" name="baths" required value="<?php echo $row['baths']; ?>" min="0" max="10" step="1" value="0">
                </div>

                <!-- for kitchen -->
                <div class="form-group" style="width : 50%">
                  <label for="kitchens">No Of Kitchens</label>
                  <input type="number" id="kitchens" class="form-control" name="kitchens" required value="<?php echo $row['kitchens']; ?>" min="0" max="10" step="1" value="0">
                </div>

                <!-- for garages -->
                <div class="form-group" style="width : 50%">
                  <label for="garages">No Of Garages</label>
                  <input type="number" id="garages" class="form-control" name="garages" required value="<?php echo $row['garages']; ?>" min="0" max="10" step="1" value="0">
                </div>

                <!-- for floors-->
                <div class="form-group" style="width : 50%">
                  <label for="floors">No Of Floors</label>
                  <input type="number" id="floors" class="form-control" name="floors" required value="<?php echo $row['floors']; ?>" min="0" max="10" step="1" value="0">
                </div>

                <!-- for description-->
                <div class="form-group" style="width : 70%">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" cols="10" rows="10" value="<?php echo $row['description']; ?>" required style="width:725px; height:100px;"></textarea>
                </div>

                <div class="form-group">
                  <label for="map_img">File input</label>
                  <input type="file" id="map_img" name="map_img" value="<?php echo $row['map_img']; ?>" required accept="image/png, image/gif, image/jpeg">

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