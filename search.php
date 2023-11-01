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
    <section style="padding: 0;" class="container blog-page">

        <div class="container">

            <!-- Section Content Starts -->


            <section class="features">
                <div class="container">
                    <form action="" method="">
                        <div class="row features-row">

                            <div class="col-lg-5">
                                <div class="calculator-field">
                                    <label for="Region">Region</label>
                                    <select name="Region" id="Region">
                                        <option value="Peshwar">Peshwar</option>
                                        <option value="Mardan">Mardan</option>
                                        <option value="Nowshera">Nowshera</option>
                                    </select>
                                </div>
                                <div class="calculator-field">
                                    <label for="covered-area">Covered Area</label>
                                    <span class="area-size-sqft">
                                        <input id="covered-area" class="form-input" type="text" placeholder="Enter covered area  in">
                                        <p>sq.ft</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="calculator-field">
                                    <label for="total-area">Area</label>
                                    <span class="area-size-box">
                                        <input id="total-area" class="form-input" type="text" placeholder="Enter size of total area">
                                        <div>
                                            <p>Marla</p>
                                        </div>
                                    </span>
                                </div>
                                <div class="calculator-field">
                                    <label for="construction-type">Construction Type</label>
                                    <select name="construction-type" id="construction-type">
                                        <option value="gray-structure">Gray Structure</option>
                                        <option value="complete">Complete</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Building info -->
                        <p class="message text-center">Enter Building Information
                        </p>
                        <div class="row features-row">

                            <div class="col-lg-5">
                                <div class="calculator-field">
                                    <label for="Quality">Quality Level</label>
                                    <select name="Quality" id="Quality">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="calculator-field">
                                    <label for="rooms">No. Of Rooms</label>

                                    <input id="rooms" name="rooms" class="form-input" type="number" value="1">

                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="calculator-field">
                                    <label for="Bathrooms">No. Of Bathrooms</label>
                                    <input id="Bathrooms" name="Bathrooms" class="form-input" type="number" value="1">

                                </div>
                                <div class="calculator-field">
                                    <label for="garages">No. Of Garages</label>
                                    <input id="garages" name="garages" class="form-input" type="number" value="1">

                                </div>
                            </div>

                            <div class="col-lg-2 calculator-button">
                                <button id="btn-calculate-cost">Calculate Cost</button>
                            </div>

                        </div>
                    </form>
                </div>
            </section>
            <!-- Section Content Ends -->
        </div>
        <!-- latest search Section Starts -->
        <section class="blog">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">Latest <span>Search</span></h2>
                    <div class="title-head-subtitle">
                        <p>........</p>
                    </div>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row latest-posts-content">
                    <!-- Article Starts -->
                    <div class="col-sm-4 col-md-3 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a href="#"><img class="img-responsive" width="80%" src="images/maps/2mrla.png" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">5 MARLA PLOT</a>
                                </h4>
                                <div class="post-text">
                                    <p>With 2 Floors , Single Kitchen, Bathrooms,2 Beds</p>
                                </div>
                            </div>

                            <a href="#" class="btn btn-primary">read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-sm-4 col-md-3 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a href="#"><img class="img-responsive" width="80%" src="images/maps/2mrla.png" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">5 MARLA PLOT</a>
                                </h4>
                                <div class="post-text">
                                    <p>With 2 Floors , Single Kitchen, Bathrooms,2 Beds</p>
                                </div>
                            </div>

                            <a href="#" class="btn btn-primary">read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-sm-4 col-md-3 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a href="#"><img class="img-responsive" width="80%" src="images/maps/2mrla.png" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">20 MARLA PLOT</a>
                                </h4>
                                <div class="post-text">
                                    <p>With 2 Floors , Single Kitchen, Bathrooms,2 Beds</p>
                                </div>
                            </div>

                            <a href="#" class="btn btn-primary">read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Article Starts -->
                    <div class="col-sm-4 col-md-3 col-xs-12">
                        <div class="latest-post">
                            <!-- Featured Image Starts -->
                            <a href="#"><img class="img-responsive" width="80%" src="images/maps/2mrla.png" alt="img"></a>
                            <!-- Featured Image Ends -->
                            <!-- Article Content Starts -->
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="#">10 MARLA PLOT</a>
                                </h4>
                                <div class="post-text">
                                    <p>With 2 Floors , Single Kitchen, Bathrooms,2 Beds</p>
                                </div>
                            </div>

                            <a href="#" class="btn btn-primary">read more</a>
                            <!-- Article Content Ends -->
                        </div>
                    </div>
                    <!-- Article Ends -->
                    <!-- Section Content Ends -->
                </div>
        </section>
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