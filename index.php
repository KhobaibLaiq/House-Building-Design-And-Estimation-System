<?php
include "config.php";
?>
<?php
include_once('header.php')
?>
<!-- Slider Starts -->
<div class="container home-page">
  <!-- <div class ="col-md-8 top-heading"><H1>Search nearly <span style="font-weight: 300;">400 floor plans</span> 
      and find your dream home today</H1></div> -->
  <div class="quick-filter-container">
    <header>
      <h2>Quick Look</h2>
      <p>This section shows some pre-designed maps</p>
    </header>
    <form action="search-map.php" method="get" onsubmit="return validateForm()">
      <div class="quick-filter-area-slider">
        <h4>Area Size <span style="font-size: small; font-weight:200;"> in marla</span></h4>
        <div class="slider">
          <div class="progress"></div>
        </div>
        <div class="range-input">
          <input type="range" class="range-min" min="1" max="100" value="1" step="1" />
          <input type="range" class="range-max" min="1" max="100" value="100" step="1" />
        </div>
        <div class="price-input">
          <div class="field">
            <span>Min</span>
            <input type="number" class="input-min" id="range-min" name="range-min" value="1" readonly min="1" max="100" step="1" />
          </div>
          <div class="separator">-</div>
          <div class="field">
            <span>Max</span>
            <input type="number" class="input-max" id="range-max" min="1" max="100" step="1" name="range-max" value="10" />
          </div>
        </div>
      </div>
      <div class="quick-filter-details">
        <div class="bedroom">
          <h4>Bedrooms</h4>
          <div class="bedroom-wrapper">
            <div class="quick-filter-picker">
              <label for="bedroom-1">
                <input type="checkbox" value="1" name="bedrooms" id="bedroom-1">
                <span>1</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="bedroom-2">
                <input type="checkbox" value="2" name="bedrooms" id="bedroom-2">
                <span>2</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="bedroom-3">
                <input type="checkbox" value="3" name="bedrooms" id="bedroom-3">
                <span>3</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="bedroom-4">
                <input type="checkbox" value="4" name="bedrooms" id="bedroom-4">
                <span>4</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="bedroom-5">
                <input type="checkbox" value="5" name="bedrooms" id="bedroom-5">
                <span>5</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="bedroom-6">
                <input type="checkbox" value="6" name="bedrooms" id="bedroom-6">
                <span>6</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="bedroom-7">
                <input type="checkbox" value="7" name="bedrooms" id="bedroom-7">
                <span>7</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="bedroom-8">
                <input type="checkbox" value="8" name="bedrooms" id="bedroom-8">
                <span>8</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="bedroom-9">
                <input type="checkbox" value="9" name="bedrooms" id="bedroom-9">
                <span>9</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="bedroom-10">
                <input type="checkbox" value="10" name="bedrooms" id="bedroom-10">
                <span>10</span>
              </label>
            </div>

          </div>
        </div>

        <div class="bathroom">
          <h4>Bathrooms</h4>
          <div class="bathroom-wrapper">


            <div class="quick-filter-picker">
              <label for="bathroom-1">
                <input type="checkbox" value="1" name="bathrooms" id="bathroom-1">
                <span>1</span>
              </label>
            </div>

            <div class="quick-filter-picker">
              <label for="bathroom-2">
                <input type="checkbox" value="2" name="bathrooms" id="bathroom-2">
                <span>2</span>
              </label>
            </div>

            <div class="quick-filter-picker">
              <label for="bathroom-3">
                <input type="checkbox" value="3" name="bathrooms" id="bathroom-3">
                <span>3</span>
              </label>
            </div>

            <div class="quick-filter-picker">
              <label for="bathroom-4">
                <input type="checkbox" value="4" name="bathrooms" id="bathroom-4">
                <span>4</span>
              </label>
            </div>

            <div class="quick-filter-picker">
              <label for="bathroom-5">
                <input type="checkbox" value="5" name="bathrooms" id="bathroom-5">
                <span>5</span>
              </label>
            </div>

            <div class="quick-filter-picker">
              <label for="bathroom-6">
                <input type="checkbox" value="6" name="bathrooms" id="bathroom-6">
                <span>6</span>
              </label>
            </div>

            <div class="quick-filter-picker">
              <label for="bathroom-7">
                <input type="checkbox" value="7" name="bathrooms" id="bathroom-7">
                <span>7</span>
              </label>
            </div>

            <div class="quick-filter-picker">
              <label for="bathroom-8">
                <input type="checkbox" value="8" name="bathrooms" id="bathroom-8">
                <span>8</span>
              </label>
            </div>

            <div class="quick-filter-picker">
              <label for="bathroom-9">
                <input type="checkbox" value="9" name="bathrooms" id="bathroom-9">
                <span>9</span>
              </label>
            </div>

            <div class="quick-filter-picker">
              <label for="bathroom-10">
                <input type="checkbox" value="10" name="bathrooms" id="bathroom-10">
                <span>10</span>
              </label>
            </div>

          </div>
        </div>
        <div class="storey">
          <h4>Floors || Garages</h4>
          <div class="storey-wrapper">
            <div class="quick-filter-picker">
              <label for="floor-0">
                <input type="checkbox" value="0" name="floors" id="floor-0">
                <span>0</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="floor-1">
                <input type="checkbox" value="1" name="floors" id="floor-1">
                <span>1</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="floor-2">
                <input type="checkbox" value="2" name="floors" id="floor-2">
                <span>2</span>
              </label>
            </div>

            <div class="quick-filter-picker">

            </div>
            <div class="quick-filter-picker">

            </div>
            <div class="quick-filter-picker">
              <label for="garages-0">
                <input type="checkbox" value="0" name="garages" id="garages-0">
                <span>0</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="garages-1">
                <input type="checkbox" value="1" name="garages" id="garages-1">
                <span>1</span>
              </label>
            </div>
            <div class="quick-filter-picker">
              <label for="garages-2">
                <input type="checkbox" value="2" name="garages" id="garages-2">
                <span>2</span>
              </label>
            </div>

          </div>

        </div>

        <div><button>Search</button></div>
      </div>
    </form>

  </div>

