<?php
session_start();
error_reporting(0);
include('db/config.php');
if (isset($_POST['submit'])) {
   $pid=intval($_GET['pkgid']);
   $bname = $_POST['fullname'];
   $bemail = $_POST['email'];
   $bmobile = $_POST['mobile'];
   $bnameoncard = $_POST['nameoncard'];
   $bcard_number = $_POST['card_number'];
   $bexpire_month = $_POST['expire_month'];
   $bexpire_year = $_POST['expire_year'];
   $bcvv = $_POST['cvv'];
   $bcountry = $_POST['country'];
   $bstreet_1 = $_POST['street_1'];
   $bstreet_2 = $_POST['street_2'];
   $bcity = $_POST['city'];
   $bstate = $_POST['state'];
   $bpincode = $_POST['pincode'];
   $badditional_information = $_POST['additional_information'];
   $status=0;
   $sql = "INSERT INTO booking(PackageId,FirstName,Email, Phone, NameOnCard, CardNumber, ExpMonth, ExpYear, CVV, Country, StreetLine1, StreetLine2, City, State1, Pincode, Additional_Information,status) VALUES('$pid','$bname','$bemail', '$bmobile', '$bnameoncard', '$bcard_number', '$bexpire_month', '$bexpire_year', '$bcvv', '$bcountry', '$bstreet_1', '$bstreet_2', '$bcity', '$bstate', '$bpincode', '$badditional_information','$status')";

   if ($conn->query($sql) === TRUE) {
      $lastInsertId = $conn->insert_id;
      
      if ($lastInsertId) {
         echo "<script>
                alert('Booking Successful 😊');
                window.location.href='confirmation.php?bid=$lastInsertId&pkgid=" . htmlentities($pid) . "';
                </script>";         
      } else {
         $error = "Something went wrong. Please try again";
      }
   } else {
      $error = "Error: " . $sql . "<br>" . $conn->error;
   }
}
?>

