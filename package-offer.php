<?php
session_start();
error_reporting(0);
include('include/config.php');
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
         <section class="inner-page-wrap">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Package Offer</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***offer package section html start form here*** -->
            <div class="offer-package-wrap">
               <div class="container">
                  <div class="row gx-5">
                     <?php $sql = "SELECT * from packageoffer";
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
               </div>
            </div>
            <!-- ***offer package section html start form here*** -->
            <!-- ***callback section html start form here*** -->
            <div class="bg-img-fullcallback" style="background-image: url(assets/images/img16.jpg);">
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
                           <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods, learn new customs, and see things you've never seen before.

</p>
                           <div class="callback-btn">
                              <a href="package.php" class="round-btn">View Packages</a>
                              <a href="about.php" class="outline-btn outline-btn-white">Learn More</a>
                           </div>
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