
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Add Invoice | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
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
            <div class="container-fluid">
                <!--page title start-->
				<div class="page-title pl-0">
                </div>
               <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
                                    New Invoice
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="container"  novalidate="">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom01">Issue Date *</label>
                                            <input type="text" class="form-control date-picker-input" value="Select Date">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Company</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Company name" required="">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom04">Tax ID &nbsp;<a href="setup_invoice_settings.php"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="Tax ID" required="">
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Name</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="name" required="">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationCustom04">Tax Rate *</label>
                                            <div class="input-group">
												<input type="number" class="form-control" placeholder="Tax Rate" aria-label="Right Icon" aria-describedby="basic-addon12">
												<span class="input-group-addon input-group-addon-bg-none" id="basic-addon12">%</span>
											</div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Address *</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
									<div class="row" >
										<div class="col-md-12 mb-3" >
                                        <div class="col-md-12 mb-3" style="border:1px dashed #207ABB;text-align:center;color:#207ABB;">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal4"><label for="validationCustom02" style="cursor: pointer;margin-top:8px;"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Item</label></a>
                                        </div>
										<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form>
															<div class="row">
																<div class="col-md-12 mb-3">
																	<label for="validationCustom01">Description *</label>
																	<input type="text" class="form-control" >
																</div>
															</div>
															<div class="row">
																<div class="col-md-3 mb-3">
																	<label for="validationCustom01">Quantity</label>
																	<input type="number" class="form-control" >
																</div>
																<div class="col-md-6 mb-3">
																	<label for="validationCustom01">Amount *</label>
																	<input type="number" class="form-control" >
																</div>
																<div class="col-md-3 mb-3">
																	<label for="validationCustom01">Tax Rate</label>
																	<input type="number" class="form-control" value="0" aria-label="Right Icon" aria-describedby="basic-addon12" disabled>
																</div>
															</div>
															<div class="row">
																<div class="col-md-8 mb-3" >
																	<label for="validationCustom01">Total Amount</label>
																</div>
																<div class="col-md-4 mb-3" >
																	<label for="validationCustom01">$ 0.00</label>
																</div>
															</div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-info">Add Item</button>
													</div>
												</div>
											</div>
										</div>
										</div>
										
                                    </div>
									<div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">Invoice Text</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">Notes (Only visible to admins)</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-info" type="submit">Save Invoice</button>
                                </form>

                                <!-- <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';

                                        window.addEventListener('load', function() {
                                            var form = document.getElementById('needs-validation');
                                            form.addEventListener('submit', function(event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add('was-validated');
                                            }, false);
                                        }, false);
                                    })();
                                </script> -->
                            </div>
                        </div>
                    </div>
                </div>
        </main>
    </div>
    <!--===========app body end===========-->

   <?php
   include("footer.php");
   ?>
 <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/date-picker-init.js"></script>
   


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    
	
</body>
</html>
