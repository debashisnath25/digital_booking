
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Member Questions | Digital Booking and Management</title>
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
						<h4 class="mb-0">Custom Questions</h4>
					</div>
				  </div>
                </div>
                <!--page title end-->
				<div class="col-md-12" style="margin:0px;padding:0px;">
					<div class="alert alert-primary border-0">
						<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;Ask your coworkers for any additional information, e.g. professional background, special needs, etc. They will be asked these questions when signing up.
					</div>
				</div>
				 <!-- state start-->
			 <form>
               <div class="row">
                   <div class=" col-md-12">
                        <div class="card card-shadow mb-4">
							<div class="card-header">
                                <div class="card-title">
                                   Invoice Sender Address
                                </div>
                            </div>
                            <div class="card-body">
								 <div class="form-group row">
									<label class="col-sm-3 col-form-label">Message</label>
									<div class="col-sm-9">
									   <div class="input-group">
											<textarea class="form-control" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 121px;" placeholder="Message"></textarea>
										</div>
										<small class="form-text text-muted">This will be shown to members on the questionnaire form.</small>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">No questions set up yet.</label>
								</div>
								<div class="col-md-12 mb-3" style="border:1px dashed #207ABB;text-align:center;color:#207ABB;">
									<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal4"><label for="validationCustom02" style="cursor: pointer;margin-top:8px;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Question</label></a>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
			</form>
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
