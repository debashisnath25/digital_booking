
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Booking Calendar Settings | Digital Booking and Management</title>
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
						<h4 class="mb-0">Booking Calendar Settings</h4>
					</div>
				  </div>
                </div>
                <!--page title end-->
				
				<div class="row">
                   <div class=" col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-body card-shadow">
								<form>
									<div class="col-sm-12 col-form-label form-group row">
										<label class=" control control-solid control-solid-info control--checkbox">Hide booking details from other members
											<input type="checkbox">
											<div class="control__indicator"></div>
											<small class="form-text text-muted">When checked members cannot see the title and member name of bookings made by other members.</small>
										</label>
									</div>
									<div class="form-group row">
										<div class="col-md-10"></div>
                                        <div class="col-md-2">
                                           <div class="input-group">
												<button type="submit" class="btn btn-info">Save Settings</button>
											</div>
                                        </div>
                                    </div>
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
