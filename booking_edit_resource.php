
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Edit Resources | Digital Booking and Management</title>
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
						<h4 class="mb-0">Edit Resources</h4>
					</div>
				  </div>
                </div>
                <!--page title end-->
				 <!-- state start-->
               <div class="row">
                   <div class=" col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Color</label>
										<div class="col-sm-9">
											<div id="cp2" class="input-group colorpicker-component mb-3 colorpicker-element" title="Using input value" data-colorpicker-id="2">
												<input type="text" class="form-control input-lg" value="#A768F3">
												<span class="input-group-addon"><i style="background-color: rgb(167, 104, 243);"></i></span>
											</div>
										</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Price per Hour</label>
                                        <div class="col-sm-9">
                                           <div class="input-group">
												<input type="number" class="form-control">
												<span class="input-group-addon">$</span>
											</div>
											<small class="form-text text-muted">Net value, enter 0 for free resource</small>
                                        </div>
                                    </div>
									 <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                           <div class="input-group">
												<textarea class="form-control" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 121px;"></textarea>
											</div>
											<small class="form-text text-muted">Coworkers see this when they look at the available resources</small>
                                        </div>
                                    </div>
									 <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Photo</label>
                                        <div class="col-sm-9">
                                           <div class="input-group">
												<label class="custom-file">
													<input type="file" class="custom-file-input">
													<span class="custom-file-control"></span>
												</label>
											</div>
                                        </div>
                                    </div>
									 <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Min/max booking duration</label>
										<div class="col-md-9">
											<div class="row">
												<div class="col-md-6">
												   <div class="input-group">
														<input type="number" class="form-control" placeholder="max">
													</div>
												</div>
												<div class="col-md-6">
												   <div class="input-group">
														<input type="number" class="form-control" placeholder="min">
														<span class="input-group-addon">min</span>
													</div>
												</div>
											</div>
											<small class="form-text text-muted">Leave blank for no restrictions</small>
										</div>
                                    </div>
									<div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Cancellation notice</label>
                                        <div class="col-sm-9">
                                           <div class="input-group">
												<input type="number" class="form-control" placeholder="0">
												<span class="input-group-addon">h</span>
											</div>
											<small class="form-text text-muted">Prevent members from cancelling bookings within x hours before a booking starts</small>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. of units</label>
                                        <div class="col-sm-9">
                                           <div class="input-group">
												<input type="number" class="form-control" value="1">
											</div>
											<small class="form-text text-muted">How many people can book this at the same time</small>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Available Booking Times</label>
                                        <div class="col-sm-9">
                                           <div class="input-group">
												<input type="text" class="form-control">
											</div>
											<small class="form-text text-muted">You can enter multiple time frames separated by comma, e.g. 8am - 12pm, 14 - 22. You can also use week days, e.g. mo - fr 9 - 17, sa 10am - 3pm.</small>
                                        </div>
                                    </div>
									<div class="col-sm-12 col-form-label form-group row">
                                        <label class=" control control-solid control-solid-info control--checkbox">Hidden
											<input type="checkbox">
											<div class="control__indicator"></div>
											<small class="form-text text-muted">Can only be booked/seen by admins</small>
										</label>
                                    </div>
									<div class="col-sm-12 col-form-label form-group row">
                                        <label class=" control control-solid control-solid-info control--checkbox">Only admins can book
											<input type="checkbox" checked="checked">
											<div class="control__indicator"></div>
										</label>
                                    </div>
									<div class="form-group row">
										<div class="col-md-10">
                                           <div class="input-group">
												<a href="booking_resources.php">Back</a>
											</div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="input-group">
												<button type="submit" class="btn btn-info">Update</button>
											</div>
                                        </div>
                                    </div>
                                </form>
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
	<script src="js/bootstrap-colorpicker.min.js"></script>
	<script src="js/color-picker-init.js"></script>

</body>
</html>