</div>



<!-- converter Calculator Section Starts -->
<section class="bitcoin-calculator-section" style=" background-image: url('images/backgrounds/call.jpg');
  height: 218px;
  position: relative;
  background-attachment: fixed;
  background-size: cover;
  margin: 70px 0;">
  <div class="container" style="margin-top: -178px">
    <div class="row">
      <!-- Section Heading Starts -->
      <div class="col-md-12">
        <h2 class="title-head text-center"><span>Converter</span> Calculator</h2>
        <p class="message text-center">Convert value with our easy-to-use converter
        </p>
      </div>
      <!-- Section Heading Ends -->
      <!--  Calculator Form Starts -->
      <div class="col-md-12 text-center">
        <form class="bitcoin-calculator" id="bitcoin-calculator">
          <!-- Input #1 Starts -->
          <input type="number" placeholder="enter no" id="inputValue" onchange="convertUnits()" min="0" style="height: 46px; text-align:center; color:black; font-weight:400; padding-top: 1px;">
          <!-- Input #1 Ends -->
          <div> <select style="
                                   background: #fd961a;
                                 color: white;
                                 height: 43px;
                                 text-align: center;
                                 margin-top: -2px;
                                 font-weight: 600;
                                 border: 1px solid;" id="inputUnit" onchange="convertUnits()">
              <option value="marla">Marla</option>
              <option value="squareFoot">Square Foot</option>
              <option value="cubicFoot">Cubic Foot</option>
              <option value="kanal">Kanal</option>
              <option value="acre">Acre</option>
              <option value="squareYard">Square Yard</option>
            </select> </div>
          <div class="form-equal">=</div>
          <!-- Input/Result Starts -->

          <input class="form-input form-input-result" type="text" placeholder="click here" id="result" readonly>
          <!-- Input/Result Ends -->
          <!-- Select Currency Starts -->
          <div class="form-wrap">
            <select style="
                                 background: #fd961a;
                                 color: white;
                                 height: 43px;
                                 text-align: center;
                                 margin-top: -2px;
                                 font-weight: 600;
                                 border: 1px solid;" id="outputUnit" onchange="convertUnits()">
              <option value="squareFoot">Square Foot</option>
              <option value="cubicFoot">Cubic Foot</option>
              <option value="kanal">Kanal</option>
              <option value="acre">Acre</option>
              <option value="squareYard">Square Yard</option>
              <option value="marla">Marla</option>
            </select>
          </div>
          <!-- Select Currency Ends -->
        </form>
        <p class="info"><i>* convert into marla, sqr ft, cubic ft, kanal, acre, sqr yard </i></p>
      </div>

      <!---------------------------------------------------------------------->

</section>
<!-- converter Calculator Section Ends -->