<!doctype html>
<html lang="en">
<?php include 'include/header.php'; ?>
<body>
   <div id="page" class="page">
      <!-- ***site header html start*** -->
      <?php include 'include/navbar.php'; ?>
      <main id="content" class="site-main">
         <section class="booking-inner-page">
            <!-- ***Inner Banner html start form here*** -->
            <div class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="page-title">Booking</h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ***Inner Banner html end here*** -->
            <div class="booking-section">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 right-sidebar">
                        <!-- step one form html start -->
                        <div class="booking-form-wrap">
                           <form method="POST" action="">
                              <div class="booking-content">
                                 <div class="form-title">
                                    <span>1</span>
                                    <h3>Your Details</h3>
                                 </div>
                                 <div class="row">

                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Full Name*</label>
                                          <input type="text" class="form-control" name="fullname" id="fullname" required>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <?php
                              include('include/config.php');
                              $id = $_SESSION['id'];
                              $sql = "SELECT email from users where id=$id";
                              $query = $dbh->prepare($sql);
                              $query->execute();
                              $results = $query->fetchAll(PDO::FETCH_OBJ);
                              $cnt = 1;
                              if ($query->rowCount() > 0) {
                                 foreach ($results as $result) {
                                    //   print_r($result); 
                              ?>
                              <?php }
                              } ?>

                                       <div class="form-group">
                                          <label>Email*</label>
                                          <input type="email" class="form-control" name="email" id="email" value="<?php echo htmlentities($result->email); ?>" readonly>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Phone*</label>
                                          <input type="text" class="form-control" name="mobile" id="mobile" required>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="booking-content">
                                 <div class="form-title">
                                    <span>2</span>
                                    <h3>Payment Information</h3>
                                 </div>
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="form-group">
                                          <label>Name on card*</label>
                                          <input type="text" class="form-control" name="nameoncard" id="nameoncard" required>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="row align-items-center">
                                          <div class="col-sm-6">
                                             <div class="form-group">
                                                <label>Card number*</label>
                                                <input type="text" name="card_number" id="card_number" class="form-control" 
                                                minlength="16" maxlength="16" required>
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <img src="assets/images/cards.png" alt="Cards">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Expiration date*</label>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <input type="text" name="expire_month" id="expire_month" class="form-control" placeholder="MM" minlength="1" maxlength="2" required>
                                                   </div>
                                                   <div class="col-md-6">
                                                      <input type="number" name="expire_year" id="expire_year" class="form-control" placeholder="Year" min="2023" max="3000" required>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label>Security code*</label>
                                                <div class="row">
                                                   <div class="col-4">
                                                      <div class="form-group">
                                                         <input type="text" name="ccv" id="ccv" class="form-control" placeholder="CCV" minlength="3" maxlength="3" required>
                                                      </div>
                                                   </div>
                                                   <div class="col-8">
                                                      <img src="assets/images/icon_ccv.gif" alt="ccv"><small>Last 3 digits</small>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="booking-content">
                                 <div class="form-title">
                                    <span>3</span>
                                    <h3>Billing Address</h3>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <label>Country*</label>
                                          <select name="country" id="country" required>
                                             <option value="" selected="">Select your country</option>
                                             <option value="Europe">Europe</option>
                                             <option value="United states">United states</option>
                                             <option value="Asia">Asia</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Street line 1*</label>
                                          <input type="text" name="street_1" id="street_1" required>
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Street line 2</label>
                                          <input type="text" name="street_2" id="street_2">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                       <div class="form-group">
                                          <label>City*</label>
                                          <input type="text" name="city" id="city" required>
                                       </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                       <div class="form-group">
                                          <label>State*</label>
                                          <input type="text" name="state" id="state" required>
                                       </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                       <div class="form-group">
                                          <label>Postal code*</label>
                                          <input type="text" name="pincode" id="pincode" required>
                                       </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                       <div class="form-group">
                                          <label>Additional Information</label>
                                          <textarea rows="6" name="additional_information" id="additional_information" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                                          <!-- <input type="hidden" value="<?php echo htmlentities($result->BookingId); ?>" name="id"> -->
                                       </div>
                                    </div>
                                 </div>
                                 <!--End row -->
                              </div>
                              <div class="form-policy">
                                 <h3>Cancellation policy</h3>
                                 <div class="form-group">
                                    <label class="checkbox-list">
                                       <input type="checkbox" name="s" required>
                                       <span class="custom-checkbox"></span>
                                       I accept terms and conditions and general policy.
                                    </label>
                                 </div>
                                 <a><button type="submit" name="submit" class="round-btn">SUBMIT</button></a>
                              </div>
                           </form>
                        </div>
                        <!-- step one form html end -->
                     </div>
                     <div class="col-lg-4">
                        <div class="price-table-summary">
                           <h4 class="bg-title">Summary</h4>
                           <?php
                              include('include/config.php');
                              $pid=$_GET['pkgid'];
                              $sql = "SELECT * from tbltourpackages where PackageId=$pid";
                              $query = $dbh->prepare($sql);
                              $query->execute();
                              $results = $query->fetchAll(PDO::FETCH_OBJ);
                              $cnt = 1;
                              if ($query->rowCount() > 0) {
                                 foreach ($results as $result) {
                                    //   print_r($result); 
                              ?>
                              
                              <table>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <strong>Packages cost </strong>
                                       </td>
                                       <td class="text-right">₹
                                          <?php echo $price = htmlentities($result->PackagePrice); ?>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <strong>Dedicated tour guide</strong>
                                       </td>
                                       <td class="text-right">
                                          ₹
                                          <?php echo $dtg = 500; ?>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <strong>tax</strong>
                                       </td>
                                       <td class="text-right">
                                          <?php echo $tax = 20; ?>%
                                       </td>
                                    </tr>
                                    <tr class="total">
                                       <td>
                                          <strong>Total cost</strong>
                                       </td>
                                       <td class="text-right">
                                          <strong>
                                             <?php
                                             $total = ($price + $dtg) + 20 / 100;
                                             echo $total;
                                             ?>
                                          </strong>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <?php }
                              } ?>
                        </div>
                        <div class="widget-bg widget-support-wrap">
                           <div class="icon">
                              <i class="fas fa-phone-volume"></i>
                           </div>
                           <div class="support-content">
                              <h5>HELP AND SUPPORT</h5>
                              <a href="telto:12345678" class="phone">+91 8126XXXXXX</a>
                              <small>Monday to Friday 9.00am - 7.30pm</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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