<?php
session_start();
include 'db/config.php'
?>
<header id="masthead" class="site-header">
   <!-- header html start -->
   <div class="top-header">
      <div class="container">
         <div class="top-header-inner">
            <div class="header-contact text-left">
               <a href="telto:01977259912">
                  <i aria-hidden="true" class="icon icon-phone-call2"></i>
                  <div class="header-contact-details d-none d-sm-block">
                     <span class="contact-label">For Further Inquires :</span>
                     <h5 class="header-contact-no">+91 8126XXXXXX</h5>
                  </div>
               </a>
            </div>
            <div class="site-logo text-center">
               <h1 class="site-title">
                  <a href="index.php">
                     <img src="assets/images/site-logo.png" alt="Logo">
                  </a>
               </h1>
            </div>
            <div class="header-icon text-right">
               <div class="header-search-icon d-inline-block">
                  <a href="#">
                     <i aria-hidden="true" class="fas fa-search"></i>
                  </a>
               </div>

            </div>
         </div>
      </div>
   </div>
   <div class="bottom-header">
      <div class="container">
         <div class="bottom-header-inner d-flex justify-content-between align-items-center">
            <div class="header-social social-icon">
               <ul>
                  <li>
                     <a href="https://www.facebook.com/" target="_blank">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                     </a>
                  </li>
                  <li>
                     <a href="https://www.twitter.com/" target="_blank">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                     </a>
                  </li>
                  <li>
                     <a href="https://www.youtube.com/" target="_blank">
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="navigation-container d-none d-lg-block">
               <nav id="navigation" class="navigation">
                  <ul>
                     <li>
                        <a href="index.php">Home</a>
                     </li>
                     <li>
                        <a href="about.php">about us</a>
                     </li>
                     <li>
                        <a href="destination.php">destination</a>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="index.php">packages</a>
                        <ul>
                           <li>
                              <a href="package.php">Packages</a>
                           </li>
                           <li>
                              <a href="package-offer.php">Package offer</a>
                           </li>
                        </ul>
                     </li>
                     <li class="menu-item-has-children">
                        <a href="index.php">Pages</a>
                        <ul>

                           <li>
                              <a href="service.php">Service</a>
                           </li>
                           <li>
                              <a href="policy.php">Privacy Policy</a>
                           </li>
                           <li>
                              <a href="term.php">Term & Conditions</a>
                           </li>
                           <li>
                              <a href="faq.php">Faq Page</a>
                           </li>

                        </ul>
                     </li>
                     <li>
                        <a href="contact.php">contact us</a>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="header-btn">


               <?php

               if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                  $id = $_SESSION['id'];

                  echo '<a href="profile.php?pid=' . $id . '"class="round-btn">Your Profile</a>'; // display the current user's email



               } else {
                  echo '<a href="./sign-in.php" class="round-btn">Sign in</a>'; // display a "Sign in" link if no user is logged in
               }
               ?>

            </div>
         </div>
      </div>
   </div>
   <div class="mobile-menu-container"></div>
</header>