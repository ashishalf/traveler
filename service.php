<?php
session_start();
error_reporting(0);
?>
<!doctype html>
<html lang="en">
<?php include 'include/header.php'; ?>
<body>
   <div id="page" class="page">
      <!-- ***site header html start*** -->
      <?php include 'include/navbar.php'; ?>
      <!-- ***site header html end*** -->
      <main id="content" class="site-main">
         <section class="service-inner-page inner-page-wrap">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Services</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***about section html start form here*** -->
            <div class="inner-service-wrap">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4 col-sm-6">
                        <div class="icon-box bg-img-box" style="background-image: url(assets/images/img4.jpg);">
                           <div class="box-icon">
                              <i class="fas fa-hotel"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>BEST HOTELS</h3>
                              <p>Luxurious accommodations with impeccable service, stunning amenities, and a perfect blend of comfort and elegance.</p>
                              <a href="#" class="round-btn">Learn More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-6">
                        <div class="icon-box bg-img-box" style="background-image: url(assets/images/img28.jpg);">
                           <div class="box-icon">
                              <i class="fas fa-plane-departure"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>TRAVEL INSURANCE</h3>
                              <p>Comprehensive protection for your travel adventures, safeguarding you against unforeseen emergencies.</p>
                              <a href="#" class="round-btn">Learn More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-6">
                        <div class="icon-box bg-img-box" style="background-image: url(assets/images/img12.jpg);">
                           <div class="box-icon">
                              <i class="fas fa-store"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>ACCESSIBILITY</h3>
                              <p>Inclusive design and convenient facilities ensuring equal access and comfort for all guests, regardless of abilities.</p>
                              <a href="#" class="round-btn">Learn More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-6">
                        <div class="icon-box bg-img-box" style="background-image: url(assets/images/img13.jpg);">
                           <div class="box-icon">
                              <i class="fas fa-file-alt"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>ONLINE BOOKING</h3>
                              <p>Convenient platform to reserve accommodations effortlessly, with a wide range of options and secure transactions.</p>
                              <a href="#" class="round-btn">Learn More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-6">
                        <div class="icon-box bg-img-box" style="background-image: url(assets/images/img17.jpg);">
                           <div class="box-icon">
                              <i class="fas fa-bus"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>BEST TOUR</h3>
                              <p>Unforgettable adventures with knowledgeable guides, breathtaking sights, and immersive experiences.</p>
                              <a href="#" class="round-btn">Learn More</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-sm-6">
                        <div class="icon-box bg-img-box" style="background-image: url(assets/images/img10.jpg);">
                           <div class="box-icon">
                              <i class="fas fa-headset"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>24*7 SUPPORT</h3>
                              <p>Round-the-clock assistance and guidance provided to ensure prompt and reliable support at any time.</p>
                              <a href="#" class="round-btn">Learn More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***about section html start form here*** -->
            <!-- ***callback section html start form here*** -->
            <div class="bg-color-callback bg-light-grey">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-8 offset-lg-2 text-center">
                        <h5 class="sub-title">CALL TO ACTION</h5>
                        <h2 class="section-title">READY FOR UNFORGATABLE TRAVEL. REMEMBER US!</h2>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods.</p>
                        <div class="callback-btn">
                           <a href="contact.php" class="round-btn">Contact Us!</a>
                           <a href="about.php" class="outline-btn">Learn More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***callback section html end here*** -->
         </section>
      </main>
      <?php include 'include/footer.php'; ?>
      <a id="backTotop" href="#" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
      </a>
      <!-- ***custom search field html*** -->
      <?php include 'include/custom_search.php'; ?>
      <!-- ***custom search field html*** -->
   </div>

   <!-- JavaScript -->
   <?php
   include 'include/javascript.php';
   ?>
</body>
</html>