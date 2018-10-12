<?php

  include '_includes_/_head.php'; 
  $pageName = 'Home';

?>
  <title>Skyway Towing & Recovery | St. Petersburg - Pinellas Park</title>
  <meta name="description" content="Skyway Towing &amp; Recovery in St. Petersburg offers impounding, signage, property consulation, junk car purchasing. Servicing Pinellas County since 2012.">

  <style>
    .masthead-container {
      background: url(img/cloud-background-image.jpg) no-repeat center;
    }
  </style>
</head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
      <?php include '_includes_/_nav.php'; ?>

      <div class="about-wrapper container-fluid">
        <img id="bannerImage" src='img/skyway_towing_recovery_banner.png' srcset='img/skyway_towing_recovery_banner.png 1x, img/skyway_towing_recovery_banner@2x.png 2x, img/skyway_towing_recovery_banner@3x.png 3x' style='max-width: 100vw'/>

        <section id="about" class="container">
          <div class="row">
            <h1 class="section-header"><span>About</span></h1>
            <div class="about-section-container">
              <p>
                <div class="image-container col-xs-6">
                  <img src="img/truck-garage-towing-car.jpg" alt="image of company truck or signage">
                  <p class="caption">Skyway Towing & Recovery is preferred due to their ability to retrieve vehicles from shallow parking garages.</p>
                </div>
                Skyway Towing & Recovery is family owned and operated with more than 20 years of experience.  We have been servicing Southern Pinellas County since 2012 through two locations, our home office in St. Petersburg and a satellite office in Pinellas Park.<br><br>
                We are open weekdays from 8 am to 6 pm and offer after-hours services such as emergency towing and roadside assistance. We provide regular impounding services, emergency towing, as well as property signage and consulting. We specialize in the removal of unwanted or illegally parked vehicles, with an average response time of fewer than 30 minutes.<br><br>
                Skyway Towing & Recovery has quickly become a leader in towing services for the Downtown St. Petersburg community of apartment complexes, businesses, and restaurants.
              </p>
              <div id="about-cta" class="col-xs-12">
                <h2 class="">Car impounded? <span class="bullet">&bull;</span> Need a tow? <span class="bullet">&bull;</span> Schedule a consultation?</h2>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3" itemscope itemtype="http://schema.org/LocalBusiness"><span itemprop="telephone"><a href="tel:+17278941199" class="cta-button" alt="telephone number link">Call Today!</a></span></div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="services-wrapper container-fluid">
        <section id="services" class="container">

          <div class="row">
            <h1 class="section-header"><span>Services</span></h1>
            <p>Here are some brief descriptions of a few of the services we offer. Be sure to click the button below each to learn more.</p>

            <div class="service-card-container">
              <div class="service-card">
                <div class="service-icon signage">
                  <!-- <img src="img/solid-sign-icon.svg" alt="Sign icon by Yaroslav Samoilov from the Noun Project"> -->
                </div>
                <div class="service-title"><h2>Signage</h2></div>
                <div class="service-description">Signage, permitting & stickers available to property owners.</div>
                <div class="button-container"><a href="/towing-services.php" class="service-button animated-button" type="button">Learn More</a></div>
              </div>

              <div class="service-card">
                <div class="service-icon impound">
                  <!-- <img src="img/solid-impound-icon.svg" alt="Evacuator icon by Bernar  Novalyi from the Noun Project"> -->
                </div>
                <div class="service-title"><h2>Impounding</h2></div>
                <div class="service-description">Removal of unwanted, illegally parked, or cars in violation of city ordinance.</div>
                <div class="button-container"><a href="/towing-services.php" class="service-button animated-button" type="button">Learn More</a></div>
              </div>

              <div class="service-card">
                <div class="service-icon consultation">
                  <!-- <img src="img/solid-consultation-icon.svg" alt="Consultation icon by Lakshisha from the Noun Project"> -->
                </div>
                <div class="service-title"><h2>Property Consultation</h2></div>
                <div class="service-description">Establish a comprehensive strategy at no cost to propert owners.</div>
                <div class="button-container"><a href="/towing-services.php" class="service-button animated-button" type="button">Learn More</a></div>
              </div>
            </div>

          </div>


        </section>
      </div>

<?php include '_includes_/_footer.php'; ?>

      
    </body>
</html>
