
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>External Bookings | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
	<link href="css/bootstrap-colorpicker.css" rel="stylesheet">

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
						<h4 class="mb-0">External Bookings</h4>
					</div>
				  </div>
                </div>
                <!--page title end-->
				
				<div class="row">
                   <div class=" col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body card-shadow">
								<h6 class="card-title">To offer external bookings, activate the resources in the list below. This will generate a link to a booking form to add to your website. External bookings allow non-members to book resources, and help you optimize your spaces capacity.</h6>
								<form>
									<div class="row">
									   <div class=" col-md-12">
											<div class="card card-shadow mb-4">
												<div class="card-body card-shadow">
													<div class="form-group row">
														<label class="col-sm-9 col-form-label">
															<img class="img-fluid" style="background-color:#2f69bf;width:3rem;height:20px;">
															<a href="javascript:void(0);">Meeting</a>
														</label>
														<div class="col-sm-3 col-form-label">
															<a href="javascript:void(0);"><i class="fa fa-plus"></i> Activate for 39.00 $/month*</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<small class="form-text text-muted"><strong>Pricing:</strong> As soon as you activate a resource for external bookings, We will charge you 39.00 USD per month and resource.</small>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--right sidebar end-->

    </div>
    <!--===========footer start===========-->
	<?php include("footer.php");?>
	<script src="js/bootstrap-colorpicker.min.js"></script>
	<script src="js/color-picker-init.js"></script>

</body>
</html>
