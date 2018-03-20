
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Invoice | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
	 <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
               <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4 mt-4">
                            <div class="card-header">
                                <div class="card-title" style="float:left;width:100px;">
                                    INVOICES
                                </div>
								<div class="card-title" style="float:right;font-size:15px;color:#207ABB;font-weight:normal;">
                                    <i class="fa fa-download" aria-hidden="true"></i> CSV&nbsp;&nbsp;&nbsp;
									<i class="fa fa-download" aria-hidden="true"></i> PDF&nbsp;&nbsp;&nbsp;
									<a href="javascript:void(0);" data-toggle="modal" data-target="#exampleModal4" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> New Invoice</a>
									<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">New Invoice</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Select the member the invoice is for</label>
                                                        <select class="form-control" id="option_s1" name="param">
															<option selected disabled>
																Choose Member 
															</option>
															<option value="AK">
																Member 1
															</option>
															<option value="HI">
																Member 2
															</option>
															<option value="CA">
																Member 3
															</option>
															<option value="NV">
																Member 4
															</option>
														</select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="col-form-label">or <a href="add_invoice.php">Create Invoice for non-member</a></label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="add_invoice.php" class="btn btn-info">Send message</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
							<div class="card-body">
                                <ul class="nav nav-pills nav-pills-info mb-4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab-p-info_1">INVOICES BY MONTH</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-p-info_2">UNPAID INVOICES</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-p-info_1" role="tabpanel">
                                        <div class="row grid-view-white">
											<div class="col-xs-12 col-md-8" style="margin-top:10px;">
												<code style="background-color:#FFE2D7;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Unpaid <i class="fa fa-eye" aria-hidden="true"></i></code> &nbsp;&nbsp;
												<code style="background-color:#FFECC1;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Written off <i class="fa fa-eye" aria-hidden="true"></i></code> &nbsp;&nbsp;
												<code style="background-color:#D8E5F2;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Paid <i class="fa fa-eye" aria-hidden="true"></i></code> &nbsp;&nbsp;
												<code style="background-color:#FFE2D7;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Not Sent <i class="fa fa-eye" aria-hidden="true"></i></code> &nbsp;&nbsp; 
												<code style="background-color:#D8E5F2;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Sent <i class="fa fa-eye" aria-hidden="true"></i></code>	
											</div>
											<div class="col-xs-6 col-md-4">
												<div class="input-group mb-4">
													<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
													  <span class="input-group-btn">
														<button class="btn btn-info" type="button">Go!</button>
													  </span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<table class="table table-responsive-lg table-bordered table-striped">
													<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Date</th>
														<th scope="col">Name / Company</th>
														<th scope="col">Amount</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<th scope="row">1</th>
														<td>March 19, 2018</td>
														<td>John Doe<br/> Google</td>
														<td>$ 1999<br/> <code style="background-color:#FFE2D7;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Not Sent</code> &nbsp;&nbsp;<code style="background-color:#FFE2D7;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Unpaid</code></td>
													</tr>
													</tbody>
												</table>
											</div>
											<div class="col-sm-4 ml-auto">
												<table class="table table-bordered table-striped">
													<tbody>
													<tr>
														<td>
															<strong>TOTAL:</strong>
														</td>
														<td><strong>$ 1999</strong></td>
													</tr>
													<tr>
														<td>
															<strong>TOTAL PAID:</strong>
														</td>
														<td><strong>$ 0</strong></td>
													</tr>
													</tbody>
												</table>
											</div>

										</div>
                                    </div>
                                    <div class="tab-pane" id="tab-p-info_2" role="tabpanel">
                                        <div class="row grid-view-white">
											<div class="col-xs-12 col-md-8" style="margin-top:10px;">
												<code style="background-color:#FFE2D7;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Unpaid <i class="fa fa-eye" aria-hidden="true"></i></code> &nbsp;&nbsp;
												<code style="background-color:#FFECC1;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Written off <i class="fa fa-eye" aria-hidden="true"></i></code> &nbsp;&nbsp;
												<code style="background-color:#D8E5F2;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Paid <i class="fa fa-eye" aria-hidden="true"></i></code> &nbsp;&nbsp;
												<code style="background-color:#FFE2D7;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Not Sent <i class="fa fa-eye" aria-hidden="true"></i></code> &nbsp;&nbsp; 
												<code style="background-color:#D8E5F2;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Sent <i class="fa fa-eye" aria-hidden="true"></i></code>	
											</div>
											<div class="col-xs-6 col-md-4">
												<div class="input-group mb-4">
													<input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
													  <span class="input-group-btn">
														<button class="btn btn-info" type="button">Go!</button>
													  </span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<table class="table table-responsive-lg table-bordered table-striped">
													<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Date</th>
														<th scope="col">Name / Company</th>
														<th scope="col">Amount</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<th scope="row">1</th>
														<td>March 19, 2018</td>
														<td>John Doe<br/> Google</td>
														<td>$ 1999<br/> <code style="background-color:#FFE2D7;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Not Sent</code> &nbsp;&nbsp;<code style="background-color:#FFE2D7;color:black;padding: 7px;cursor: pointer;border-radius: 50px;">Unpaid</code></td>
													</tr>
													</tbody>
												</table>
											</div>
											<div class="col-sm-4 ml-auto">
												<table class="table table-bordered table-striped">
													<tbody>
													<tr>
														<td>
															<strong>TOTAL:</strong>
														</td>
														<td><strong>$ 1999</strong></td>
													</tr>
													<tr>
														<td>
															<strong>TOTAL PAID:</strong>
														</td>
														<td><strong>$ 0</strong></td>
													</tr>
													</tbody>
												</table>
											</div>

										</div>
                                    </div>
                                </div>
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
 <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
   <script>
        $(document).ready(function() {
            $('#bs4-table').DataTable();
        } );
    </script>
	<script>
        $(document).ready(function() {
            $('#bs5-table').DataTable();
        } );
    </script>
   


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    
	
</body>
</html>
