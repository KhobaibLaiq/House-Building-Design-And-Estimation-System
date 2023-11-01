<?php
include_once('config.php')
?>
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
      Dashboard
      <small>Control data in form of maps and pricing.</small>
    </h1>
    <ol class="breadcrumb">
      <li>
        <a href="http://localhost/housedesign/index.php"><i class="fa fa-home"></i> Home </a>
      </li>
      <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="box">
      <div class="box-header">
        <h3 class="box-title custom-css">Data Table Of Maps</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <?php
        // Prepare and execute the SQL query
        $conn = mysqli_connect("localhost", "root", "", "house-design") or die("connection failled");
        $sql = "SELECT * FROM maps";
        $reslut = mysqli_query($conn, $sql) or die("querry unsuccefull");

        // $result = $conn->query($sql);

        // Check if any rows are returned
        if (mysqli_num_rows($reslut)) {
        ?>
          <table id="example1" class="table table-bordered table-responsive{-sm|-md|-lg|-xl} table-striped">
            <thead>
              <tr>
                <th>id</th>
                <th>Title</th>
                <th>Area (in mrla)</th>
                <th>Beds</th>
                <th>Baths</th>
                <th>Garages</th>
                <th>Kitchens</th>
                <th>Floors</th>
                <th>Description</th>
                <th>Map Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row = mysqli_fetch_assoc($reslut)) {
              ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['area']; ?></td>
                  <td><?php echo $row['beds']; ?></td>
                  <td><?php echo $row['baths']; ?></td>
                  <td><?php echo $row['kitchens']; ?></td>
                  <td><?php echo $row['garages']; ?></td>
                  <td><?php echo $row['floors']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['map_img']; ?></td>
                  <td class="action"><a href='inline-edit-map.php?id=<?php echo $row['id']; ?>'><i class="fa fa-edit"> </i></a> <a href='delete-map-inline.php?id=<?php echo $row['id']; ?>'><i class="fa fa-trash"> </i></a> </td>
                </tr>
                <?php }
            ?>
            </tbody>
            <tfoot>
              <tr>
                <th>id</th>
                <th>Title</th>
                <th>Area (in mrla)</th>
                <th>Beds</th>
                <th>Baths</th>
                <th>Garages</th>
                <th>Kitchens</th>
                <th>Floors</th>
                <th>Description</th>
                <th>Map Image</th>
                <th>Action</th>
              </tr>
            
            </tbody>
          </table>
        <?php } else {
          echo "No records found.";
        }
        mysqli_close($conn); ?>

        </tfoot>

        </table>

      </div>
      <!-- /.box-body -->
    </div>
    <br>

    <div class="box">
      <div class="box-header">
        <h3 class="box-title custom-css">Data Table Of Material Prices</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <?php
        // Prepare and execute the SQL query
        $conn = mysqli_connect("localhost", "root", "", "house-design") or die("connection failled");
        $sql = "SELECT * FROM material_rates";
        $reslut = mysqli_query($conn, $sql) or die("querry unsuccefull");

        // $result = $conn->query($sql);

        // Check if any rows are returned
        if (mysqli_num_rows($reslut)) {
        ?>
          <table id="example2" class="table table-bordered table-responsive{-sm|-md|-lg|-xl} table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Material Name</th>
                <th>Price</th>
                <th>Unit</th>
                <th>Update Date</th>
                
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row = mysqli_fetch_assoc($reslut)) {
              ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['image']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['unit']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                
                  <td class="action"><a href='inline-material-edit.php?id=<?php echo $row['id']; ?>'><i class="fa fa-edit"> </i></a> <a href='inline-material-delete.php?id=<?php echo $row['id']; ?>'><i class="fa fa-trash"> </i></a> </td>
                </tr>
                <?php }
            ?>
            </tbody>
            <tfoot>
              <tr>
              <th>Id</th>
                <th>Image</th>
                <th>Material Name</th>
                <th>Price</th>
                <th>Unit</th>
                <th>Update Date</th>
              </tr>
            
            </tbody>
          </table>
        <?php } else {
          echo "No records found.";
        }
        mysqli_close($conn); ?>

        </tfoot>

        </table>

      </div>
      <!-- /.box-body -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->



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
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function() {
    $("#example1").DataTable();
    
    $("#example2").DataTable({
      paging: true,
      lengthChange: true,
      searching: true,
      ordering: true,
      info: true,
      autoWidth: true,
    });
  });
</script>



</body>

</html>