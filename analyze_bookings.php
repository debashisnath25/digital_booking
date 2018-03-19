
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Bookings | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
	 <link href="css/jquery.easy-pie-chart.css" rel="stylesheet">
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
				 <div class="row">
					<div class="col-md-9">
						<h4 class="mb-0"> Bookings</h4>
					</div>
					<div class="col-md-3 text-right" style="padding:0px;margin:0px;">
						 <select class="form-control"  style="width:100%;">
							<option>Feb 2018</option>
							<option selected>Mar 2018</option>
							<option>Apr 2018</option>
						 </select>
					</div>
				  </div>
                </div>
                <!--page title end-->

                <!--state widget start-->
                <div class="row">

                   <div class="card col-md-12">
					 <div class="card-header">
						<div class="card-title">Upstairs meeting room</div>
						</div>
						<div class="card-body p-4">
							<div class="row">
								<div class="col-sm-2">
									<div class="ep_4 easyPieChart" data-percent="43" style="width: 100px; height: 100px; line-height: 100px;"><span>43</span>%<canvas width="100" height="100"></canvas></div>
									<div class="mt-3">Use to Capacity</div>
								</div>
								<div class="col-sm-10">
									<div class="row">
										<div class="col-xl-3 col-sm-6 mb-4">
											<div class="card card-shadow">
												<div class="card-body ">
													<h6 class="text-primary f30">9</h6>
													<p class="f12 mb-0">BOOKINGS TOTAL</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-sm-6 mb-4">
											<div class="card card-shadow">
												<div class="card-body ">
													<h6 class="text-info f30">4</h6>
													<p class="f12 mb-0">MEMBERS BOOKED</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-sm-6 mb-4">
											<div class="card card-shadow">
												<div class="card-body ">
													<h6 class="text-danger f30">1.5 h</h6>
													<p class="f12 mb-0">AVERAGE DURATION</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-sm-6 mb-4">
											<div class="card card-shadow">
												<div class="card-body ">
													<h6 class="text-success f30">13.67 h</h6>
													<p class="f12 mb-0">TOTAL DURATION</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card col-md-12">
					 <div class="card-header">
						<div class="card-title">Downstairs meeting room</div>
						</div>
						<div class="card-body p-4">
							<div class="row">
								<div class="col-sm-2">
									<div class="ep_4 easyPieChart" data-percent="20" style="width: 100px; height: 100px; line-height: 100px;"><span>20</span>%<canvas width="100" height="100"></canvas></div>
									<div class="mt-3">Use to Capacity</div>
								</div>
								<div class="col-sm-10">
									<div class="row">
										<div class="col-xl-3 col-sm-6 mb-4">
											<div class="card card-shadow">
												<div class="card-body ">
													<h6 class="text-primary f30">13</h6>
													<p class="f12 mb-0">BOOKINGS TOTAL</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-sm-6 mb-4">
											<div class="card card-shadow">
												<div class="card-body ">
													<h6 class="text-info f30">10</h6>
													<p class="f12 mb-0">MEMBERS BOOKED</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-sm-6 mb-4">
											<div class="card card-shadow">
												<div class="card-body ">
													<h6 class="text-danger f30">2.1 h</h6>
													<p class="f12 mb-0">AVERAGE DURATION</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-sm-6 mb-4">
											<div class="card card-shadow">
												<div class="card-body ">
													<h6 class="text-success f30">18.27 h</h6>
													<p class="f12 mb-0">TOTAL DURATION</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <!--state widget end-->
            </div>
        </main>
        <!--right sidebar end-->
    </div>
    <!--===========app body end===========-->
	
    <!--===========footer start===========-->
	<?php include("footer.php");?>
	<!--echarts-->
    <!--easy pie chart-->
    <script src="js/jquery.easy-pie-chart.js"></script>
    <script src="js/easy-pie-chart-init.js"></script>


</body>
</html>
