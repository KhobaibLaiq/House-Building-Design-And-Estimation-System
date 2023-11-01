<?php
include "config.php";
?>





<body class="blog">

    <!-- Header Starts -->
    <?php include_once 'header.php' ?>

    <!-- Header Ends -->
    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="banner-overlay">
            <div class="banner-text text-center">
                <div class="container">
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <div class="col-xs-12">
                            <!-- Title Starts -->
                            <h2 class="title-head banner-post-title">Building Material <span>Rates </span>
                            </h2>
                            <div class="title-head-subtitle">
                                <p>Find Cost-effective Prices for Construction Materials</p>
                            </div>
                            <!-- Title Ends -->

                        </div>
                    </div>
                    <!-- Section Title Ends -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area Ends -->
    <!-- Section Content Starts -->
    <section style="padding: 10px;" class="container blog-page">

        <div class="container">

            <!-- Section Content Starts -->


            <section class="features">
                <div class="container">

                    <!-- Estimate Cost Table Starts -->
                    <div id="cost-table">
                    <?php
        // Prepare and execute the SQL query
        $conn = mysqli_connect("localhost", "root", "", "house-design") or die("connection failled");
        $sql = "SELECT * FROM material_rates";
        $reslut = mysqli_query($conn, $sql) or die("querry unsuccefull");

        // $result = $conn->query($sql);

        // Check if any rows are returned
        if (mysqli_num_rows($reslut)) {
        ?>
                        <table class="table" style="margin-top: 30px;">
                            
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
                <tr >
                  <td><?php echo $row['id']; ?></td>
                  <td ><img class="img-responsive" src="admin/upload/<?php echo $row['image']; ?>" alt="Image" style="
    width: 20%;"></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['unit']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                
                </tr>
                <?php }
            ?>
            </tbody>
                        </table>
                        <?php } else {
          echo "No records found.";
        }
        mysqli_close($conn); ?>

                    </div>
                    <!-- Estimate Cost Table Ends -->
                </div>
            </section>
            <!-- Section Content Ends -->
        </div>
        <!-- latest search Section Starts -->
        
    </section>
    <!-- latest search Ends -->
    <!-- Call To Action Section Starts -->
    <section class="call-action-all" style="
  padding: 0;
  position: relative;
 background: url('images/backgrounds/image-1.png');
  background-size: cover;
  background-position: center center;
">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>Build Your Dream Home Today</h2>
                            <p class="lead">Explore our house building design & cost estimation system!</p>
                        </div>
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="#">Start Designing Now</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Ends -->
    <!-- Call To Action Section Ends -->
    <!-- Footer Starts -->
    <?php include_once('footer.php') ?>
    <!-- Footer Ends -->
    <!-- Back To Top Starts  -->
    <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
    <!-- Back To Top Ends  -->

    <!-- Template JS Files -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="js/styleswitcher.js"></script>

    </div>
    </div>
    <!-- Wrapper Ends -->
</body>


</html>