
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Automated Payments | Digital Booking and Management</title>
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
				 <div class="row">
					<div class="col-md-9">
						<h4 class="mb-0">Automated Payments</h4>
					</div>
					<div class="col-md-3">
						<a href="setup_add_payment_method.php" class="btn btn-info"><i class="fa fa-plus"></i> Add Payment Method</a>
					</div>
				  </div>
                </div>
                <!--page title end-->
				<div class="col-md-12" style="margin:0px;padding:0px;">
					<div class="alert alert-primary border-0">
						<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;Connect to a payment provider to automate payment processing.
					</div>
				</div>
				 <!-- state start-->
				<div class="row">
					<div class=" col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class="alert alert-outline alert-info " role="alert">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-8">
												<i class="fa fa-credit-card-alt pr-2"></i>Credit Card
											</div>
											<div class="col-md-2 text-right">
												<a href="javascript:void(0);"><span aria-hidden="true"><i class="fa fa-pencil"></i> Edit</span></a>
											</div>
											<div class="col-md-2">
												<a href="javascript:void(0);"><span aria-hidden="true"><i class="fa fa-close"></i> Remove</span></a>
											</div>
										</div>
									</div>
                                </div>
								<div class="alert alert-outline alert-info " role="alert">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-8">
												<i class="fa fa-cc-paypal pr-2"></i> PayPal
											</div>
											<div class="col-md-2 text-right">
												<a href="javascript:void(0);"><span aria-hidden="true"><i class="fa fa-pencil"></i> Edit</span></a>
											</div>
											<div class="col-md-2">
												<a href="javascript:void(0);"><span aria-hidden="true"><i class="fa fa-close"></i> Remove</span></a>
											</div>
										</div>
									</div>
                                </div>
								<div class="alert alert-outline alert-info " role="alert">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-8">
												 <i class="fa fa-money pr-2"></i> Direct Debit
											</div>
											<div class="col-md-2 text-right">
												<a href="javascript:void(0);"><span aria-hidden="true"><i class="fa fa-pencil"></i> Edit</span></a>
											</div>
											<div class="col-md-2">
												<a href="javascript:void(0);"><span aria-hidden="true"><i class="fa fa-close"></i> Remove</span></a>
											</div>
										</div>
									</div>
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
