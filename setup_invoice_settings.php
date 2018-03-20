
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Invoice Settings | Digital Booking and Management</title>
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
						<h4 class="mb-0">Invoice Settings</h4>
					</div>
				  </div>
                </div>
                <!--page title end-->
				<div class="col-md-12" style="margin:0px;padding:0px;">
					<div class="alert alert-primary border-0">
						<i class="fa fa-lightbulb-o"></i>&nbsp;&nbsp;Please fill out the details. These will show up on the invoices we send to your members
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
									<label class="col-sm-3 col-form-label">Company</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Enter company name">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Name</label>
									 <div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Enter name">
									</div>
								</div>
								 <div class="form-group row">
									<label class="col-sm-3 col-form-label">Address</label>
									<div class="col-sm-9">
									   <div class="input-group">
											<textarea class="form-control" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 121px;" placeholder="Address"></textarea>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
				 <div class="row">
                   <div class=" col-md-12">
                        <div class="card card-shadow mb-4">
							<div class="card-header">
                                <div class="card-title">
                                   Invoice Format
                                </div>
                            </div>
                            <div class="card-body">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Invoice Number Format</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="{{1}}">
										<small class="form-text text-muted">Add any letters and {{YY}} or {{YYYY}} as well as {{MM}} for year and month. Example 'clickrstop-software-solutions-pvt-ltd-{{YYYY}}-{{100}}' becomes 'clickrstop-software-solutions-pvt-ltd-2018-100'. Invoice numbers will be counted up from the number in {{curly braces}}. To have the invoice numbers reset every year/momth, add a Y/M at the beginning of the number (e.g. {{Y100}} or {{M100}}).</small>
									</div>
								</div>
								
								 <div class="form-group row">
									<label class="col-sm-3 col-form-label">Invoice Text</label>
									<div class="col-sm-9">
									   <div class="input-group">
											<textarea class="form-control" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 121px;" placeholder="Enter Invoice Text"></textarea>
										</div>
										<small class="form-text text-muted">E.g. payment information or a thank you note</small>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
				 <div class="row">
                   <div class=" col-md-12">
                        <div class="card card-shadow mb-4">
							<div class="card-header">
                                <div class="card-title">
                                   Invoicing Settings
                                </div>
                            </div>
                            <div class="card-body">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Tax Name (e.g. VAT, GST, MwSt)</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" value="Tax">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Name of Tax ID in your country (e.g. VAT ID, Ust-ID)</label>
									<div class="col-sm-9">
										<input type="text" class="form-control input-lg" value="Tax ID">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Default Invoice Day</label>
									<div class="col-sm-3">
										<select class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>
									<label class="col-sm-3 col-form-label">Generate and send invoices</label>
									<div class="col-sm-3">
										<div class="input-group">
											<input type="text" class="form-control">
											<span class="input-group-addon">days early</span>
										</div>
										<small class="form-text text-muted">Invoices are generated and sent the given no. of days before they are due and charged.</small>
									</div>
								</div>
								 <div class="form-group row">
									<label class="col-sm-3 col-form-label">Copy invoice emails</label>
									<div class="col-sm-9">
									   <div class="input-group">
											<input type="email" class="form-control">
										</div>
										<small class="form-text text-muted">Sends a copy of each invoice to the given email address.</small>
									</div>
								</div>
								<div class="col-sm-12 col-form-label form-group row">
									<label class=" control control-solid control-solid-info control--checkbox">Hide invoices from members
										<input type="checkbox">
										<div class="control__indicator"></div>
										<small class="form-text text-muted">Members can&acute;t see invoices on the web app</small>
									</label>
								</div>
								<div class="col-sm-12 col-form-label form-group row">
									<label class=" control control-solid control-solid-info control--checkbox">Send invoices by email
										<input type="checkbox">
										<div class="control__indicator"></div>
									</label>
								</div>
								<div class="col-sm-12 col-form-label form-group row">
									<label class=" control control-solid control-solid-info control--checkbox">Enable accounting codes
										<input type="checkbox">
										<div class="control__indicator"></div>
										<small class="form-text text-muted">Track revenue using a code for each type of revenue on member invoices.<a href="setup_accounting_codes.php"> Manage accounting codes</a></small>
									</label>
								</div>
								<div class="form-group row">
									<div class="col-md-10"></div>
									<div class="col-md-2">
									   <div class="input-group">
											<button type="submit" class="btn btn-info">Submit</button>
										</div>
									</div>
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
