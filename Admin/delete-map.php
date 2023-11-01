
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
            Map CUD
            <small>here delete map from database.</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard </a>
            </li>
            <li class="active"><i class="fa fa-trash"></i> Delete Map</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Delete Map</h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
            <form role="form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <div class="box-body">
                    <!-- for area -->
                    <div class="form-group" style="width : 50%">
                        <label for="id">Id</label>
                        <input type="Text" class="form-control" name="id" placeholder="Enter Id Of Map">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="delete">Delete</button>
                </div>
            </form>
            <?php
            if (isset($_POST['delete'])) {
                $conn = mysqli_connect("localhost", "root", "", "house-design") or die("connection failled");
                $id = $_POST['id'];
                $sql = "DELETE FROM maps WHERE id = {$id}";
                $reslut = mysqli_query($conn, $sql) or die("querry unsuccefull");

                header("Location: http://localhost/housedesign/admin/dashboard.php");
                mysqli_close($conn);
            }
            ?>

           
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