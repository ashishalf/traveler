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
                        <h1 class="page-title">Tour Packages</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***package section html start form here*** -->
            <div class="package-item-wrap">
               <div class="container">

                  <?php $sql = "SELECT * from tbltourpackages";
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
                              <div class="package-meta">
                                 <ul>
                                    <li>
                                       <i class="fas fa-clock"></i>
                                       7D/6N
                                    </li>
                                    <li>
                                       <i class="fas fa-user-friends"></i>
                                       pax: 10
                                    </li>
                                    <li>
                                       <i class="fas fa-map-marker-alt"></i>
                                       <?php echo htmlentities($result->PackageLocation); ?>
                                    </li>
                                 </ul>
                              </div>
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
                                 <span>₹ <?php echo htmlentities($result->PackagePrice); ?></span>
                                 / per person
                              </h6>
                              <a href="package-detail.php?pkgid=<?php echo htmlentities($result->PackageId); ?>" class="outline-btn outline-btn-white">Details</a>
                           </div>
                        </article>
                  <?php }
                  } ?>
               </div>
            </div>
            <!-- ***package section html start form here*** -->
            <!-- ***client section html start form here*** -->
            <div class="client-section" style="background-image: url(assets/images/banner-img1.jpg);">
               <div class="overlay"></div>
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <article class="client-content">
                           <h5 class="sub-title">DISCOUNT OFFER</h5>
                           <h2 class="section-title">GET SPECIAL DISCOUNT ON SIGN UP !</h2>
                           <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantm sit.</p>
                           <a href="contact.php" class="round-btn">Sign Up Now</a>
                        </article>
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
            </div>
            <!-- ***clinet section html end here*** -->
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