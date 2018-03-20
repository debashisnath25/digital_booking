
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Dashboard | Digital Booking and Management</title>
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
            <div class="container">
                <!--page title start-->
                <div class="page-title pl-0">
                    <h4 class="mb-0"> 
                    </h4>
                </div>

               <div class="row">
					<div class="col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title" style="float:left;width:100px;">
                                    Members
                                </div>
								<div class="card-title" style="float:right;font-size:15px;color:#207ABB;font-weight:normal;">
                                    <i class="fa fa-download" aria-hidden="true"></i> CSV&nbsp;&nbsp;&nbsp;
									<a href="send_message.php"><i class="fa fa-location-arrow" aria-hidden="true"></i> Send Email to List(2)</a>&nbsp;&nbsp;&nbsp;
									<a href="add_member.php" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Add Member</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-pills-info mb-4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tab-p-info_1">RECENTLY ACTIVE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-p-info_2">CURRENT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-p-info_3">CANCELED</a>
                                    </li>
									<li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tab-p-info_4">UNCONFIRMED</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-p-info_1" role="tabpanel">
                                        <table id="bs4-table" class="table table-responsive-lg table-bordered table-striped" cellspacing="0" width="100%">
											<thead>
											<tr>
												<th>Name / Company</th>
												<th>Plan / Price</th>
												<th>Payment Method</th>
												<th>Status</th>
											</tr>
											</thead>
											
											<tbody>
											<tr>
												<td>Tiger Nixon</td>
												<td>Free : $ 00</td>
												<td>None</td>
												<td>Confirmed</td>
											</tr>
											<tr>
												<td>Garrett Winters</td>
												<td>Drop-in : $ 00</td>
												<td>None</td>
												<td>Not Confirmed</td>
											</tr>
											
											</tbody>
										</table>
                                    </div>
                                    <div class="tab-pane" id="tab-p-info_2" role="tabpanel">
                                        <table id="bs5-table" class="table table-responsive-lg table-bordered table-striped" cellspacing="0" width="100%">
											<thead>
											<tr>
												<th>Name / Company</th>
												<th>Plan / Price</th>
												<th>Payment Method</th>
												<th>Status</th>
											</tr>
											</thead>
											
											<tbody>
											<tr>
												<td>Tiger Nixon</td>
												<td>Free : $ 00</td>
												<td>None</td>
												<td>Confirmed</td>
											</tr>
											<tr>
												<td>Garrett Winters</td>
												<td>Drop-in : $ 00</td>
												<td>None</td>
												<td>Not Confirmed</td>
											</tr>
											
											</tbody>
										</table>
                                    </div>
                                    <div class="tab-pane" id="tab-p-info_3" role="tabpanel">
                                        No members have canceled yet.
                                    </div>
									 <div class="tab-pane" id="tab-p-info_4" role="tabpanel">
                                        No members to be confirmed.
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
