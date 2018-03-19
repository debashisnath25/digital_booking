
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Members | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
	<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
						<h4 class="mb-0"> Members</h4>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-primary rounded-circle text-center wb-icon-box">
                                            <i class="fa fa-users text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">56</h6>
                                        <p class="f12 mb-0">MEMBERS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-warning rounded-circle text-center wb-icon-box">
                                            <i class="fa fa-clock-o text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">97</h6>
                                        <p class="f12 mb-0">TIME PASS USERS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-4">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-3">
                                        <span class="bg-danger rounded-circle text-center wb-icon-box">
                                            <i class="icon-badge text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">14.5 Months</h6>
                                        <p class="f12 mb-0">AVG. MEMBERSHIP DURATION</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->

                <!-- state start-->
                <div class="row">
                    <div class=" col-md-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Members By Plan
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="member_plan" class="pie-chart">
                                    <div id="member_plan_pie" style="height: 300px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- state end-->

                <div class="row">
                    <!--Report widget start-->
                    <div class="col-xl-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-fill mb-4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#new_member">New Members (2)</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link disabled" data-toggle="tab" href="#up_downgrades">UP- & Downgrades (2)</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link disabled" data-toggle="tab" href="#cancellation">Cancellations (2)</a>
                                    </li>

                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="new_member" role="tabpanel">
                                       <div class="row">
											<div class=" col-sm-12">
												<div class="card card-shadow mb-4">
													<div class="card-body">
														<table id="bs4-table" class="table table-bordered table-striped table-responsive-lg" cellspacing="0" width="100%">
															<thead>
															<tr>
																<th>Name</th>
																<th>Confirmed</th>
																<th>Visits</th>
																<th>Last Seen</th>
																<th>Change</th>
															</tr>
															</thead>
															<tbody>
															<tr>
																<td>Donna Snider</td>
																<td>Jun 24</td>
																<td>3 times</td>
																<td>3 hours ago</td>
																<td>+ 0.00 <i class="fa fa-gbp"></i></td>
															</tr>
															<tr>
																<td>Tiger Nixon</td>
																<td>Mar 20</td>
																<td>7 times</td>
																<td>2 hours ago</td>
																<td>+ 130.00 <i class="fa fa-gbp"></i></td>
															</tr>
															<tr>
																<td>Garrett Winters</td>
																<td>Aug 2</td>
																<td>1 times</td>
																<td>3 hours ago</td>
																<td>+ 0.00 <i class="fa fa-gbp"></i></td>
															</tr>
															<tr>
																<td>Ashton Cox</td>
																<td>Dec 21</td>
																<td>3 times</td>
																<td>6 hours ago</td>
																<td>+ 200.00 <i class="fa fa-gbp"></i></td>
															</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="tab-pane" id="up_downgrades" role="tabpanel">
                                        <div class="row">
											<div class=" col-sm-12">
												<div class="card card-shadow mb-4">
													<div class="card-header">
														<div class="card-title">
															Data Tables
														</div>
													</div>
													<div class="card-body">
														<table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
															<thead>
															<tr>
																<th>Name</th>
																<th>Confirmed</th>
																<th>Visits</th>
																<th>Last Seen</th>
																<th>Change</th>
															</tr>
															</thead>
															<tbody>
															<tr>
																<td>Donna Snider</td>
																<td>Jun 24</td>
																<td>3 times</td>
																<td>3 hours ago</td>
																<td>+ 0.00<i class="fa fa-gbp"></i></td>
															</tr>
															<tr>
																<td>Tiger Nixon</td>
																<td>Mar 20</td>
																<td>7 times</td>
																<td>2 hours ago</td>
																<td>+ 130.00<i class="fa fa-gbp"></i></td>
															</tr>
															<tr>
																<td>Garrett Winters</td>
																<td>Aug 2</td>
																<td>1 times</td>
																<td>3 hours ago</td>
																<td>+ 0.00<i class="fa fa-gbp"></i></td>
															</tr>
															<tr>
																<td>Ashton Cox</td>
																<td>Dec 21</td>
																<td>3 times</td>
																<td>6 hours ago</td>
																<td>+ 200.00<i class="fa fa-gbp"></i></td>
															</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
                                    </div>
                                    <div class="tab-pane " id="cancellation" role="tabpanel">
                                         <div class="row">
											<div class=" col-sm-12">
												<div class="card card-shadow mb-4">
													<div class="card-header">
														<div class="card-title">
															Data Tables
														</div>
													</div>
													<div class="card-body">
														<table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100%">
															<thead>
															<tr>
																<th>Name</th>
																<th>Confirmed</th>
																<th>Visits</th>
																<th>Last Seen</th>
																<th>Change</th>
															</tr>
															</thead>
															<tbody>
															<tr>
																<td>Donna Snider</td>
																<td>Jun 24</td>
																<td>3 times</td>
																<td>3 hours ago</td>
																<td>+ 0.00<i class="fa fa-gbp"></i></td>
															</tr>
															<tr>
																<td>Tiger Nixon</td>
																<td>Mar 20</td>
																<td>7 times</td>
																<td>2 hours ago</td>
																<td>+ 130.00<i class="fa fa-gbp"></i></td>
															</tr>
															<tr>
																<td>Garrett Winters</td>
																<td>Aug 2</td>
																<td>1 times</td>
																<td>3 hours ago</td>
																<td>+ 0.00<i class="fa fa-gbp"></i></td>
															</tr>
															<tr>
																<td>Ashton Cox</td>
																<td>Dec 21</td>
																<td>3 times</td>
																<td>6 hours ago</td>
																<td>+ 200.00<i class="fa fa-gbp"></i></td>
															</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--weather widget end-->
                </div>

            </div>
        </main>
        <!--right sidebar end-->

    </div>
    <!--===========app body end===========-->
	
    <!--===========footer start===========-->
	<?php include("footer.php");?>
	<!-- Data tables -->
	<script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
	<!--flot chart -->
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.tooltip.min.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.crosshair.js"></script>
    <script src="js/jquery.flot.time.js"></script>
    <!--flot initialization-->
    <script src="js/flot-chart-init.js"></script>
    <!--init scripts-->
    <!--init echarts-->
    <script>
        $(function() {
			var data = [{
				label: "Day Passes",
				data: 25
			}, {
				label: "Part Time",
				data: 30
			}, {
				label: "Basic membership",
				data: 10
			}];
			var options = {
				series: {
					pie: {
						show: true,
						innerRadius: 0.5,
						show: true
					}
				},
				legend: {
					show: false
				},
				grid: {
					hoverable: true,
					clickable: true
				},
				colors: ["#A768F3", "#eac459", "#FF518A"],
				tooltip: true,
				tooltipOpts: {
					defaultTheme: false
				}
			};
			$.plot($("#member_plan #member_plan_pie"), data, options);
		});
    </script>


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112914598-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112914598-1');
    </script>
	<script>
        $(document).ready(function() {
            $('#bs4-table').DataTable();
        } );
    </script>
</body>
</html>
