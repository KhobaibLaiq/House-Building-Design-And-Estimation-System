<?php
include "config.php";

?>
<?php
$range = $_GET['range-max'];
$bedrooms = $_GET['bedrooms'];
$bathrooms = $_GET['bathrooms'];
$floors = $_GET['floors'];
$garages = $_GET['garages'];

// Construct the SQL query
$query = "SELECT * FROM maps WHERE area <= '$range' AND beds = '$bedrooms' AND
  baths = '$bathrooms' AND floors = '$floors' AND garages = '$garages'";

$conn = mysqli_connect("localhost", "root", "", "house-design") or die("Connection failed : " . mysqli_connect_error());

// Execute the query
$result = mysqli_query($conn, $query);


// Check if any matching rows were found
if (mysqli_num_rows($result) > 0) {
	// Retrieve the best result
	$bestResult = mysqli_fetch_assoc($result);

	$imagePathh = $bestResult['map_img'];
	$imagePath = "admin/upload/" . $imagePathh;
	// Code for wall cost calculation
	$wall_dimensions = $bestResult['wall_dimension'];
	$wall_thickness = 0.75; // Convert wall thickness to feet
	$length = $bestResult['s_length'];
	$width = $bestResult['s_width'];

	//prices 

	$brick_cost = 13.50;
	$cement_cost_per_bag = 1115.00;
	$sand_cost_per_cubic_foot = 60.00;
	$crush_cost_per_cubic_foot = 95.00;
	$steel_cost_per_kg = 272.00;
	$labour_rate = 1100;
	$mason_rate = 1600;


	$total_area = $wall_dimensions;
	$quantity_of_material = (($total_area * $wall_thickness) * 0.1) * 1.27;   // 1.27 is wet mortar
	// Calculate total sqft mortar
	$total_sqft_slabmortar = ($length * $width) * (0.75 * 1.54); //1.54 is wet concret 

	$labour_day = ($total_area + $total_sqft_slabmortar) / 150;         //150 sqrft per day
	$labour_cost = $labour_day * ($mason_rate + $labour_rate);

	// Calculate Bricks
	$number_of_bricks = ($total_area * $wall_thickness) * 13.5; // 1 cft = 13.5 breaks

	// Calculate Cement
	$quantity_of_wallcement = ((1 * $quantity_of_material) / 5) / 1.25;  // 1.25 cft = 1 bag cement
	// ------slab calculation---------//
	$slabcement = ((1 * $total_sqft_slabmortar) / 7) / 1.25; // 7 is  ratio of 1:2:4
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
	$mainbar_steel = (($length - 0.17) * (($width / 0.583333) + 1) * 0.667) / 2.204;  // 0.667 is distance btw steels

	// Calculate steel (disttbar)
	$disttbar_steel = (($width - 0.17) * (($length / 0.583333) + 1) * 0.667) / 2.204;  // 2.204 is convert lb to kg

	$total_steel_quantity = $mainbar_steel + $disttbar_steel;


	// cost calculation

	$total_cost_of_bricks = $number_of_bricks * $brick_cost;
	$total_cost_of_cement =  $total_cement_quantity * $cement_cost_per_bag;
	$total_cost_of_sand =  $total_sand_quantity  * $sand_cost_per_cubic_foot;
	$total_cost_of_crush = $slabcrush * $crush_cost_per_cubic_foot;
	$total_cost_of_steel = $total_steel_quantity * $steel_cost_per_kg;







	// Calculate total cost
	$total_cost = $total_cost_of_bricks + $total_cost_of_cement + $total_cost_of_sand + $total_cost_of_crush + $total_cost_of_steel + $labour_cost;
} else {
	// No matching results found
	$bestResult = null;
}

// Close the database connection
mysqli_close($conn);





?>
<!DOCTYPE html>
<html lang="en">


<head>

	<meta charset="utf-8" />
	<title>Search Map Result</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.png">

	<!-- Template CSS Files -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skins/orange.css">

	<!-- Live Style Switcher - demo only -->
	<link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
	<link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
	<link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
	<link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

	<!-- Template JS Files -->
	<script src="js/modernizr.js"></script>

</head>

