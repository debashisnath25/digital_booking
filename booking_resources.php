
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Resources | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
	<link href='css/fullcalendar.css'  rel='stylesheet' />
	<link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="css/datetimepicker.css" rel="stylesheet">
    <link href="css/timepicker.css" rel="stylesheet">

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
						<h4 class="mb-0">Resources</h4>
					</div>
					<div class="col-md-3 text-right" style="padding:0px;margin:0px;">
						 <a href="booking_add_resource.php" class="btn  btn-info"><i class="fa fa-plus pr-2"></i> Add Resource</a>
					</div>
				  </div>
                </div>
                <!--page title end-->
				 <!-- state start-->
               <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body" style="padding:0px;margin:0px;">
                                <div class="card-block" >
                                    <img class="img-fluid" style="background-color:#2f69bf;height:12rem;width:100%;">
                                    <p class="card-text">
                                       <h6  style="padding:10px;"> <a href="#">Meeting Room </a> 0.00 $/h </h6>
                                    </p>
                                    <a href="booking_edit_resource.php" class="card-link text-info"  style="padding:10px;"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="#" class="card-link text-info"  style="padding:10px;"><i class="fa fa-close"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body" style="padding:0px;margin:0px;">
                                <div class="card-block" >
                                    <img class="img-fluid" style="background-color:#2f69bf;height:12rem;width:100%;">
                                    <p class="card-text">
                                       <h6  style="padding:10px;"> <a href="#">Meeting Room </a> 0.00 $/h </h6>
                                    </p>
                                    <a href="booking_edit_resource.php" class="card-link text-info"  style="padding:10px;"><i class="fa fa-pencil"></i> Edit</a>
                                    <a href="#" class="card-link text-info"  style="padding:10px;"><i class="fa fa-close"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- state end-->
                <!-- state end-->
            </div>
        </main>
        <!--right sidebar end-->

    </div>
    <!--===========footer start===========-->
	<?php include("footer.php");?>
	
</body>
</html>