<!-- About Section Starts -->
<section class="about-us">
  <div class="container">
    <!-- Section Title Starts -->
    <div class="row text-center">
      <h2 class="title-head">About <span>Us</span></h2>
      <div class="title-head-subtitle">
        <p>a commercial website that provide maps, cost estimation and time spend</p>
      </div>
    </div>
    <!-- Section Title Ends -->
    <!-- Section Content Starts -->
    <div class="row about-content">
      <!-- Image Starts -->
      <div class="col-sm-12 col-md-5 col-lg-6 text-center">
        <img id="about-us" class="img-responsive img-about-us" src="images/about-us.png" alt="about us">
      </div>
      <!-- Image Ends -->
      <!-- Content Starts -->
      <div class="col-sm-12 col-md-7 col-lg-6">
        <h3 class="title-about">WE ARE </h3>
        <p class="about-text">A leading platform that specializes in providing maps, cost estimation,
          and time spent information. Our goal is to assist individuals, businesses, and organizations in making informed
          decisions by offering valuable insights and resources.</p>
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#menu1">Maps-Pro</a></li>
          <li><a data-toggle="tab" href="#menu2">Cost-EstiMate</a></li>
          <li><a data-toggle="tab" href="#menu3">Time-Optimize</a></li>
        </ul>
        <div class="tab-content">
          <div id="menu1" class="tab-pane fade in active">
            <p>we specialize in providing high-quality maps for various purposes. Whether you're a traveler,
              an urban planner, or a business owner, our extensive collection of maps can assist you in
              navigating and exploring your desired locations. Our team of experienced cartographers ensures that our
              maps are accurate,up-to-date, and visually appealing, making them an invaluable resource for all your mapping needs.</p>
          </div>
          <div id="menu2" class="tab-pane fade">
            <p>Understanding the importance of financial planning, we also offer reliable cost estimation services.
              Whether you're embarking on a construction project, remodeling your home, or planning a trip,
              our cost estimation tools provide detailed and accurate assessments. By considering factors such as materials,
              labor, and other relevant expenses, we help you make informed decisions and ensure that your budgeting process is as seamless as possible.</p>
          </div>
          <div id="menu3" class="tab-pane fade">
            <p>Time is a valuable resource, we recognize the significance of effective time management.
              Our platform includes tools and resources to help you estimate the time required for various activities,
              whether it's a road trip, a project deadline, or even a hiking adventure. By providing reliable time estimations,
              we empower you to plan and allocate your time efficiently, ensuring that you make the most out of every moment. </p>
          </div>
        </div>
        <a class="btn btn-primary" href="about.html">Read More</a>
      </div>
      <!-- Content Ends -->
    </div>
    <!-- Section Content Ends -->
  </div>
</section>
<!-- About Section Ends -->
<!-- Features and Video Section Starts -->
<section class="image-block">
  <div class="container-fluid">
    <div class="row">
      <!-- Features Starts -->
      <div class="col-md-8 ts-padding img-block-left">
        <div class="gap-20"></div>
        <div class="row">
          <!-- Feature Starts -->
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="feature text-center">
              <span class="feature-icon">
                <img id="strong-security" style="height: 100px;" src="images/icons/orange/icon-01.png" alt="" />
              </span>
              <h3 class="feature-title">Thousands House Design</h3>
              <p>Protection against DDoS attacks, <br>full data encryption</p>
            </div>
          </div>
          <!-- Feature Ends -->
          <div class="gap-20-mobile"></div>
          <!-- Feature Starts -->
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="feature text-center">
              <span class="feature-icon">
                <img id="world-coverage" style="height: 100px;" src="images/icons/orange/icon-02.png" alt="world coverage" />
              </span>
              <h3 class="feature-title">Accurate Cost Estimation</h3>
              <p>Get precise cost estimates for <br> construction materials and labor.</p>
            </div>
          </div>
          <!-- Feature Ends -->
        </div>
        <div class="gap-20"></div>
        <div class="row">
          <!-- Feature Starts -->
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="feature text-center">
              <span class="feature-icon">
                <img id="payment-options" style="height: 100px;" src="images/icons/orange/icon-04.png" alt="" />
              </span>
              <h3 class="feature-title">Material Selection

</h3>
              <p>Compare prices and quality to  <br>make informed decisions.</p>
            </div>
          </div>
          <!-- Feature Ends -->
          <div class="gap-20-mobile"></div>
          <!-- Feature Starts -->
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="feature text-center">
              <span class="feature-icon">
                <img id="mobile-app" style="height: 100px;" src="images/icons/orange/icon-03.png" alt="" />
              </span>
              <h3 class="feature-title">Expert Consultation</h3>
              <p>Benefit from expert recommendations <br> and industry insights