<body class="blog">

	<!-- Header Starts -->
	<?php include_once 'header.php' ?>
	<!-- Header Ends -->

	<!-- Banner Area Starts -->
	<?php if ($bestResult) { ?>
		<section class="banner-area">
			<div class="banner-overlay">
				<div class="banner-text text-center">
					<div class="container">
						<!-- Section Title Starts -->
						<div class="row text-center">
							<div class="col-xs-12">
								<!-- Title Starts -->
								<h2 class="title-head banner-post-title">Here is the search result of <span style="color:#fd961a;"><?php echo $bestResult['name']; ?></span> </h2>
								<!-- Title Ends -->
							</div>
						</div>
						<!-- Section Title Ends -->
					</div>
				</div>
			</div>
		</section>

		<?php

		?>
		<!-- Banner Area Ends -->

		<!-- Section Content Starts -->
		<section class="container blog-page">
			<div class="row">
				<div class="content col-xs-12 col-md-8">
					<!-- Article Starts -->
					<article>
						<!-- Figure Starts -->

						<figure class="blog-figure">
							<?php echo '<img class="img-responsive"  src="' . $imagePath . '" alt="Map Image">'; ?>
						</figure>
						<!-- Figure Ends -->
						<!-- Content Starts -->
						<h1>PLAN DESCRIPTION</h1>
						<p class="content-article"><b><?php echo $bestResult['description'] ?></b>
							<br><br><br> 
The 50x50 house plan features a spacious layout designed to provide comfort and functionality for its residents. As you enter the house, you will be greeted by a welcoming lounge area where you can relax and entertain guests. Adjacent to the lounge is the dining area, providing a designated space for enjoying meals with family and friends.
The front of the house boasts a beautiful lawn adorned with two flower beds, adding a touch of nature and enhancing the curb appeal of the property. This outdoor space allows you to create a charming and vibrant atmosphere.
The house includes a well-designed kitchen that serves as the heart of the home. With ample counter space and storage, it provides a convenient and efficient area for cooking and preparing meals. The kitchen is equipped with modern amenities and can accommodate multiple individuals working together.
There are two bathrooms in the house, ensuring convenience and privacy for the residents and guests. These bathrooms are thoughtfully designed with fixtures and fittings that provide comfort and functionality.</p>
						<!-- Content Ends -->

						<!-- Meta Starts -->
						<div class="meta second-font">
							<!-- Comments Starts -->
							<div class="comments">
								<!-- Comments Form Starts -->

								<!-- Existing form fields... -->
								<div class="form-group">
									<label for="estimate-cost">Estimate Cost:</label>
									<input type="checkbox" id="estimate-cost" name="estimate-cost">
								</div>


								<!-- Estimate Cost Table Starts -->
								<div id="cost-table" style="display: none;">
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
													<h3 style="color: #fd961a;">Total Cost :</h3> <?php echo "<p> " . round($total_cost, 2) . " PKR</p> " ?>
												</th>
											</tr>
										</thead>
									</table>
								</div>
								<!-- Estimate Cost Table Ends -->

								<!-- Comments Form Ends -->
							</div>

							<br>

							<!-- Meta Ends -->


							<!-- Comments Form Starts -->
							<div class="request-form">
								<button class="btn btn-primary" id="show-form-btn">Request Changes</button>
								<form action="request.php" method="get" id="change-request-form" style="display: none;">
									<h3>Request Changes</h3>
									<div class="form-group">
										<label for="id">Plan Id:</label>
										<input type="text" class="form-control" id="id" name="id" value="<?php echo $bestResult['id']; ?>" readonly style=" color: black;">
									</div>
									<div class="form-group">
										<label for="email">Email:</label>
										<input type="email" class="form-control" id="email" name="email" required>
									</div>
									<div class="form-group">
										<label for="phone_number">Phone No:</label>
										<input type="number" class="form-control" id="phone_number" name="phone_number" required>
									</div>
									<div class="form-group">
										<label for="message">Message:</label>
										<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
							<!-- Comments Form Ends -->
						</div>
					</article>
					<!-- Article Ends -->
				</div>
				<!-- Sidebar Starts -->
				<div class="sidebar col-xs-12 col-md-4">
					<!-- Categories Widget Starts -->
					<div class="widget">
						<h3 class="widget-title">KEY SPECS</h3>
						<ul class="arrow nav nav-tabs second-font uppercase">
							<li><i class="fa fa-object-ungroup" aria-hidden="true"></i> <?php echo $bestResult['area']; ?> Marla</li>
							<li><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $bestResult['beds']; ?> Beds</li>
							<li><i class="fa fa-bath" aria-hidden="true"></i><?php echo $bestResult['baths']; ?> Baths</li>
							<li><i class="fa fa-home" aria-hidden="true"></i> <?php echo $bestResult['floors']; ?> Floors </li>
							<li><i class="fa fa-car" aria-hidden="true"></i> <?php echo $bestResult['garages']; ?> Garages</li>
						</ul>
					</div>
					<!-- Categories Widget Ends -->
					<!-- Latest Posts Widget Ends -->
					<div class="widget recent-posts">
						<h3 class="widget-title">Recommended Plans</h3>
						<ul class="unstyled clearfix">
							<!-- Recommended Plans Starts -->
							<li>
								<div class="posts-thumb pull-left">
									<a href="blog-post.html">
										<img alt="img" src="images/maps/2mrla.png">
									</a>
								</div>
								<div class="post-info">
									<h4 class="entry-title">
										<a href="blog-post.html">5 MARLA PLOT </a>
									</h4>
									<p class="post-meta">
										<span class="post-date">with 2 floors , single kitche, bathrooms,2 beds</span>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="posts-thumb pull-left">
									<a href="blog-post.html">
										<img alt="img" src="images/maps/2mrla.png">
									</a>
								</div>
								<div class="post-info">
									<h4 class="entry-title">
										<a href="blog-post.html">8 MARLA PLOT </a>
									</h4>
									<p class="post-meta">
										<span class="post-date">with 2 floors , single kitche, bathrooms,2 beds</span>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li>
								<div class="posts-thumb pull-left">
									<a href="blog-post.html">
										<img alt="img" src="images/maps/2mrla.png">
									</a>
								</div>
								<div class="post-info">
									<h4 class="entry-title">
										<a href="blog-post.html">10 MARLA PLOT </a>
									</h4>
									<p class="post-meta">
										<span class="post-date">with 2 floors , single kitche, bathrooms,2 beds</span>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<!-- Recommended Plans Ends -->

						</ul>
					</div>
					<!-- Latest Posts Widget Ends -->
					<!-- Tags Widget Starts -->
					<div class="widget widget-tags">
						<h3 class="widget-title">Recent Search </h3>
						<ul class="unstyled clearfix">
							<li><a href="#">3 Marla</a></li>
							<li><a href="#">9 Marla</a></li>
							<li><a href="#">2 Floors</a></li>
							<li><a href="#">3 Floors</a></li>
							<li><a href="#">12 Marla</a></li>
							<li><a href="#">5000 Sqr ft</a></li>
							<li><a href="#">5 Marla</a></li>
							<li><a href="#">2 Marla</a></li>
						</ul>
					</div>
					<!-- Tags Widget Ends -->
				</div>
				<!-- Sidebar Ends -->
			</div>
		</section>
		<!-- Section Content Ends -->
	<?php } ?>
	<!-- Call To Action Section Starts -->
	<?php if (!$bestResult) { ?>
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
								<h2>Data not available in the database.</h2>
								<p class="lead">Please try a different search.</p>
							</div>
							<!-- Call To Action Text Ends -->
							<!-- Call To Action Button Starts -->
							<p class="action-btn"><a class="btn btn-primary" href="index.php">Go back</a></p>
							<!-- Call To Action Button Ends -->
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
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
	<!-- JavaScript code to show/hide the form -->
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var showFormBtn = document.getElementById("show-form-btn");
			var changeRequestForm = document.getElementById("change-request-form");

			showFormBtn.addEventListener("click", function() {
				if (changeRequestForm.style.display === "none") {
					changeRequestForm.style.display = "block";
					showFormBtn.textContent = "Hide Form";
				} else {
					changeRequestForm.style.display = "none";
					showFormBtn.textContent = "Request Changes";
				}
			});
		});
	</script>
	<!-- Template JS Files -->
	<script>
		$(document).ready(function() {
			$('#estimate-cost').change(function() {
				if ($(this).is(':checked')) {
					$('#cost-table').show();
				} else {
					$('#cost-table').hide();
				}
			});
		});
	</script>

</body>

</html>