
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Revenue | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
	<link rel="stylesheet" href="css/morris.css">
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
						<h4 class="mb-0"> Revenue</h4>
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

                <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                   Revenue by Source
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="revenue_source" style="height:250px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- state end-->
				 <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                  Membership Fees by Plan
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="membership_plan"></div>
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
    <!--Morris Chart-->
    <script src="js/morris.js"></script>
    <script src="js/raphael-min.js"></script>
    <!--morris chart initialization-->
    <script src="js/morris-init.js"></script>
    <!--init scripts-->
	<script>
		Morris.Donut({
		element: 'revenue_source',
		data: [
			{value: 60, label: 'Other', formatted: '25,000$' },
			/*{value: 25, label: 'Orange', formatted: 'approx. 25%' },
			{value: 5, label: 'Banana', formatted: 'approx. 10%' },
			{value: 10, label: 'Long title chart', formatted: 'at most 10%' }*/
		],
		backgroundColor: '#fff',
		labelColor: '#53505F',
		gridLineColor: '#e5ebf8',
		colors: [
			'#A768F3','#36a2f5','#34bfa3','#eac459'
		],
		formatter: function (x, data) { return data.formatted; }
	});
	Morris.Donut({
		element: 'membership_plan',
		data: [
			{value: 0, label: '', formatted: '0$' },
			/*{value: 25, label: 'Orange', formatted: 'approx. 25%' },
			{value: 5, label: 'Banana', formatted: 'approx. 10%' },
			{value: 10, label: 'Long title chart', formatted: 'at most 10%' }*/
		],
		backgroundColor: '#fff',
		labelColor: '#53505F',
		gridLineColor: '#e5ebf8',
		colors: [
			'#A768F3','#36a2f5','#34bfa3','#eac459'
		],
		formatter: function (x, data) { return data.formatted; }
	});
	</script>
</body>
</html>
