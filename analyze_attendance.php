
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Attendance | Digital Booking and Management</title>
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
            <div class="container-fluid">
                <!--page title start-->
                <div class="page-title pl-0">
				 <div class="row">
					<div class="col-md-9">
						<h4 class="mb-0"> Attendance</h4>
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
                                        <h6 class="mt-1 mb-0">422</h6>
                                        <p class="f12 mb-0">VISITS IN TOTAL</p>
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
                                            <i class="fa fa-user text-light f24"></i>
                                        </span>
                                    </div>
                                    <div class="col-9">
                                        <h6 class="mt-1 mb-0">64</h6>
                                        <p class="f12 mb-0">VISITING MEMBERS</p>
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
                                        <h6 class="mt-1 mb-0">13.2</h6>
                                        <p class="f12 mb-0">AVG. VISITS PER DAY</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--state widget end-->
				<!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                   Attendance by Day
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="attendance_day" style="height: 350px"></div>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                   Plan Utilization
                                </div>
								<span>Average Visits per Member and Plan</span>
                            </div>
                            <div class="card-body">
                               <div class="card-group mb-4">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-12">
													<h3 class="text-success">8.0</h3>
													<p class="card-subtitle text-muted fw-500">Full Time</p>
												</div>
												<div class="col-12">
													<div class="progress mt-3 mb-1" style="height: 6px;">
														<div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
													</div>
													<div class="text-muted f12">
														<span>Progress</span>
														<span class="float-right">80%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Column -->
									<!-- Column -->
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-12">
													<h3 class="text-primary">5.0</h3>
													<p class="card-subtitle text-muted fw-500">Part Time</p>
												</div>
												<div class="col-12">
													<div class="progress mt-3 mb-1" style="height: 6px;">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
													</div>
													<div class="text-muted f12">
														<span>Progress</span>
														<span class="float-right">50%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Column -->
									<!-- Column -->
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-12">
													<h3 class="text-danger">3.5</h3>
													<p class="card-subtitle text-muted fw-500">Day Passes</p>
												</div>
												<div class="col-12">
													<div class="progress mt-3 mb-1" style="height: 6px;">
														<div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
													</div>
													<div class="text-muted f12">
														<span>Progress</span>
														<span class="float-right">35%</span>
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


				
                <!-- state end-->
            </div>
        </main>
        <!--right sidebar end-->

    </div>
    <!--===========app body end===========-->
	
    <!--===========footer start===========-->
	<?php include("footer.php");?>
	<!--echarts-->
    <script type="text/javascript" src="js/echarts-all-3.js"></script>
    <!--init echarts-->
    <script type="text/javascript" src="js/init-echarts.js"></script>
    <!--init scripts-->
   
	<script>
		    var dom = document.getElementById("attendance_day");
    var myChart = echarts.init(dom);

    var app = {};
    option = null;
    option = {
        color: ['#eac459','#FF518A', '#34bfa3', '#ccc' ],

        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['Total','Day Passes','Full Time','Part Time']
        },

        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : ['Mon','Tue','Wed','Thu','Fri','Sat','Sun']
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'Total',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[10, 12, 21, 54, 260, 830, 710]
            },
            {
                name:'Day Passes',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[30, 182, 434, 791, 390, 30, 10]
            },
            {
                name:'Full Time',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[1320, 1132, 601, 234, 120, 90, 20]
            },
			{
				name:'Part Time',
				type:'line',
				smooth:true,
				itemStyle: {normal: {areaStyle: {type: 'default'}}},
				data:[130, 132, 601, 234, 120, 20, 70]
		   }
        ]
    };


    if (option && typeof option === "object") {
        myChart.setOption(option, false);
    }

	</script>
</body>
</html>