</p>
            </div>
          </div>
          <!-- Feature Ends -->
        </div>
        <div class="gap-20"></div>
        <div class="row">
          <!-- Feature Starts -->
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="feature text-center">
              <span class="feature-icon">
                <img id="cost-efficiency" style="height: 100px;" src="images/icons/orange/icon-06.png" alt="cost efficiency" />
              </span>
              <h3 class="feature-title">Cost efficiency</h3>
              <p>Reasonable for takers<br> and all market makers</p>
            </div>
          </div>
          <!-- Feature Ends -->
          <div class="gap-20-mobile"></div>
          <!-- Feature Starts -->
          <div class="col-sm-6 col-md-6 col-xs-12">
            <div class="feature text-center">
              <span class="feature-icon">
                <img id="high-liquidity" style="height: 100px;" src="images/icons/orange/icon-05.png" alt="high liquidity" />
              </span>
              <h3 class="feature-title">High Liquidity</h3>
              <p>Fast access to high liquidity orderbook<br> for top currency pairs</p>
            </div>
          </div>
          <!-- Feature Ends -->
        </div>
      </div>
      <!-- Features Ends -->
      <!-- Video Starts -->
      <div class="col-md-4 ts-padding bg-image-1">
        <div>
          <div class="text-center">
            <a class="button-video mfp-youtube" href="https://www.youtube.com/watch?v=Pc40yA0eyZo"></a>
          </div>
        </div>
      </div>
      <!-- Video Ends -->
    </div>
  </div>
</section>
<!-- Features and Video Section Ends -->



<!-- latest search Section Starts -->
<section class="blog">
  <div class="container">
    <!-- Section Title Starts -->
    <div class="row text-center">
      <h2 class="title-head">Latest <span>Search</span></h2>
      <div class="title-head-subtitle">
        <p></p>
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
<!-- Footer Starts -->
<?php
include_once('footer.php')
?>
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
<script src="js/slider.js"></script>

<script>
  function convertUnits() {
    var inputValue = parseFloat(document.getElementById('inputValue').value);
    var inputUnit = document.getElementById('inputUnit').value;
    var outputUnit = document.getElementById('outputUnit').value;
    var result;

    if (inputUnit === 'marla') {
      result = convertFromMarla(inputValue, outputUnit);
    } else {
      var marlaValue = convertToMarla(inputValue, inputUnit);
      result = convertFromMarla(marlaValue, outputUnit);
    }

    document.getElementById('result').value = result;
  }

  function convertToMarla(value, unit) {
    if (unit === 'squareFoot') {
      return value / 272.25;
    } else if (unit === 'cubicFoot') {
      return value / 272.25 / 272.25 / 272.25;
    } else if (unit === 'kanal') {
      return value * 20;
    } else if (unit === 'acre') {
      return value * 20 * 8;
    } else if (unit === 'squareYard') {
      return value * 9 / 272.25;
    }

    return value;
  }

  function convertFromMarla(value, unit) {
    if (unit === 'squareFoot') {
      return value * 272.25;
    } else if (unit === 'cubicFoot') {
      return value * 272.25 * 272.25 * 272.25;
    } else if (unit === 'kanal') {
      return value / 20;
    } else if (unit === 'acre') {
      return value / 20 / 8;
    } else if (unit === 'squareYard') {
      return value * 272.25 / 9;
    }

    return value;
  }
</script>

</div>
<!-- Wrapper Ends -->
<script>
  function validateForm() {
    // Check if at least one checkbox is checked for each category
    var bedroomsChecked = document.querySelectorAll('input[name="bedrooms"]:checked');
    var bathroomsChecked = document.querySelectorAll('input[name="bathrooms"]:checked');
    var floorsChecked = document.querySelectorAll('input[name="floors"]:checked');
    var garagesChecked = document.querySelectorAll('input[name="garages"]:checked');

    if (bedroomsChecked.length === 0 && bathroomsChecked.length === 0 && floorsChecked.length === 0 && garagesChecked.length === 0) {
      alert("Please select at least one option.");
      return false; // Prevent form submission
    } else {
      var remainingOptions = "";

      if (bedroomsChecked.length === 0) {
        remainingOptions += "Bedrooms, ";
      }
      if (bathroomsChecked.length === 0) {
        remainingOptions += "Bathrooms, ";
      }
      if (floorsChecked.length === 0) {
        remainingOptions += "Floors, ";
      }
      if (garagesChecked.length === 0) {
        remainingOptions += "Garages, ";
      }

      if (remainingOptions !== "") {
        remainingOptions = remainingOptions.slice(0, -2); // Remove the trailing comma and space
        alert("Please select at least one option for the following: " + remainingOptions);
        return false; // Prevent form submission
      }
    }

    // Check if more than one checkbox is checked for any category
    if (bedroomsChecked.length > 1 || bathroomsChecked.length > 1 || floorsChecked.length > 1 || garagesChecked.length > 1) {
      var errorMessage = "Please select only one option for each category:\n";

      if (bedroomsChecked.length > 1) {
        errorMessage += "- Bedrooms\n";
      }
      if (bathroomsChecked.length > 1) {
        errorMessage += "- Bathrooms\n";
      }
      if (floorsChecked.length > 1) {
        errorMessage += "- Floors\n";
      }
      if (garagesChecked.length > 1) {
        errorMessage += "- Garages\n";
      }

      alert(errorMessage);
      return false; // Prevent form submission
    }

    return true; // Allow form submission
  }
</script>


</body>

</html>