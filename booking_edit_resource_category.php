
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Edit Resource Category | Digital Booking and Management</title>
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
						<h4 class="mb-0">Meeting</h4>
					</div>
					<div class="col-md-3 text-right" style="padding:0px;margin:0px;">
						 <button type="button" class="btn  btn-info"><i class="fa fa-close pr-2"></i>Remove</button>
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
                                        <label class="col-sm-3 col-form-label">Category Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="Meeting">
                                        </div>
                                    </div>
									<div class="col-sm-12 col-form-label form-group row">
                                        <label class=" control control-solid control-solid-info control--checkbox">Meeting Room
											<input type="checkbox">
											<div class="control__indicator"></div>
										</label>
                                    </div>
									<div class="form-group row">
										<div class="col-md-10">
                                           <div class="input-group">
												<a href="booking_resource_category.php">Back</a>
											</div>
                                        </div>
                                        <div class="col-md-2">
                                           <div class="input-group">
												<button type="submit" class="btn btn-info">Update Category</button>
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
