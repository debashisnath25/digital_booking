
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Add Payment Method | Digital Booking and Management</title>
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
						<h4 class="mb-0">Add Payment Method</h4>
					</div>
				  </div>
                </div>
                <!--page title end-->
				<div class="col-md-12" style="margin:0px;padding:0px;">
					<div class="alert alert-primary border-0">
						<i class="fa fa-lightbulb-o pr-2"></i>We provide automatic payment processing though a number of payment providers. When new members sign up they enter their card or bank account details. Whenever we send an invoice to them we also charge their credit card/bank account.<br/><br/>To use automated payment processing you need to sign up with one of the providers below. If you have any questions please contact us
					</div>
				</div>
				 <!-- state start-->
				<div class="row">
					<div class=" col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class="alert alert-outline alert-success" role="alert">
									<div class="col-md-12" style="padding:0px;margin:0px;">
										<div class="row">
											<div class="col-md-6">
												 <h4 class="alert-heading">Stripe</h4>
											</div>
											<div class="col-md-6 text-right">
												 <a href="javascript:void(0);"><i class="fa fa-plus"></i> Add Stripe</a>
											</div>
										</div>
									</div>
                                    <p>Stripe offers credit card payments in a number of countries for a fixed transaction fee plus a percentage of the amount. Signing up only takes a few minutes.<br/><br/>To see whether Stripe is available in your country please check their <a href="https://stripe.com/global" target="_blank">global page</a>. If it's not, check out their <a href="https://stripe.com/atlas" target="_blank">Atlas offering</a>, which makes Stripe available globally.<br/><br/>Already have members in Stripe? We can import their data. Contact us.</p>
                                </div>

								<div class="alert alert-outline alert-success" role="alert">
									<div class="col-md-12" style="padding:0px;margin:0px;">
										<div class="row">
											<div class="col-md-6">
												 <h4 class="alert-heading">PayPal Express</h4>
											</div>
											<div class="col-md-6 text-right">
												 <a href="javascript:void(0);"><i class="fa fa-plus"></i> Add PayPal Express</a>
											</div>
										</div>
									</div>
                                    <p>Let your members pay using <a href="https://www.paypal.com/us/webapps/mpp/merchant-fees" target="_blank">PayPal (fees)</a>. Members can pay with any payment methods that PayPal supports, including credit cards, bank accounts etc.<br/><br/>Payment processing is fully automated, though you need to have Paypal enable reference transactions for your account.</p>
                                </div>

								<div class="alert alert-outline alert-success" role="alert">
									<div class="col-md-12" style="padding:0px;margin:0px;">
										<div class="row">
											<div class="col-md-6">
												 <h4 class="alert-heading">Manual Payment Methods</h4>
											</div>
											<div class="col-md-6 text-right">
												 <a href="javascript:void(0);"><i class="fa fa-plus"></i> Add Manual Payment Methods</a>
											</div>
										</div>
									</div>
                                    <p>You can also add manual payment methods, for example check or bank transfer.</p>
                                </div>
								<div class="form-group row">
									<div class="col-md-10">
									   <div class="input-group">
											<a href="setup_automated_payments.php">Back</a>
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
