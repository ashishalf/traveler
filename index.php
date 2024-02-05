<?php
session_start();
error_reporting(0);
include('include/config.php');
?>

<!doctype html>
<html lang="en">
<?php include 'include/header.php'; ?>

<body class="home">

   <div id="page" class="page">
      <!-- site header html start  -->
      <?php include 'include/navbar.php'; ?>
      <!-- site header html end  -->
      <main id="content" class="site-main">
         <!-- ***home banner html start form here*** -->
         <section class="home-banner-section home-banner-slider">
            <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url(https://source.unsplash.com/2000x1000/?travel,india);">
               <div class="overlay"></div>
               <div class="container">
                  <div class="banner-content text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h2 class="banner-title">JOURNEY TO EXPLORE WORLD</h2>
                           <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods, learn new customs, and see things you've never seen before.</p>
                           <div class="banner-btn">
                              <a href="about.php" class="round-btn">LEARN MORE</a>
                              <a href="./package.php" class="outline-btn outline-btn-white">BOOK NOW</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="home-banner d-flex flex-wrap align-items-center" style="background-image: url(https://source.unsplash.com/2000x1000/?nature,india);">
               <div class="overlay"></div>
               <div class="container">
                  <div class="banner-content text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h2 class="banner-title">BEAUTIFUL PLACE TO VISIT</h2>
                           <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods, learn new customs, and see things you've never seen before.</p>
                           <div class="banner-btn">
                              <a href="about.php" class="round-btn">LEARN MORE</a>
                              <a href="booking.php" class="outline-btn outline-btn-white">BOOK NOW</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ***home banner html end here*** -->

         <!-- ***Home destination html start from here*** -->
         <section class="home-destination">
            <div class="container">

               <div class="row">
                  <div class="col-lg-8 offset-lg-2 text-sm-center">
                     <div class="section-heading">
                        <h5 class="sub-title">UNCOVER PLACE</h5>
                        <h2 class="section-title">POPULAR DESTINATION</h2>
                        <p>Paris, France - Known as the "City of Love," Paris is famous for its romantic atmosphere, stunning architecture, and world-class museums and art galleries.</p>
                     </div>
                  </div>
               </div>
               <div class="destination-section">
                  <div class="row">
                     <?php $sql = "SELECT * from tbldestination order by rand() limit 3";
                     $query = $dbh->prepare($sql);
                     $query->execute();
                     $results = $query->fetchAll(PDO::FETCH_OBJ);
                     $cnt = 1;
                     if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                           //   print_r($result); 
                     ?>
                           <div class="col-lg-4 col-md-6">

                              <article class="destination-item" style="background-image: url(admin/destinationimages/<?php echo htmlentities($result->DestinationImage); ?>);">
                                 <div class="destination-content">
                                    <div class="rating-start-wrap">
                                       <div class="rating-start">
                                          <span style="width: 100%"></span>
                                       </div>
                                    </div>
                                    <span class="cat-link">
                                       <a href="destination.php?pkgid=<?php echo htmlentities($result->DestinationId); ?>">
                                          <?php echo htmlentities($result->DestinationLocation); ?></a>
                                    </span>
                                    <h3>
                                       <a href="popular-destination-details.php?pkgid=<?php echo htmlentities($result->DestinationId); ?>">
                                          <?php echo htmlentities($result->DestinationName); ?></a>
                                    </h3>
                                    <p> <?php echo substr($result->DestinationDetails, 0, 50); ?></p>
                                 </div>
                              </article>


                           </div>
                     <?php }
                     } ?>
                     <div class="section-btn-wrap text-center">
                        <a href="destination.php" class="round-btn">More Destination</a>
                     </div>
                  </div>
         </section>
         <!-- ***Home destination html end here*** -->
         <!-- ***Home package html start from here*** -->
         <section class="home-package">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2 text-sm-center">
                     <div class="section-heading">
                        <h5 class="sub-title">POPULAR PACKAGES</h5>
                        <h2 class="section-title">CHECKOUT OUR PACKAGES</h2>
                        <p>you're looking for, such as the destination, travel dates, budget, and any specific preferences you have, I can try to provide you with some general advice or recommendations.</p>
                     </div>
                  </div>
               </div>
               <div class="package-section">
                  <?php $sql = "SELECT * from tbltourpackages order by rand() limit 3";
                  $query = $dbh->prepare($sql);
                  $query->execute();
                  $results = $query->fetchAll(PDO::FETCH_OBJ);
                  $cnt = 1;
                  if ($query->rowCount() > 0) {
                     foreach ($results as $result) {
                        //   print_r($result); 
                  ?>
                        <article class="package-item">
                           <figure class="package-image" style="background-image: url(admin/packageimages/<?php echo htmlentities($result->PackageImage); ?>);"></figure>
                           <div class="package-content">
                              <h3>
                                 <a href="package-detail.php?pkgid=<?php echo htmlentities($result->PackageId); ?>">
                                    <?php echo htmlentities($result->PackageName); ?>
                                 </a>
                              </h3>
                              <p> <?php echo substr($result->PackageDetails, 0, 250); ?></p>
                           </div>
                           <div class="package-price">
                              <div class="review-area">
                                 <span class="review-text">(25 reviews)</span>
                                 <div class="rating-start-wrap d-inline-block">
                                    <div class="rating-start">
                                       <span style="width: 80%"></span>
                                    </div>
                                 </div>
                              </div>
                              <h6 class="price-list">
                                 <span>₹<?php echo htmlentities($result->PackagePrice); ?></span>
                                 / per person
                              </h6>
                              <a href="package-detail.php?pkgid=<?php echo htmlentities($result->PackageId); ?>" class="outline-btn outline-btn-white">Details</a>
                           </div>
                        </article>
                  <?php }
                  } ?>
                  <div class="section-btn-wrap text-center">
                     <a href="package.php" class="round-btn">VIEW ALL PACKAGES</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- ***Home package html end here*** -->
         <!-- ***Home callback html start from here*** -->
         <section class="home-callback bg-img-fullcallback" style="background-image: url(assets/images/img7.jpg);">
            <div class="overlay"></div>
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2 text-center">
                     <div class="callback-content">
                        <div class="video-button">
                           <a id="video-container" data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=2OYar8OHEOU">
                              <i class="fas fa-play"></i>
                           </a>
                        </div>
                        <h2 class="section-title">ARE YOU READY TO TRAVEL? REMEMBER US !!</h2>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods, learn new customs, and see things you've never seen before.</p>
                        <div class="callback-btn">
                           <a href="package.php" class="round-btn">View Packages</a>
                           <a href="about.php" class="outline-btn outline-btn-white">Learn More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ***Home callback html end here*** -->
         <!-- ***Home counter html start from here*** -->
         <div class="home-counter">
            <div class="container">
               <div class="counter-wrap">
                  <div class="counter-item">
                     <span class="counter-no">
                        <span class="counter">80</span>K+
                     </span>
                     <span class="counter-desc">
                        SATISFIED CUSTOMER
                     </span>
                  </div>
                  <div class="counter-item">
                     <span class="counter-no">
                        <span class="counter">18</span>+
                     </span>
                     <span class="counter-desc">
                        ACTIVE MEMBERS
                     </span>
                  </div>
                  <div class="counter-item">
                     <span class="counter-no">
                        <span class="counter">220</span>+
                     </span>
                     <span class="counter-desc">
                        TOUR DESTINATION
                     </span>
                  </div>
                  <div class="counter-item">
                     <span class="counter-no">
                        <span class="counter">75</span>+
                     </span>
                     <span class="counter-desc">
                        TRAVEL GUIDES
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <!-- ***Home counter html end here*** -->
         <!-- ***Home offer html start from here*** -->
         <section class="home-offer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2 text-sm-center">
                     <div class="section-heading">
                        <h5 class="sub-title">OFFER & DISCOUNT</h5>
                        <h2 class="section-title">OUR SPECIAL PACKAGES</h2>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods, learn new customs, and see things you've never seen before.</p>
                     </div>
                  </div>
               </div>
               <div class="offer-section">
                  <div class="row gx-5">
                     <?php $sql = "SELECT * from packageoffer order by rand() limit 2";
                     $query = $dbh->prepare($sql);
                     $query->execute();
                     $results = $query->fetchAll(PDO::FETCH_OBJ);
                     $cnt = 1;
                     if ($query->rowCount() > 0) {
                        foreach ($results as $result) {
                           //   print_r($result); 
                     ?>
                           <div class="col-md-6">
                              <article class="offer-item" style="background-image: url(admin/offerimages/<?php echo htmlentities($result->OfferImage); ?>);">
                                 <div class="offer-badge">
                                    UPTO <span><?php echo htmlentities($result->PercentageOff); ?></span> off
                                 </div>
                                 <div class="offer-content">
                                    <div class="package-meta">
                                       <ul>
                                          <li>
                                             <i class="fas fa-map-marker-alt"></i>
                                             <?php echo htmlentities($result->OfferLocation); ?>
                                          </li>
                                       </ul>
                                    </div>
                                    <h3>
                                       <a href="package-offer-details.php?pkgid=<?php echo htmlentities($result->OfferId); ?>">
                                          <?php echo htmlentities($result->OfferName); ?></a>
                                    </h3>
                                    <p>
                                       <?php echo substr($result->OfferDetails, 0, 50); ?>
                                    </p>
                                    <div class="price-list">
                                       Price:
                                       <del>₹<?php echo htmlentities($result->ActualPrice); ?></del>
                                       <ins>₹<?php echo htmlentities($result->OfferPrice); ?></ins>
                                    </div>
                                    <a href="package-offer-details.php?pkgid=<?php echo htmlentities($result->OfferId); ?>" class="round-btn">Details</a>
                                 </div>
                              </article>
                           </div>
                     <?php }
                     } ?>
                  </div>
                  <div class="section-btn-wrap text-center">
                     <a href="package-offer.php" class="round-btn">VIEW ALL PACKAGES</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- ***Home offer html end here*** -->

         <!-- ***Home client html start from here*** -->
         <section class="home-client client-section" style="background-image: url(assets/images/banner-img1.jpg);">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="client-content">
                        <h5 class="sub-title">DISCOUNT OFFER</h5>
                        <?php if ($_SESSION['email']) { ?>
                        <h2 class="section-title">GET SPECIAL DISCOUNT !</h2>
                        <?php } else { ?>
                           <h2 class="section-title">GET SPECIAL DISCOUNT ON SIGN UP !</h2>
                           <?php } ?>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods, learn new customs, and see things you've never seen before.</p>
                        <!-- <a href="./booking.php" class="round-btn">Book Now</a> -->
                        <?php if ($_SESSION['email']) { ?>
                                          <a href="package-offer.php" class="round-btn">Get Offers</a>
                                       <?php } else { ?>
                                          <a href="sign-in.php" class="round-btn">Book now</a>
                                       <?php } ?>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="client-logo">
                        <ul>
                           <li>
                              <img src="assets/images/client-img1.png" alt="">
                           </li>
                           <li>
                              <img src="assets/images/client-img2.png" alt="">
                           </li>
                           <li>
                              <img src="assets/images/client-img3.png" alt="">
                           </li>
                           <li>
                              <img src="assets/images/client-img4.png" alt="">
                           </li>
                           <li>
                              <img src="assets/images/client-img5.png" alt="">
                           </li>
                           <li>
                              <img src="assets/images/client-img6.png" alt="">
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="overlay"></div>
         </section>
         <!-- ***Home client html end here*** -->
         <!-- ***Home testimonial html start from here*** -->
         <section class="home-testimonial">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2 text-center">
                     <div class="section-heading">
                        <h5 class="sub-title">CLIENT'S REVIEWS</h5>
                        <h2 class="section-title">TRAVELLER'S TESTIMONIAL</h2>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods, learn new customs, and see things you've never seen before.</p>
                     </div>
                  </div>
               </div>
               <div class="testimonial-section testimonial-slider">
                  <div class="testimonial-item">
                     <div class="testimonial-content">
                        <div class="rating-start-wrap">
                           <div class="rating-start">
                              <span style="width: 80%"></span>
                           </div>
                        </div>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods.</p>
                        <div class="author-content">
                           <figure class="testimonial-img">
                              <img src="assets/images/img18.jpg" alt="">
                           </figure>
                           <div class="author-name">
                              <h5>WILLIAM WRIGHT</h5>
                              <span>TRAVELLERS</span>
                           </div>
                        </div>
                        <div class="testimonial-icon">
                           <i aria-hidden="true" class="fas fa-quote-left"></i>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-item">
                     <div class="testimonial-content">
                        <div class="rating-start-wrap">
                           <div class="rating-start">
                              <span style="width: 80%"></span>
                           </div>
                        </div>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods.</p>
                        <div class="author-content">
                           <figure class="testimonial-img">
                              <img src="assets/images/img19.jpg" alt="">
                           </figure>
                           <div class="author-name">
                              <h5>ALISON WHITE</h5>
                              <span>TRAVELLERS</span>
                           </div>
                        </div>
                        <div class="testimonial-icon">
                           <i aria-hidden="true" class="fas fa-quote-left"></i>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-item">
                     <div class="testimonial-content">
                        <div class="rating-start-wrap">
                           <div class="rating-start">
                              <span style="width: 80%"></span>
                           </div>
                        </div>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods.</p>
                        <div class="author-content">
                           <figure class="testimonial-img">
                              <img src="assets/images/img20.jpg" alt="">
                           </figure>
                           <div class="author-name">
                              <h5>GEORGE SMITH</h5>
                              <span>TRAVELLERS</span>
                           </div>
                        </div>
                        <div class="testimonial-icon">
                           <i aria-hidden="true" class="fas fa-quote-left"></i>
                        </div>
                     </div>
                  </div>
                  <div class="testimonial-item">
                     <div class="testimonial-content">
                        <div class="rating-start-wrap">
                           <div class="rating-start">
                              <span style="width: 80%"></span>
                           </div>
                        </div>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods.</p>
                        <div class="author-content">
                           <figure class="testimonial-img">
                              <img src="assets/images/img19.jpg" alt="">
                           </figure>
                           <div class="author-name">
                              <h5>ALISON WHITE</h5>
                              <span>TRAVELLERS</span>
                           </div>
                        </div>
                        <div class="testimonial-icon">
                           <i aria-hidden="true" class="fas fa-quote-left"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ***Home testimonial html end here*** -->
         <!-- ***Home callback html start from here*** -->
         <section class="home-callback bg-color-callback primary-bg">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-8">
                     <h5 class="sub-title">CALL TO ACTION</h5>
                     <h2 class="section-title">READY FOR UNFORGATABLE TRAVEL. REMEMBER US!</h2>
                     <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods.</p>
                  </div>
                  <div class="col-md-4 text-md-end">
                     <a href="contact.php" class="outline-btn outline-btn-white">Contact Us !</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- ***Home callback html end here*** -->
      </main>
      <!-- ***site footer html start form here*** -->
      <?php include 'include/footer.php'; ?>
      <a id="backTotop" href="#" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
      </a>
      <!-- ***custom search field html*** -->
      <?php include 'include/custom_search.php'; ?>

   </div>
   <?php
   include 'include/javascript.php';
   ?>
</body>

</html>