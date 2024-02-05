<?php
session_start();
error_reporting(0);
include 'admin/includes/config.php';
if (strlen($_SESSION['email']) == 0) {
	header('location:index.php');
} else {
	// code for cancel
	if (isset($_REQUEST['bkid'])) {
		$bid = intval($_GET['bkid']);
		$status = 2;
		$cancelby = 'a';
		$sql = "UPDATE booking SET status=:status,CancelledBy=:cancelby WHERE  BookingId=:bid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':cancelby', $cancelby, PDO::PARAM_STR);
		$query->bindParam(':bid', $bid, PDO::PARAM_STR);
		$query->execute();

		echo "<script>
                alert('Booking Cancelled');
                window.location.href='view-your-bookings.php';
                </script>"; 
	}
	
}
?>
<!doctype html>
<html lang="en">
<?php include 'include/header.php'; ?>

<head>
</head>

<body>
    <div id="page" class="page">
        <!-- ***site header html start*** -->
        <?php include 'include/navbar.php'; ?>
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="confirm-inner-page">
                <!-- ***Inner Banner html start form here*** -->
                <div class="inner-banner-wrap">
                    <div class="inner-baner-container" style="background-image: url(assets/images/img7.jpg);">
                        <div class="container">
                            <div class="inner-banner-content">
                                <h1 class="page-title">Your Bookings</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***Inner Banner html end here*** -->
                <div class="confirmation-outer">
                    <div class="container">
                        <div class="confirmation-inner">
                            <div class="row">
                                <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * from users where id = $id";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result) {
                                        //   print_r($result);

                                ?>
                                <?php }
                                }
                                ?>
                                
                                    
                                <div class="agile-grids">
					<!-- tables -->
					<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
					<div class="agile-tables">
						<div class="w3l-table-info">
							<table id="table" >
								<thead>
									<tr>
										<th>Booking id</th>
										<th>Name</th>
										<th>Mobile No.</th>
										<th>Email Id</th>
										<th>Pacakge Name</th>
										<th>Status </th>
										<th>Action </th>
									</tr>
								</thead>
								<tbody>
                                <?php 
                                $uemail=$_SESSION['id'];
								$sql = "SELECT booking.BookingId as bookid,booking.FirstName as fname,booking.Phone as mnumber,users.email as email,tbltourpackages.PackageName as pckname,booking.PackageId as pid,booking.status as status,booking.CancelledBy as cancelby from users join  booking on  booking.Email=users.email join tbltourpackages on tbltourpackages.PackageId=booking.PackageId WHERE id=$uemail";
									$query = $dbh->prepare($sql);
									$query->execute();
									$results = $query->fetchAll(PDO::FETCH_OBJ);
									$cnt = 1;
									if ($query->rowCount() > 0) {
										foreach ($results as $result) {				?>
											<tr>
												<td>#BK-<?php echo htmlentities($result->bookid); ?></td>
												<td><?php echo htmlentities($result->fname); ?></td>
												<td><?php echo htmlentities($result->mnumber); ?></td>
												<td><?php echo htmlentities($result->email); ?></td>
												<td><a href="package-detail.php?pkgid=<?php echo htmlentities($result->pid); ?>"><?php echo htmlentities($result->pckname); ?></a></td>
												<td><?php if ($result->status == 0) {
														echo "Pending";
													}
													if ($result->status == 1) {
														echo "Confirmed";
													}
													if ($result->status == 2 and  $result->cancelby == 'a') {
														echo "Cancelled" ;
													}
													if ($result->status == 2 and $result->cancelby == 'u') {
														echo "Cancelled";
													}
													?></td>

												<?php if ($result->status == 2) {
												?><td>Cancelled</td>
												<?php } else { ?>
													<td><a href="view-your-bookings.php?bkid=<?php echo htmlentities($result->bookid); ?>">Cancel</a>  <a href="view-your-bookings.php?bckid=<?php echo htmlentities($result->bookid); ?>" onclick="return confirm('booking has been confirm')"></a></td>
												<?php } ?>

											</tr>
									<?php $cnt = $cnt + 1;
										}
									} ?>
								</tbody>
							</table>
						</div>
					</table>


					</div>
					<!-- script-for sticky-nav -->
					<script>
						$(document).ready(function() {
							var navoffeset = $(".header-main").offset().top;
							$(window).scroll(function() {
								var scrollpos = $(window).scrollTop();
								if (scrollpos >= navoffeset) {
									$(".header-main").addClass("fixed");
								} else {
									$(".header-main").removeClass("fixed");
								}
							});

						});
					</script>
					<!-- /script-for sticky-nav -->
					<!--inner block start here-->
					<div class="inner-block">

					</div>
					<!--inner block end here-->
					<!--copy rights start here-->
					<?php include('includes/footer.php'); ?>
					<!--COPY rights end here-->
				</div>
                                    
                            </div>
                        </div>

                    </div>
                </div>
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
    <script>
        function openPopup() {
            document.getElementById("popup").style.display = "block";
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>

</html>