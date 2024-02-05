<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['submit'])) {
        $oname = $_POST['offername'];
        $olocation = $_POST['offerlocation'];
        $odetails = $_POST['offerdetails'];
        $oactualprice = $_POST['actualprice'];
        $oofferprice = $_POST['offerprice'];
        $opercentageoff = $_POST['percentageoff'];
        $oimage = $_FILES["offerimage"]["name"];
        $data = explode('.', $oimage);
        $myname = uniqid() . "." . $data[1];
        move_uploaded_file($_FILES["offerimage"]["tmp_name"], "offerimages/" . $myname);
        $sql = "INSERT INTO packageoffer(OfferName,OfferLocation,OfferDetails,ActualPrice,OfferPrice,PercentageOff,OfferImage) VALUES(:oname,:olocation,:odetails,:oactualprice,:oofferprice,:opercentageoff,:myname)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':oname', $oname, PDO::PARAM_STR);
        $query->bindParam(':olocation', $olocation, PDO::PARAM_STR);
        $query->bindParam(':odetails', $odetails, PDO::PARAM_STR);
        $query->bindParam(':oactualprice', $oactualprice, PDO::PARAM_STR);
        $query->bindParam(':oofferprice', $oofferprice, PDO::PARAM_STR);
        $query->bindParam(':opercentageoff', $opercentageoff, PDO::PARAM_STR);
        $query->bindParam(':myname', $myname, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "Offer Created Successfully";
        } else {
            $error = "Something went wrong. Please try again";
        }
    }

?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <title>Traveler | Admin Offer Creation</title>

        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="css/morris.css" type="text/css" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <script src="js/jquery-2.1.4.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #dd3d36;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            .succWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #5cb85c;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }
        </style>

    </head>

    <body>
        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="mother-grid-inner">
                    <!--header start here-->
                    <?php include('includes/header.php'); ?>

                    <div class="clearfix"> </div>
                </div>
                <!--heder end here-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./dashboard.php">Home</a><i class="fa fa-angle-right"></i>Create Offer </li>
                </ol>
                <!--grid-->
                <div class="grid-form">

                    <!---->
                    <div class="grid-form1">
                        <h3>Create Offer</h3>
                        <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
                        <div class="tab-content">
                            <div class="tab-pane active" id="horizontal-form">
                                <form class="form-horizontal" name="Offer" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Offer Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" name="offername" id="offername" placeholder="Create Offer" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Offer Location</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" name="offerlocation" id="offerlocation" placeholder=" Offer Location" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Offer Details</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" rows="5" cols="50" name="offerdetails" id="offerdetails" placeholder="Offer Details" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Actual Price</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" name="actualprice" id="actualprice" placeholder=" Actual Price" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Offer Price</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" name="offerprice" id="offerprice" placeholder=" Offer Price" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Percentage Off</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" name="percentageoff" id="percentageoff" placeholder="Percentage Off" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Offer Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="offerimage" id="offerimage" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button type="submit" name="submit" class="btn-primary btn">Create</button>

                                            <button type="reset" class="btn-inverse btn">Reset</button>
                                        </div>
                                    </div>
                            </div>

                            </form>





                            <div class="panel-footer">

                            </div>
                            </form>
                        </div>
                    </div>
                    <!--//grid-->

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
            <!--//content-inner-->
            <!--/sidebar-menu-->
            <?php include('includes/sidebarmenu.php'); ?>
            <div class="clearfix"></div>
        </div>
        <script>
            var toggle = true;

            $(".sidebar-icon").click(function() {
                if (toggle) {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({
                        "position": "absolute"
                    });
                } else {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function() {
                        $("#menu span").css({
                            "position": "relative"
                        });
                    }, 400);
                }

                toggle = !toggle;
            });
        </script>
        <!--js -->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- /Bootstrap Core JavaScript -->

    </body>

    </html>
<?php } ?>