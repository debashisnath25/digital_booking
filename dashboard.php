<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Dashboard | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden">

    <!--===========header start===========-->
    <?php include("header.php");?>
    <!--===========header end===========-->

    <!--===========app body start===========-->
    <div class="app-body">
        <!--left sidebar start-->
        <?php include("sidebar.php");?>
        <!--left sidebar end-->

        <!--main contents start-->
        <main class="main-content">
            <div class="container">
                <!--page title start-->
                <div class="page-title pl-0">
                    <h4 class="mb-0"> Dashboard
                    </h4>
                </div>
                <!--page title end-->

                <!--state widget start-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-4" style="text-align:center;">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <h6 class="mb-0 mt-3">2 MEMBERS TOTAL</h6>
								<h6 class="mb-0 mt-1"  style="color:#1AABA8;">+2</h6>
								<p class="f18 mb-0">Last 7 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4" style="text-align:center;">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <h6 class="mb-0 mt-3">1 UNPAID INVOICE</h6>
								<h6 class="mb-0 mt-1"  style="color:#E60130;">$600</h6>
								<p class="f18 mb-0">Last 4 weeks</p>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-3 col-sm-6 mb-4" style="text-align:center;">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <h6 class="mb-0 mt-3">BOOKING REVENUE</h6>
								<h6 class="mb-0 mt-1" >$0</h6>
								<p class="f18 mb-0">Last 4 weeks</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-4" style="text-align:center;">
                        <div class="card card-shadow">
                            <div class="card-body ">
                                <h6 class="mb-0 mt-3">0 ISSUES</h6>
								<h6 class="mb-0 mt-1" >0</h6>
								<p class="f18 mb-0">Last 4 weeks</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->

                <div class="row">
                    <!--Report widget start-->
                    <div class="col-xl-8">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    ACTIVITY FEED
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="baseline baseline-border">
                                    <div class="baseline-list">
                                        <div class="baseline-info">
                                            <div class="basline-icon float-left">
                                                <i class="ti-face-smile f24 text-muted mr-3"></i>
                                            </div>
                                            <div><a href="#" class="default-color"><strong>John Tasi</strong></a> was confirmed by Tnisha. </div>
                                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                                        </div>
                                    </div>
                                    <div class="baseline-list baseline-border">
                                        <div class="baseline-info">
                                            <div class="basline-icon float-left">
                                                <i class="ti-bell f24 text-muted mr-3"></i>
                                            </div>
                                            <div>John Tasi set up <a href="#" class="default-color"><strong>John Tasi</strong></a> to pay for Tnisha. </div>
                                            <span class="text-muted">05:00 PM Sun, 02 Feb 2018</span>
                                        </div>
                                    </div>
                                    <div class="baseline-list  baseline-border">
                                        <div class="baseline-info">
                                            <div class="basline-icon float-left">
                                                <i class="ti-face-smile f24 text-muted mr-3"></i>
                                            </div>
                                            <div>New member <a href="#" class="default-color"><strong>Tnisha</strong></a>, plan: Drop-in added by John Tasi.</a></div>
                                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                                        </div>
                                    </div>
                                    <div class="baseline-list  baseline-border">
                                        <div class="baseline-info">
                                            <div class="basline-icon float-left">
                                                <i class=" ti-file f24 text-muted mr-3"></i>
                                            </div>
                                            <div>Created <a href="#" class="default-color"><strong>invoice 1</strong></a> (26,250.00 INR) for <a href="#" class="default-color"><strong>John Tasi</strong></a>.</div>
                                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span> 

                                        </div>
                                    </div>
                                    <div class="baseline-list  baseline-border">
                                        <div class="baseline-info">
                                            <div class="basline-icon float-left">
                                                <i class="ti-face-smile f24 text-muted mr-3"></i>
                                            </div>
                                            <div><a href="#" class="default-color"><strong>John Tasi.</strong></a> was confirmed.</div>
                                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<!-- <p class="card-text f18" style="text-align:center;margin-top:-10px;">more</p> -->
                        </div>
                    </div>
                    <!--Report widget end-->

                    <!--weather widget start-->
                    <div class="col-xl-4">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Bookings
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="media mb-4">
                                    <img class="align-self-center mr-3 rounded-circle" src="images/n1.png" alt=" " style="width: 50px; height: 50px;">
                                    <div class="media-body">
                                        <p class="mb-0"><strong class="">Today, 3:00pm-4:00pm</strong></p>
                                        <span>Meeting Room  Auckland  Booked By : John Tasi</span>
                                    </div>
                                </div>
                                <div class="media mb-4">
                                    <img class="align-self-center mr-3 rounded-circle" src="images/n1.png" alt=" " style="width: 50px; height: 50px;">
                                    <div class="media-body">
                                        <p class="mb-0"><strong class="">Today, 3:00pm-4:00pm</strong></p>
                                        <span>Meeting Room  Auckland  Booked By : John Tasi</span>
                                    </div>
                                </div>
                                <div class="media mb-4">
                                    <img class="align-self-center mr-3 rounded-circle" src="images/n1.png" alt=" " style="width: 50px; height: 50px;">
                                    <div class="media-body">
                                        <p class="mb-0"><strong class="">Today, 3:00pm-4:00pm</strong></p>
                                        <span>Meeting Room  Auckland  Booked By : John Tasi</span>
                                    </div>
                                </div>
								<a class="card-text f18" style="text-align:center;" href="javascript:void(0);">Booking Calender <i class=" ti-angle-double-right" style="font-size: 12px;"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--weather widget end-->
                </div>

            </div>
        </main>

    </div>
    <!--===========app body end===========-->

   <?php
   include("footer.php");
   ?>

   
   


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    
	
</body>
</html>
