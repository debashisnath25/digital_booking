
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Dashboard | Digital Booking and Management</title>
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
                    <h4 class="mb-0">Add Plans
                    </h4>
                </div>
				
                <!--page title end-->

                <!--state widget start-->
                
                <!--state widget end-->

                <div class="row">
                    <!--Report widget start-->
                    <div class="col-xl-12">
                        <div class="card card-shadow mb-4">
                            
							 <div class="card card-shadow mb-4">
                          
                            <div class="card-body">
                                <ul class="nav nav-pills nav-pills-info mb-4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab-j_1"> <i class="fa fa-home pr-2"></i>BASIC SETTINGS</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-j_2">TIME PASSES</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-j_3">EXTRAS</a>
                                    </li>

									 <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-j_4">MESSAGES</a>
                                    </li>

									 <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-j_5">BOOKINGS</a>
                                    </li>

									<li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-j_6">SIGNUP CHARGE</a>
                                    </li>

                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-j_1" role="tabpanel">
                                        <form>
											<div class="form-group row">
												<label for="inputEmail3" class="col-sm-3 col-form-label">Name of the space</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputEmail3" placeholder="Name of the space">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Description</label>
												<div class="col-sm-9">
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
													Coworkers see this when they sign up.
												</div>
											</div>
											<div class="form-group row">
											<label class="col-sm-3 col-form-label">Price</label>
											  <div class="col-md-9">
											   <div class="row">
												<div class="col-md-6">
												   <div class="input-group">
												  <input type="number" class="form-control" placeholder="Price">
												 </div>
												</div>
												<div class="col-md-6">
												   <div class="input-group">
												   <span class="input-group-addon">per</span>
												  <input type="number" class="form-control" >
												  <span class="input-group-addon">month(s)</span>
												 </div>
												</div>
											   </div>
											   <small class="form-text text-muted">Net value.Enter 0 for no regular fee</small>
											  </div>
											</div>
											<div class="form-group row">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Terms &amp; Condition</label>
												<div class="col-sm-9">
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
													<small class="form-text text-muted">To add formatting, select some text and use the buttons that appear above it</small>
																										
												</div>
												
											</div>
											<div class="form-group row">
												<label for="inputPassword3" class="col-sm-3 col-form-label">Cancellation Notice</label>
												<div class="col-sm-9">
													 <div class="input-group">
													   <input type="number" class="form-control" >
													  <span class="input-group-addon">day(s)</span>
													 </div>
													<small class="form-text text-muted">Number of days notice a member must give when canceling their membership. If left blank, members can cancel to the end of their current billing cycle.</small>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputEmail3" class="col-sm-3 col-form-label">Minimum Commitment</label>
												<div class="col-sm-9">
													<input type="number" class="form-control" id="inputEmail3" >
													<small class="form-text text-muted">Member can only cancel/change plan after given number of months.</small>
												</div>
											</div>
											<p class="fw-600">Show Prices</p>
											<div class="col-md-6">
											<div class="row">
											   <div class="col-md-6">
													<label class="custom-control custom-radio">
														<input id="radio1" name="radio" type="radio" class="custom-control-input">
														<span class="custom-control-indicator"></span>
														<span class="custom-control-description">Public</span>
													</label>
													<small id="emailHelp" class="form-text text-muted">Displayed on your space homepage.</small>
												</div>

												<div class="col-md-6">
													<label class="custom-control custom-radio">
														<input id="radio2" name="radio" type="radio" class="custom-control-input">
														<span class="custom-control-indicator"></span>
														<span class="custom-control-description">Hidden Plan</span>
													</label>
													<small id="emailHelp" class="form-text text-muted">Give select people access via a secret link.</small>

												</div>

											  </div>
									
											</div>
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input">
												<span class="custom-control-indicator"></span>
												<span class="custom-control-description">New members have to be approved</span>
											</label>
											<small id="emailHelp" class="form-text text-muted">When a new member signs up admins get an email to approve them.</small>
								       </form>
								</div>
									
									<div class="tab-pane" id="tab-j_2" role="tabpanel">
									  <div class="col-xl-12">
										<div class="card card-shadow mb-4">     
										<div class="card card-shadow">
											<div class="card-body ">
											<big id="emailHelp" class="form-text text-muted"><h5>Limit plans to a no. of days per week or month, allow coworkers to buy additional time when their included time is used up.<h5></big>
												<div class="btn-demo ">
                                                    
                                                    <button type="button" class="btn btn-secondary btn-lg btn-block">Add Time Passes</button>
                                                </div>
											</div>
										</div>                         
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputEmail3" placeholder="Day pass">
										</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-3 col-form-label">Time Pass Prices</label>
										<div class="col-sm-9">
                                           <div class="input-group">
												<input type="number" class="form-control" placeholder="0">
												<span class="input-group-addon">$</span>
											</div>
											<small class="form-text text-muted">Net value</small>
                                        </div>
									</div>
									
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-3 col-form-label">Time Pass Prices</label>
										<div class="col-sm-9">
                                           <div class="input-group">
												<input type="number" class="form-control" placeholder="0">
												<span class="input-group-addon">days after purchase</span>
											</div>
											<small class="form-text text-muted">If filled out, purchased passes automatically expire after the given no. of days. Does not affect passes included in the plan.</small>
                                        </div>
									</div>
                                     <big id="emailHelp" class="form-text text-muted"><h5>Limit plans to a no. of days per week or month, allow coworkers to buy additional time when their included time is used up.<h5></big>
                                    </div>
                                    <div class="tab-pane" id="tab-j_3" role="tabpanel">
                                        <form>
										<div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                        <small id="emailHelp" class="form-text text-muted">Set to zero if you don&acute;t charge taxes. For multiple tax rates contact us. Support</small>
                                    </div>
											
                               
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Custom Tax Rate</span>
									
                                </label>
								<small id="emailHelp" class="form-text text-muted">Use different tax rates for resources and charges</small>

                                <br>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Multiple Currencies</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">Use different currencies for resources, plans and charges</small>

                                                       
                          
							
								<p class="fw-600">Show Prices</p>
                                <label class="custom-control custom-radio">
                                    <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Net</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">Without tax</small>

                                
                                <label class="custom-control custom-radio">
                                    <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Gross</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">With Tax</small>

										
										</form>
                                    </div>
									<div class="tab-pane" id="tab-j_4" role="tabpanel">
                                        <form>
										<div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                        <small id="emailHelp" class="form-text text-muted">Set to zero if you don’t charge taxes. For multiple tax rates contact us. Support</small>
                                    </div>
											
                               
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Custom Tax Rate</span>
									
                                </label>
								<small id="emailHelp" class="form-text text-muted">Use different tax rates for resources and charges</small>

                                <br>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Multiple Currencies</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">Use different currencies for resources, plans and charges</small>

                                                       
                          
							
								<p class="fw-600">Show Prices</p>
                                <label class="custom-control custom-radio">
                                    <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Net</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">Without tax</small>

                                
                                <label class="custom-control custom-radio">
                                    <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Gross</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">With Tax</small>

										
										</form>
                                    </div>
									<div class="tab-pane" id="tab-j_5" role="tabpanel">
                                        <form>
										<div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                        <small id="emailHelp" class="form-text text-muted">Set to zero if you don’t charge taxes. For multiple tax rates contact us. Support</small>
                                    </div>
											
                               
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Custom Tax Rate</span>
									
                                </label>
								<small id="emailHelp" class="form-text text-muted">Use different tax rates for resources and charges</small>

                                <br>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Multiple Currencies</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">Use different currencies for resources, plans and charges</small>

                                                       
                          
							
								<p class="fw-600">Show Prices</p>
                                <label class="custom-control custom-radio">
                                    <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Net</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">Without tax</small>

                                
                                <label class="custom-control custom-radio">
                                    <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Gross</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">With Tax</small>

										
										</form>
                                    </div>
									<div class="tab-pane" id="tab-j_6" role="tabpanel">
                                        <form>
										<div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                                        <small id="emailHelp" class="form-text text-muted">Set to zero if you don&acute;t charge taxes. For multiple tax rates contact us. Support</small>
                                    </div>
											
                               
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Custom Tax Rate</span>
									
                                </label>
								<small id="emailHelp" class="form-text text-muted">Use different tax rates for resources and charges</small>

                                <br>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Multiple Currencies</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">Use different currencies for resources, plans and charges</small>

                                                       
                          
							
								<p class="fw-600">Show Prices</p>
                                <label class="custom-control custom-radio">
                                    <input id="radio1" name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Net</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">Without tax</small>

                                
                                <label class="custom-control custom-radio">
                                    <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Gross</span>
                                </label>
								<small id="emailHelp" class="form-text text-muted">With Tax</small>

										
										</form>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>

							<!-- <p class="card-text f18" style="text-align:center;margin-top:-10px;">more</p> -->
                   </div>
				   <div class="col-md-12 text-right" style="padding:0px;margin:0px;">
				<input type="submit" class="btn btn-info btn-lg" value="Add Plans">
				</div>

                  </div>

                    <!--Report widget end-->

                    <!--weather widget start-->

                    <!--weather widget end-->
                </div>

            </div>
        </main>
        <!--main contents end-->

        <!--right sidebar start-->
        <aside class="right-sidebar">

            <!--notification widget start-->
            <div class="widget">
                <h3 class="mb-4 widget-title">Notification</h3>

                <div class="notification-list">
                    <ul class="list-unstyled">
                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="images/n1.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">Diverse Ltd.</a>
                                <small class="text-muted">2 days ago</small>
                                <p><a href="#">www.diverse-test.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="images/n3.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">Black Friday Discount Offer</a>
                                <small class="text-muted">2 days ago</small>
                                <p>Nam libero tempore cum soluta nobis est eligendi.</p>
                            </div>
                        </li>

                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="images/n2.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">Task Failed</a>
                                <small class="text-muted">2 days ago</small>
                                <p>Error: Invalid command found ... after [this class]</p>
                            </div>
                        </li>

                        <li>
                            <div class="nt-thumb mr-3">
                                <img src="images/n4.png" alt=""/>
                            </div>
                            <div class="nt-info">
                                <a href="#"  class="nt-title">John Doe</a>
                                <small class="text-muted">3 days ago</small>
                                <p>Send you a contact request.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!--notification widget end-->

            <!--Active log widget start-->
            <div class="widget">
                <h3 class="mb-4 widget-title">Activity Log</h3>
                <div class="baseline baseline-border">
                    <div class="baseline-list">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>John Tasi</strong></a> Prepare for the Meeting <span class="badge badge-pill badge-success">status</span></div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list baseline-border baseline-primary">
                        <div class="baseline-info">
                            <div>Video conference to client</div>
                            <span class="text-muted">05:00 PM Sun, 02 Feb 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list  baseline-border baseline-success">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>Tnisha</strong></a> Submit a blog post <a href="#" class="">best admin template in 2018.</a></div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list  baseline-border baseline-warning">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>New Request</strong></a> 10 user request to approve or remove</div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                    <div class="baseline-list  baseline-border baseline-info">
                        <div class="baseline-info">
                            <div><a href="#" class="default-color"><strong>Mark Henry</strong></a> added your friend list now</div>
                            <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Active log widget end-->

            <!--stock widget start-->
            <div class="widget">
                <h3 class="mb-4 widget-title">Stocks</h3>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>DOW</td>
                            <td>1999</td>
                            <td>
                                <span class="badge badge-pill badge-primary">+ 0.10%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>AAPL</td>
                            <td>1299</td>
                            <td>
                                <span class="badge badge-pill badge-success">- 0.50%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>SBUX</td>
                            <td>1099</td>
                            <td>
                                <span class="badge badge-pill badge-danger">+ 0.20%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>NKE</td>
                            <td>2199</td>
                            <td>
                                <span class="badge badge-pill badge-warning">+ 1.25%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>YOO</td>
                            <td>999</td>
                            <td>
                                <span class="badge badge-pill badge-info">+ 3.00%</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!--stock widget end-->

        </aside>
        <!--right sidebar end-->

    </div>
    <!--===========app body end===========-->

    <!--===========footer start===========-->
    <footer class="app-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    2018 © Diverse Admin by MHS
                </div>
                <div class="col-4">
                    <a href="#" class="float-right back-top">
                        <i class=" ti-arrow-circle-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!--===========footer end===========-->


    <!-- Placed js at the end of the page so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.ui.touch-punch-improved.js"></script>
    <script src="js/lobicard.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>

    <!--echarts-->
    <script type="text/javascript" src="js/echarts-all-3.js"></script>
    <!--init echarts-->
    <script>
        $(document).ready(function() {

            <!--Rainfall and Evaporation echarts init-->

            var dom = document.getElementById("rainfall");
            var rainChart = echarts.init(dom);

            var app = {};
            option = null;
            option = {
                color: ['#A768F3','#36a2f5'],
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['Sale','Market']
                },
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'Sale',
                        type:'bar',
                        data:[2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
                        markPoint : {
                            data : [
                                {type : 'max', name: 'Max'},
                                {type : 'min', name: 'Min'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name: 'Average'}
                            ]
                        }
                    },
                    {
                        name:'Market',
                        type:'bar',
                        data:[2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
                        markPoint : {
                            data : [
                                {name : 'Max', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
                                {name : 'Min', value : 2.3, xAxis: 11, yAxis: 3}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name : 'Average'}
                            ]
                        }
                    }
                ]
            };

            if (option && typeof option === "object") {
                rainChart.setOption(option, false);
            }


            <!--Doughnut echarts init-->

            var dom = document.getElementById("doughnut");
            var dnutChart = echarts.init(dom);

            var app = {};
            option = null;
            option = {
                color: ['#FF518A','#eac459', '#36a2f5','#34bfa3', '#A768F3'],
                tooltip : {
                    trigger: 'item',
                    formatter: '{a} <br/>{b} : {c} ({d}%)'
                },
                legend: {
                    orient : 'vertical',
                    x : 'left',
                    data:['Direct','Mail','Affiliate','AD','Search']
                },
                calculable : true,
                series : [
                    {
                        name:'Source',
                        type:'pie',
                        radius : ['50%', '70%'],
                        data:[
                            {value:335, name:'Direct'},
                            {value:310, name:'Mail'},
                            {value:234, name:'Affiliate'},
                            {value:135, name:'AD'},
                            {value:1548, name:'Search'}
                        ]
                    }
                ]
            };

            if (option && typeof option === "object") {
                dnutChart.setOption(option, false);
            }



        });
    </script>


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    <script src="js/scripts.min.js"></script>
	
</body>
</html>
