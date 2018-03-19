
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">
	<title>Booking Calendar | Digital Booking and Management</title>
    <?php include("metalinks.php");?>
	<link href='css/fullcalendar.css'  rel='stylesheet' />
	<link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="css/datetimepicker.css" rel="stylesheet">
    <link href="css/timepicker.css" rel="stylesheet">

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
						<h4 class="mb-0">Booking Calendar</h4>
					</div>
					<div class="col-md-3 text-right" style="padding:0px;margin:0px;">
						 <button type="button" class="btn  btn-info" data-toggle="modal" data-target="#ical" data-whatever="@mdo"><i class="fa fa-calendar-check-o pr-2"></i> iCal</button>
					</div>
				  </div>
                </div>
                <!--page title end-->
				 <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
						<div class="card card-shadow mb-4">
							<div class="card-body text-center">
								<h5>Sorry, you haven't booked anything for the future.</h5>
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
	<!--===========iCalendar===========-->
	<div class="modal fade" id="ical" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">iCalendar Feed</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<span>iCalendar allows you to view the booking calendar from any calendar software that supports iCalendar, e.g. iCal on the Mac or Outlook on Windows.<br/><br/>Just copy the following URL and paste it into your calendar application.</span>
					<form>
						<div class="form-group">
							<select class="form-control">
								<option>All Resources</option>
								<option>Meeting Room</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <!--===========footer start===========-->
	<?php include("footer.php");?>
	<script src='js/moment.min.js'></script>
    <script src='js/fullcalendar.js'></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/date-picker-init.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>
	<script src="js/bootstrap-timepicker.js"></script>
	<script src="js/datetime-picker-init.js"></script>

    <!--calendar init-->
    <script src='js/calendar-basic-init.js'></script>
</body>
</html>
