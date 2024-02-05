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
      <!-- ***site header html start*** -->
      <?php include 'include/navbar.php'; ?>
      <!-- ***site header html end*** -->
      <main id="content" class="site-main">
         <section class="destination-inner-page">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Destination</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***destination section html start form here*** -->
            <div class="destination-item-wrap">

               <div class="container">

                  <div class="row gx-5">
                     <?php $sql = "SELECT * from tbldestination";
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
                  </div>

               </div>

            </div>
            <!-- ***destination section html start form here*** -->
            <!-- ***counter section html start form here*** -->
            <div class="inner-counter">
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
            <!-- ***counter section html end here*** -->
            <!-- ***callback section html start form here*** -->
            <div class="bg-color-callback primary-bg">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-8 offset-lg-2 text-center">
                        <h5 class="sub-title">CALL TO ACTION</h5>
                        <h2 class="section-title">READY FOR UNFORGATABLE TRAVEL. REMEMBER US!</h2>
                        <p>Traveling allows you to experience different parts of the world and immerse yourself in new cultures. You can try new foods.</p>
                        <a href="contact.php" class="outline-btn outline-btn-white">Contact Us !</a>
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