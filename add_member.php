<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Dashboard | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
	<style>
		.box_div:hover {
			background-color: #F7FAFC;
		}
	</style>
	<link href="css/select2.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
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
                    <h4 class="mb-0">
                    </h4>
                </div>
                <!--page title end-->

                <!--state widget start-->
                <div class="row">
                    <div class=" col-md-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Personal Details
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company</label>
                                        <select class="form-control" id="option_s1" name="param">
                                                <option selected disabled>
                                                    Choose Company 
                                                </option>
												<option value="AK">
                                                    Company 1
                                                </option>
                                                <option value="HI">
                                                    Company 2
                                                </option>
                                                <option value="CA">
                                                    Company 3
                                                </option>
                                                <option value="NV">
                                                    Company 4
                                                </option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
										<small id="emailHelp" class="form-text text-muted">Name or company are required</small>
                                    </div>
									<div class="form-group">
                                        <label for="exampleFormControlTextarea1">Address*</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    Membership Details
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Paid for by</label>
                                        <select class="form-control" id="option_s2" name="param">
                                                <option selected disabled>
                                                    Choose Option 
                                                </option>
												<option value="AK">
                                                    User 1
                                                </option>
                                                <option value="HI">
                                                    User 2
                                                </option>
                                                <option value="CA">
                                                    User 3
                                                </option>
                                                <option value="NV">
                                                    User 4
                                                </option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Start Date</label>
                                        <input type="text" class="form-control date-picker-input" value="Select Date">
										<small id="emailHelp" class="form-text text-muted">When should the membership start?</small>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputPassword1">First Recurring Invoice Date</label>
                                        <input type="text" class="form-control date-picker-input" value="Select Date">
										<small id="emailHelp" class="form-text text-muted">When should the first invoice be sent?</small>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Send prorated invoice on start date
                                        </label>
                                    </div>
									<div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Allow to customize the conditions before confirming the membership
                                        </label>
                                    </div>
									<div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            Send confirmation email to member
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class=" col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class="row grid-view-white box_div" style="border-top: 1px solid #e5e9ec;">
									<div class="col-md-8" style="margin-top:15px">
										<p class="f18" style="font-weight:normal;">Part-time</p>
										<label for="exampleInputPassword1">$5 / MONTH</label>
										<br/>
										<a href="javascript:void(0);" id="hide_btn" onclick="hide_details();" style="display:none;" class="btn btn-pill btn-outline-secondary">Hide Details</a>
										<a href="javascript:void(0);" id="show_btn" onclick="show_details();" class="btn btn-pill btn-outline-secondary">Show Details</a>
										<br/>
										<label for="exampleInputPassword1" id="hide_label1" style="display:none;">Time Passes</label>
										<br/ style="display:none;" id="br1">
										<label for="exampleInputPassword1" id="hide_label2" style="display:none;"><i class="fa fa-ticket" aria-hidden="true"></i> Day Pass - 20 INR (11 included/month)</label>
										<p class="f18" style="font-weight:normal;">This plan renews automatically.</p>
									</div>
									<div class="col-md-4" style="margin-top:15px;font-weight:normal;">
										<label class="form-check-label f18">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                        Select this plan
                                    </label>
									</div>
								</div>
								<div class="row grid-view-white box_div" style="border-top: 1px solid #e5e9ec;">
									<div class="col-md-8" style="margin-top:15px">
										<p class="f18" style="font-weight:normal;">Full-time </p>
										<label for="exampleInputPassword1">$10 / MONTH</label>
										<br/>
										<label for="exampleInputPassword1">Extras</label>
										<br/>
										<label for="exampleInputPassword1"><i class="fa fa-star" aria-hidden="true"></i> <input type="checkbox"> 24/7 Access (20 INR/month)</label>
										<p class="f18" style="font-weight:normal;">This plan renews automatically.</p>
									</div>
									<div class="col-md-4" style="margin-top:15px;font-weight:normal;">
										<label class="form-check-label f18">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                        Select this plan
                                    </label>
									</div>
								</div>
								<div class="row grid-view-white box_div" style="border-top: 1px solid #e5e9ec;border-bottom: 1px solid #e5e9ec;">
									<div class="col-md-8" style="margin-top:15px;margin-bottom:20px;">
										<p class="f18" style="font-weight:normal;">Drop-in </p>
										<label for="exampleInputPassword1">no monthly fee </label>
										<br/>
										<a href="javascript:void(0);" id="hide_btn_copy" onclick="hide_details_copy();" style="display:none;" class="btn btn-pill btn-outline-secondary">Hide Details</a>
										<a href="javascript:void(0);" id="show_btn_copy" onclick="show_details_copy();" class="btn btn-pill btn-outline-secondary">Show Details</a>
										<br/>
										<label for="exampleInputPassword1" id="hide_label1_copy" style="display:none;">Time Passes</label>
										<br/ style="display:none;" id="br1_copy">
										<label for="exampleInputPassword1" id="hide_label2_copy" style="display:none;"><i class="fa fa-ticket" aria-hidden="true"></i> Day Pass - 25 INR</label>
									</div>
									<div class="col-md-4" style="margin-top:15px;font-weight:normal;">
										<label class="form-check-label f18">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                        Select this plan
                                    </label>
									</div>
								</div>
								
								<button class="btn btn-info" type="submit" style="margin-top:50px;">Add Member</button>
								
                            </div>
                        </div>
                    </div>
				</div>
                <!--state widget end-->

                

            </div>
        </main>

    </div>
    <!--===========app body end===========-->

   <?php
   include("footer.php");
   ?>
	<script src="js/select2.min.js"></script>
    <script src="js/select2-init.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/date-picker-init.js"></script>
	<script>
	function show_details()
	{
		$("#hide_btn").show();
		$("#hide_label1").show();
		$("#hide_label2").show();
		$("#br1").show();
		$("#show_btn").hide();
	}
	function hide_details()
	{
		$("#hide_btn").hide();
		$("#hide_label1").hide();
		$("#hide_label2").hide();
		$("#br1").hide();
		$("#show_btn").show();
	}
	function show_details_copy()
	{
		$("#hide_btn_copy").show();
		$("#hide_label1_copy").show();
		$("#hide_label2_copy").show();
		$("#br1_copy").show();
		$("#show_btn_copy").hide();
	}
	function hide_details_copy()
	{
		$("#hide_btn_copy").hide();
		$("#hide_label1_copy").hide();
		$("#hide_label2_copy").hide();
		$("#br1_copy").hide();
		$("#show_btn_copy").show();
	}
	</script>
   
   


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    
	
</body>
</html>
