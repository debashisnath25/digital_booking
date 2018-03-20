<?php $page_name = BASENAME($_SERVER['PHP_SELF']); ?>
<div class="left-sidebar">
	<nav class="sidebar-menu">
		<ul id="nav-accordion">
			<li class="sub-menu">
				<a href="javascript:;" class="<?php if($page_name == 'dashboard.php' || || $page_name == 'member_list.php' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);') { ?> active<?php } ?>">
					<i class=" ti-home"></i>
					<span>Manage</span>
				</a>
				<ul class="sub">
					<li class="<?php if($page_name == 'dashboard.php') { ?> active<?php } ?>"><a  href="dashboard.php">Dashboard</a></li>
					<li class="<?php if($page_name == 'member_list.php') { ?> active<?php } ?>"><a  href="member_list.php">Members</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Invoices</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Help Desk</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Messages</a></li>
				</ul>
			</li>

			<li class="sub-menu">
				<a href="javascript:;" class="<?php if($page_name == 'booking_calendar.php' || $page_name == 'booking_resources.php' || $page_name == 'booking_resource_category.php' || $page_name == 'booking_calendar_setting.php' || $page_name == 'booking_external.php') { ?> active<?php } ?>">
					<i class="fa fa-calendar"></i>
					<span>Bookings</span>
				</a>
				<ul class="sub">
					<li class="<?php if($page_name == 'booking_calendar.php') { ?> active<?php } ?>"><a  href="booking_calendar.php">Booking Calendar</a></li>
					<li class="<?php if($page_name == 'booking_resources.php') { ?> active<?php } ?>"><a  href="booking_resources.php">Resources</a></li>
					<li class="<?php if($page_name == 'booking_resource_category.php') { ?> active<?php } ?>"><a  href="booking_resource_category.php">Resource Category</a></li>
					<li class="<?php if($page_name == 'booking_calendar_setting.php') { ?> active<?php } ?>"><a  href="booking_calendar_setting.php">Calendar Settings</a></li>
					<li class="<?php if($page_name == 'booking_external.php') { ?> active<?php } ?>"><a  href="booking_external.php">External Bookings</a></li>
				</ul>
			</li>

			<li class="sub-menu">
				<a href="javascript:;" class="<?php if($page_name == 'analyze_members.php' || $page_name == 'analyze_revenue.php' || $page_name == 'analyze_attendance.php' || $page_name == 'analyze_bookings.php') { ?> active<?php } ?>">
					<i class="fa fa-bar-chart-o"></i>
					<span>Analyze</span>
				</a>
				<ul class="sub">
					<li class="<?php if($page_name == 'analyze_members.php') { ?> active<?php } ?>"><a  href="analyze_members.php">Members</a></li>
					<li class="<?php if($page_name == 'analyze_revenue.php') { ?> active<?php } ?>"><a  href="analyze_revenue.php">Revenue</a></li>
					<li class="<?php if($page_name == 'analyze_attendance.php') { ?> active<?php } ?>"><a  href="analyze_attendance.php">Attendance</a></li>
					<li class="<?php if($page_name == 'analyze_bookings.php') { ?> active<?php } ?>"><a  href="analyze_bookings.php">Bookings</a></li>
				</ul>
			</li>

			<li class="sub-menu">
				<a href="javascript:;" class="<?php if($page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);' || $page_name == 'javascript:void(0);') { ?> active<?php } ?>">
					<i class="fa fa-cogs"></i>
					<span>Setup</span>
				</a>
				<ul class="sub">
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Basic</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Administrators</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Plans</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Invoice Settings</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Automated Payment</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Wifi Integration</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Member Questions</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Custom Fields</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Service Charges</a></li>
					<li class="<?php if($page_name == 'javascript:void(0);') { ?> active<?php } ?>"><a  href="javascript:void(0);">Account</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>