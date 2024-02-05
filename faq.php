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
         <section class="contact-inner-page">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">FAQ</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <!-- ***faq section html start form here*** -->
            <div class="faq-page-section">
               <div class="faq-page-container">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="section-head">
                              <div class="sub-title">QUESTIONS / ANSWERS</div>
                              <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
                              <p>Common inquiries answered in a concise manner, providing quick and helpful information to address common concerns.</p>
                           </div>
                           <div id="accordion-tab-one" class="accordion-content" role="tablist">
                              <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-A">
                                 <div class="card-header" role="tab" id="qus-A">
                                    <h5 class="mb-0">
                                       <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="true" aria-controls="collapse-one">
                                          HOW CAN I PAY FOR MY BOOKING?
                                       </a>
                                    </h5>
                                 </div>
                                 <div id="collapse-one" class="collapse show" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-A">
                                    <div class="card-body">
                                       You can pay for your booking by selecting a payment method such as credit card, debit card, or online payment platforms during the reservation process.
                                    </div>
                                 </div>
                              </div>
                              <div id="accordion-B" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-B">
                                 <div class="card-header" role="tab" id="qus-B">
                                    <h5 class="mb-0">
                                       <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two" aria-expanded="false" aria-controls="collapse-two">
                                          WHAT ARE ACCEPTABLE PAYMENT METHOD?
                                       </a>
                                    </h5>
                                 </div>
                                 <div id="collapse-two" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-B">
                                    <div class="card-body">
                                       Acceptable payment methods vary by establishment but typically include credit cards, debit cards, cash, and sometimes digital wallets or bank transfers.
                                    </div>
                                 </div>
                              </div>
                              <div id="accordion-C" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-C">
                                 <div class="card-header" role="tab" id="qus-C">
                                    <h5 class="mb-0">
                                       <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three" aria-expanded="true" aria-controls="collapse-three">
                                          HOW WE PROVIDE SERVICES FOR YOU?
                                       </a>
                                    </h5>
                                 </div>
                                 <div id="collapse-three" class="collapse" data-bs-parent="#accordion-tab-one" role="tabpanel" aria-labelledby="qus-C">
                                    <div class="card-body">
                                       We provide services by leveraging advanced technology, trained experts, and a commitment to meeting your needs, ensuring a seamless and personalized experience.
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="faq-testimonial">
                              <figure class="faq-image">
                                 <img src="assets/images/img29.jpg" alt="">
                              </figure>
                              <div class="testimonial-content">
                                 <span class="quote-icon">
                                    <i aria-hidden="true" class="icon icon-quote1"></i>
                                 </span>
                                 <p>"Travel is the only thing you can buy that makes you richer." - Anonymous.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="faq-page-container bg-light-grey">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-sm-center">
                           <div class="section-heading">
                              <h5 class="sub-title">BENEFITS & AIM</h5>
                              <h2 class="section-title">BENEFITS AND WHAT WE DO?</h2>
                              <p>We provide exceptional benefits, catering to your needs with top-notch services, ensuring a memorable and fulfilling experience.</p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="faq-content-wrap">
                              <div id="accordion-tab-two" class="accordion-content" role="tablist">
                                 <div id="accordion-E" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-E">
                                    <div class="card-header" role="tab" id="qus-E">
                                       <h5 class="mb-0">
                                          <a data-bs-toggle="collapse" href="#collapse-five" aria-expanded="true" aria-controls="collapse-five">
                                             WHAT OUR TERMS AND CONDITION?
                                          </a>
                                       </h5>
                                    </div>
                                    <div id="collapse-five" class="collapse show" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-E">
                                       <div class="card-body">
                                          Our terms and conditions outline the rules, obligations, and rights regarding the use of our services, including payment, cancellations, liability, and privacy. Please refer to our official documentation for detailed information.
                                       </div>
                                    </div>
                                 </div>
                                 <div id="accordion-F" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-F">
                                    <div class="card-header" role="tab" id="qus-F">
                                       <h5 class="mb-0">
                                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-six" aria-expanded="false" aria-controls="collapse-six">
                                             DO I HAVE TO MAKE RESERVATION?
                                          </a>
                                       </h5>
                                    </div>
                                    <div id="collapse-six" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-F">
                                       <div class="card-body">
                                          Yes, it is highly recommended to make a reservation in advance to ensure availability and secure your desired accommodations at the hotel.
                                       </div>
                                    </div>
                                 </div>
                                 <div id="accordion-G" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-G">
                                    <div class="card-header" role="tab" id="qus-G">
                                       <h5 class="mb-0">
                                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-seven" aria-expanded="true" aria-controls="collapse-seven">
                                             WHAT BENEFITS YOU GET FRIM BOOKING?
                                          </a>
                                       </h5>
                                    </div>
                                    <div id="collapse-seven" class="collapse" data-bs-parent="#accordion-tab-two" role="tabpanel" aria-labelledby="qus-G">
                                       <div class="card-body">
                                          By booking with us, you enjoy exclusive benefits such as competitive rates, guaranteed room availability, personalized service, loyalty rewards, and special amenities tailored to enhance your stay.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="faq-content-wrap">
                              <div id="accordion-tab-three" class="accordion-content" role="tablist">
                                 <div id="accordion-I" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-I">
                                    <div class="card-header" role="tab" id="qus-I">
                                       <h5 class="mb-0">
                                          <a data-bs-toggle="collapse" href="#collapse-nine" aria-expanded="true" aria-controls="collapse-nine">
                                             How do we manage to fund charity ?
                                          </a>
                                       </h5>
                                    </div>
                                    <div id="collapse-nine" class="collapse show" data-bs-parent="#accordion-tab-three" role="tabpanel" aria-labelledby="qus-I">
                                       <div class="card-body">
                                          Charities are funded through a variety of sources, including individual donations, corporate sponsorships, grants, fundraising events, and partnerships with philanthropic organizations.
                                       </div>
                                    </div>
                                 </div>
                                 <div id="accordion-J" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-J">
                                    <div class="card-header" role="tab" id="qus-J">
                                       <h5 class="mb-0">
                                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-ten" aria-expanded="false" aria-controls="collapse-ten">
                                             How did we manage your fund raised ?
                                          </a>
                                       </h5>
                                    </div>
                                    <div id="collapse-ten" class="collapse" data-bs-parent="#accordion-tab-three" role="tabpanel" aria-labelledby="qus-J">
                                       <div class="card-body">
                                          The funds raised were managed through careful financial planning, transparent reporting, and adherence to established guidelines and regulations to ensure their effective utilization.
                                       </div>
                                    </div>
                                 </div>
                                 <div id="accordion-K" class="card tab-pane" role="tabpanel" aria-labelledby="accordion-K">
                                    <div class="card-header" role="tab" id="qus-K">
                                       <h5 class="mb-0">
                                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-eleven" aria-expanded="true" aria-controls="collapse-eleven">
                                             How to donate your money for charity ?
                                          </a>
                                       </h5>
                                    </div>
                                    <div id="collapse-eleven" class="collapse" data-bs-parent="#accordion-tab-three" role="tabpanel" aria-labelledby="qus-K">
                                       <div class="card-body">
                                          To donate money for charity, research reputable organizations aligned with your cause, visit their websites, and follow their instructions to make a secure online donation.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***faq section html start form here*** -->
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