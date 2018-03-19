
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
                    <div class=" col-md-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="card-title">
								  <div class="row">
									<div class="col-md-2">
										<a class="btn btn-outline-primary" href="booking_my_bookings.php" role="button">My Bookings</a>
									</div>
									<div class="col-md-2">
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#new_booking" data-whatever="@mdo"><i class="fa fa-plus"></i> New Bookings</button>
									</div>
								  </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id='calendar'></div>
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
<!--- new booking -->
	<div class="modal fade" id="new_booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New Booking</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									<label for="recipient-name" class="col-form-label">From:</label>
								</div>
								<div class="col-md-5">
									<input type="text" class="form-control date-picker-input" value="Select Date">
								</div>
								<div class="col-md-5">
									<input type="text" class="form-control timepicker-default" aria-label="Right Icon" aria-describedby="basic-addon15">
								</div>
							</div>	
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									<label for="recipient-name" class="col-form-label">Duration:</label>
								</div>
								<div class="col-md-5">
									<input type="number" class="form-control">
								</div>
								<div class="col-md-5">
									<input type="number" class="form-control">
								</div>
							</div>	
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									<label for="recipient-name" class="col-form-label">Resource:</label>
								</div>
								<div class="col-md-10">
									<select class="form-control">
										<option>Meeting Room 0.00 $/hr</option>
									</select>
								</div>
							</div>	
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									<label for="recipient-name" class="col-form-label">Member:</label>
								</div>
								<div class="col-md-10">
									<select class="form-control">
										<option>Paige Turner</option>
										<option>Paul Molive</option>
									</select>
								</div>
							</div>	
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									<label for="recipient-name" class="col-form-label">Member:</label>
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control">
								</div>
							</div>	
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-2">
									<label for="recipient-name" class="col-form-label">Comments:</label>
								</div>
								<div class="col-md-10">
									<textarea class="form-control" id="message-text"></textarea>
								</div>
							</div>	
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Book Now</button>
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
