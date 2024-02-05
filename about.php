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
         <section class="inner-page-wrap">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">About Us</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***about section html start form here*** -->
            <div class="inner-about-wrap">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8">
                        <div class="about-content">
                           <figure class="about-image">
                              <img src="assets/images/img27.jpg" alt="">
                              <div class="about-image-content">
                                 <h3>WE ARE BEST FOR TOURS & TRAVEL SINCE 1985 !</h3>
                              </div>
                           </figure>
                           <h2>HOW WE ARE BEST FOR TRAVEL !</h2>
                           <p>To learn and grow: Traveling can be a great way to learn new skills, gain new perspectives, and broaden your horizons. You can learn new languages, develop cultural competency, and challenge yourself in new ways.</p>

                           <p> connect with others: Traveling can be a great way to connect with people from all over the world. Whether you're meeting locals or fellow travelers, you can make new friends and forge lasting relationships.</p>
                           <p>To create memories: Finally, traveling is a great way to create lifelong memories. Whether you're exploring a new city with your family, taking a romantic getaway with your partner, or going on a solo adventure, your travel experiences can stay with you for a lifetime.</p>
                        </div>
                        <div class="client-slider white-bg">
                           <figure class="client-item">
                              <img src="assets/images/client-img7.png" alt="">
                           </figure>
                           <figure class="client-item">
                              <img src="assets/images/client-img8.png" alt="">
                           </figure>
                           <figure class="client-item">
                              <img src="assets/images/client-img9.png" alt="">
                           </figure>
                           <figure class="client-item">
                              <img src="assets/images/client-img10.png" alt="">
                           </figure>
                           <figure class="client-item">
                              <img src="assets/images/client-img11.png" alt="">
                           </figure>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-umbrella-beach"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>AFFORDABLE TOURS</h3>
                              <p>While it's important to be open to new experiences, it's also important to plan ahead to ensure that your trip goes smoothly.</p>
                           </div>
                        </div>
                        <div class="icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-user-tag"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>BEST TOUR GUIDES</h3>
                              <p>Traveling can come with risks, so it's important to take precautions to ensure your safety.</p>
                           </div>
                        </div>
                        <div class="icon-box">
                           <div class="box-icon">
                              <i aria-hidden="true" class="fas fa-headset"></i>
                           </div>
                           <div class="icon-box-content">
                              <h3>AFFORDABLE TOURS</h3>
                              <p> Being open to new experiences and perspectives can help you get the most out of your travels.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***about section html start form here*** -->
            <!-- ***callback section html start form here*** -->
            <div class="bg-img-fullcallback" style="background-image: url(assets/images/img7.jpg);">
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