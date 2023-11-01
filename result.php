<?php
include "config.php";
?>

<?php
// Retrieve the form data from $_POST
$region = $_POST['Region'];
$coveredArea = $_POST['covered_area'];
$totalArea = $_POST['total_area'];
$wallLength = $_POST['w_length'];
$wallWidth = $_POST['w_width'];
$wallThickness = $_POST['w_thickness']/12;
$slabLength = $_POST['s_length'];
$slabWidth = $_POST['s_width'];
$slabThickness = $_POST['s_thickness']/12;

// Price
$brick_cost = 13.50;
$cement_cost_per_bag = 1115.00;
$sand_cost_per_cubic_foot = 60.00;
$crush_cost_per_cubic_foot = 95.00;
$steel_cost_per_kg = 272.00;
$labour_rate = 1100;
$mason_rate = 1600;

$wall_dimensions = $wallLength * $wallWidth;
$quantity_of_material = (($wall_dimensions * $wallThickness) * 0.1) * 1.27;
$total_sqft_slabmortar = ($slabLength * $slabWidth) * ($slabThickness * 1.54);

$total_area = $wall_dimensions + ($slabLength * $slabWidth);

$labour_day = ($total_area + $total_sqft_slabmortar) / 150;         //150 sqrft per day
$labour_cost = $labour_day * ($mason_rate + $labour_rate);

// Calculate Bricks
$number_of_bricks = ($wall_dimensions * $wallThickness) * 13.5;


// Calculate Cement
$quantity_of_wallcement = ((1 * $quantity_of_material) / 5) / 1.25;
// ------slab calculation---------//
$slabcement = ((1 * $total_sqft_slabmortar) / 7) / 1.25;
$total_cement_quantity = $quantity_of_wallcement + $slabcement;


// Calculate Sand
$quantity_of_wallsand = (4 * $quantity_of_material) / 5;
// ------slab calculation---------//
$slabsand = (2 * $total_sqft_slabmortar) / 7;
$total_sand_quantity = $quantity_of_wallsand + $slabsand;

// Calculate Crush
// ------slab calculation---------//
$slabcrush = (4 * $total_sqft_slabmortar) / 7;


// Calculate steel (mainbar)
$mainbar_steel = (($slabLength - 0.17) * (($slabWidth / 0.583333) + 1) * 0.667) / 2.204;

// Calculate steel (disttbar)
$disttbar_steel = (($slabWidth - 0.17) * (($slabLength / 0.583333) + 1) * 0.667) / 2.204;

$total_steel_quantity = $mainbar_steel + $disttbar_steel;


// cost calculation

$total_cost_of_bricks = $number_of_bricks * $brick_cost;
$total_cost_of_cement =  $total_cement_quantity * $cement_cost_per_bag;
$total_cost_of_sand =  $total_sand_quantity  * $sand_cost_per_cubic_foot;
$total_cost_of_crush = $slabcrush * $crush_cost_per_cubic_foot;
$total_cost_of_steel = $total_steel_quantity * $steel_cost_per_kg;

// Calculate total cost
$total_cost = $labour_cost + $total_cost_of_bricks + $total_cost_of_cement + $total_cost_of_sand + $total_cost_of_crush + $total_cost_of_steel;



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
                            <h2 class="title-head banner-post-title">Construction <span>Cost Estimator </span>
                            </h2>
                            <div class="title-head-subtitle">
                                <p>a commercial website that provide maps, cost estimation and time spend</p>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h3 style="color: #fd961a;">Material Quantity Estimation</h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" style="font-size: large;">S.no</th>
                                    <th style="font-size: large;">Item</th>
                                    <th style="font-size: large;">Quantity</th>
                                    <th style="font-size: large;">Cost</th>
                                </tr>


                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bricks</td>
                                    <td><?php echo "<p> " . round($number_of_bricks) . " bricks</p>"; ?></td>
                                    <td><?php echo "<p> " . round($total_cost_of_bricks, 2) . " PKR</p>"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Cement</td>
                                    <td><?php echo "<p> " . round($total_cement_quantity, 2) . " bags</p>"; ?></td>
                                    <td><?php echo "<p> " . round($total_cost_of_cement, 2) . " PKR</p>"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Crush</td>
                                    <td><?php echo "<p> " . round($slabcrush, 2) . " cft</p>"; ?></td>
                                    <td><?php echo "<p> " . round($total_cost_of_crush, 2) . " PKR</p>"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Sand</td>
                                    <td><?php echo "<p> " . round($total_sand_quantity, 2) . " cft</p>"; ?></td>
                                    <td><?php echo "<p> " . round($total_cost_of_sand, 2) . " PKR</p>"; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Steel</td>
                                    <td><?php echo "<p> " . round($total_steel_quantity, 2) . " kg</p>"; ?></td>
                                    <td><?php echo "<p> " . round($total_cost_of_steel, 2) . " PKR</p>"; ?></td>
                                </tr>
                            </tbody>

                        </table>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h3 style="color: #fd961a;">Labour Estimation</h3>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" style="font-size: large;">Working Days</th>
                                    <th style="font-size: large;">No Of Labour</th>
                                    <th style="font-size: large;">No Of Mason</th>
                                    <th style="font-size: large;">Labour Cost Per Day</th>
                                    <th style="font-size: large;">Mason Cost Per Day</th>
                                    <th style="font-size: large;">Total Cost</th>


                                </tr>


                                <tr>

                                    <td><?php echo "<p> " . round($labour_day) . " Days</p>"; ?></td>
                                    <td>01</td>
                                    <td>01</td>
                                    <td><?php echo "<p> " . round($labour_rate) . " PKR</p>"; ?></td>
                                    <td><?php echo "<p> " . round($mason_rate) . " PKR</p>"; ?></td>
                                    <td><?php echo "<p> " . round($labour_cost) . " PKR</p>"; ?></td>

                                </tr>

                            </tbody>
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h3 style="color: #fd961a;">Total Cost Estimation:</h3> <?php echo "<p> " . round($total_cost, 2) . " PKR</p> " ?>
                                    </th>
                                </tr>
                            </thead>
                        </table>
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