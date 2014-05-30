<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>{{$title}}</title>
	{{HTML::style('assets/admin/bootstrap/css/bootstrap.min.css')}}
	{{HTML::style('assets/admin/assets/css/main.css')}}
	{{HTML::style('assets/admin/assets/css/plugins.css')}}
	{{HTML::style('assets/admin/assets/css/responsive.css')}}
	{{HTML::style('assets/admin/assets/css/icons.css')}}
	{{HTML::style('assets/admin/assets/css/fontawesome/font-awesome.min.css')}}
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	{{HTML::script('assets/admin/assets/js/libs/jquery-1.10.2.min.js')}}
	{{HTML::script('assets/admin/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}
	{{HTML::script('assets/admin/bootstrap/js/bootstrap.min.js')}}
	{{HTML::script('assets/admin/assets/js/libs/lodash.compat.min.js')}}
	{{HTML::script('assets/admin/plugins/touchpunch/jquery.ui.touch-punch.min.js')}}
	{{HTML::script('assets/admin/plugins/event.swipe/jquery.event.move.js')}}
	{{HTML::script('assets/admin/plugins/event.swipe/jquery.event.swipe.js')}}
	{{HTML::script('assets/admin/assets/js/libs/breakpoints.js')}}
	{{HTML::script('assets/admin/plugins/respond/respond.min.js')}}
	{{HTML::script('assets/admin/plugins/cookie/jquery.cookie.min.js')}}
	{{HTML::script('assets/admin/plugins/slimscroll/jquery.slimscroll.min.js')}}
	{{HTML::script('assets/admin/plugins/slimscroll/jquery.slimscroll.horizontal.min.js')}}
	{{HTML::script('assets/admin/plugins/sparkline/jquery.sparkline.min.js')}}
	{{HTML::script('assets/admin/plugins/flot/jquery.flot.min.js')}}
	{{HTML::script('assets/admin/plugins/flot/jquery.flot.tooltip.min.js')}}
	{{HTML::script('assets/admin/plugins/flot/jquery.flot.resize.min.js')}}
	{{HTML::script('assets/admin/plugins/flot/jquery.flot.resize.min.js')}}
	{{HTML::script('assets/admin/plugins/flot/jquery.flot.time.min.js')}}
	{{HTML::script('assets/admin/plugins/flot/jquery.flot.growraf.min.js')}}
	{{HTML::script('assets/admin/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js')}}
	{{HTML::script('assets/admin/plugins/daterangepicker/moment.min.js')}}
	{{HTML::script('assets/admin/plugins/daterangepicker/daterangepicker.js')}}
	{{HTML::script('assets/admin/plugins/blockui/jquery.blockUI.min.js')}}
	{{HTML::script('assets/admin/plugins/noty/jquery.noty.js')}}
	{{HTML::script('assets/admin/plugins/noty/layouts/top.js')}}
	{{HTML::script('assets/admin/plugins/noty/themes/default.js')}}
	{{HTML::script('assets/admin/plugins/uniform/jquery.uniform.min.js')}}
	{{HTML::script('assets/admin/plugins/select2/select2.min.js')}}
	{{HTML::script('assets/admin/assets/js/app.js')}}
	{{HTML::script('assets/admin/assets/js/plugins.js')}}
	{{HTML::script('assets/admin/assets/js/plugins.form-components.js')}}

	<script>
	$(document).ready(function(){
		"use strict";

		App.init(); // Init layout and core plugins
		Plugins.init(); // Init all plugins
		FormComponents.init(); // Init all form-specific plugins
	});
	</script>

	{{HTML::script('assets/admin/assets/js/custom.js')}}
</head>

<body>

	<!-- Header -->
	<header class="header navbar navbar-fixed-top" role="banner">
		<!-- Top Navigation Bar -->
		<div class="container">

			<!-- Only visible on smartphones, menu toggle -->
			<ul class="nav navbar-nav">
				<li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
			</ul>

			<!-- Logo -->
			<a class="navbar-brand" href="index.html">
				<img src="{{asset('assets/admin/assets/img/logo.png')}}" alt="logo" />
				<strong>MITRA</strong>DESAIN
			</a>
			<!-- /logo -->

			<!-- Sidebar Toggler -->
			<a href="#" class="toggle-sidebar bs-tooltip" data-placement="bottom" data-original-title="Toggle navigation">
				<i class="icon-reorder"></i>
			</a>
			<!-- /Sidebar Toggler -->

			<!-- Top Left Menu -->
			<ul class="nav navbar-nav navbar-left hidden-xs hidden-sm">
				<li>
					<a href="{{URL::to('panel/home')}}">
						Dashboard
					</a>
				</li>
			</ul>
			<!-- /Top Left Menu -->

			<!-- Top Right Menu -->
			<ul class="nav navbar-nav navbar-right">
				<!-- User Login Dropdown -->
				<li class="dropdown user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!--<img alt="" src="assets/img/avatar1_small.jpg" />-->
						<i class="icon-male"></i>
						<span class="username">Administrator</span>
						<i class="icon-caret-down small"></i>
					</a>
					<ul class="dropdown-menu">
						<li><a href="pages_user_profile.html"><i class="icon-user"></i> My Profile</a></li>
						<li><a href="pages_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
						<li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
						<li class="divider"></li>
						<li><a href="{{URL::to('panel/home/out')}}"><i class="icon-key"></i> Log Out</a></li>
					</ul>
				</li>
				<!-- /user login dropdown -->
			</ul>
			<!-- /Top Right Menu -->
		</div>
		<!-- /top navigation bar -->
	</header> <!-- /.header -->

	<div id="container">
		<div id="sidebar" class="sidebar-fixed">
			<div id="sidebar-content">
				<!-- Search Results -->
				<!--=== Navigation ===-->
				<ul id="nav">
					<li class="current">
						<a href="{{URL::to('panel/home')}}">
							<i class="icon-dashboard"></i>
							Dashboard
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-desktop"></i>
							UI Features
							<span class="label label-info pull-right">6</span>
						</a>
						<ul class="sub-menu">
							<li>
								<a href="ui_general.html">
								<i class="icon-angle-right"></i>
								General
								</a>
							</li>
							<li>
								<a href="ui_buttons.html">
								<i class="icon-angle-right"></i>
								Buttons
								</a>
							</li>
							<li>
								<a href="ui_tabs_accordions.html">
								<i class="icon-angle-right"></i>
								Tabs &amp; Accordions
								</a>
							</li>
							<li>
								<a href="ui_sliders.html">
								<i class="icon-angle-right"></i>
								Sliders
								</a>
							</li>
							<li>
								<a href="ui_nestable_list.html">
								<i class="icon-angle-right"></i>
								Nestable List
								</a>
							</li>
							<li>
								<a href="ui_typography.html">
								<i class="icon-angle-right"></i>
								Typography / Icons
								</a>
							</li>
							<li>
								<a href="ui_google_maps.html">
								<i class="icon-angle-right"></i>
								Google Maps
								</a>
							</li>
							<li>
								<a href="ui_grid.html">
								<i class="icon-angle-right"></i>
								Grid
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-edit"></i>
							Form Elements
						</a>
						<ul class="sub-menu">
							<li>
								<a href="form_components.html">
								<i class="icon-angle-right"></i>
								Form Components
								</a>
							</li>
							<li>
								<a href="form_layouts.html">
								<i class="icon-angle-right"></i>
								Form Layouts
								</a>
							</li>
							<li>
								<a href="form_validation.html">
								<i class="icon-angle-right"></i>
								Form Validation
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-table"></i>
							Tables
						</a>
						<ul class="sub-menu">
							<li>
								<a href="tables_static.html">
								<i class="icon-angle-right"></i>
								Static Tables
								</a>
							</li>
							<li>
								<a href="tables_dynamic.html">
								<i class="icon-angle-right"></i>
								Dynamic Tables (DataTables)
								</a>
							</li>
							<li>
								<a href="tables_responsive.html">
								<i class="icon-angle-right"></i>
								Responsive Tables
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="charts.html">
							<i class="icon-bar-chart"></i>
							Charts &amp; Statistics
						</a>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-folder-open-alt"></i>
							Pages
						</a>
						<ul class="sub-menu">
							<li>
								<a href="login.html">
								<i class="icon-angle-right"></i>
								Login
								</a>
							</li>
							<li>
								<a href="pages_user_profile.html">
								<i class="icon-angle-right"></i>
								User Profile
								</a>
							</li>
							<li>
								<a href="pages_calendar.html">
								<i class="icon-angle-right"></i>
								Calendar
								</a>
							</li>
							<li>
								<a href="pages_invoice.html">
								<i class="icon-angle-right"></i>
								Invoice
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);">
							<i class="icon-list-ol"></i>
							4 Level Menu
						</a>
						<ul class="sub-menu">
							<li class="open-default">
								<a href="javascript:void(0);">
									<i class="icon-cogs"></i>
									Item 1
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="open-default">
										<a href="javascript:void(0);">
											<i class="icon-user"></i>
											Sample Link 1
											<span class="arrow"></span>
										</a>
										<ul class="sub-menu">
											<li class="current"><a href="javascript:void(0);"><i class="icon-remove"></i> Sample Link 1</a></li>
											<li><a href="javascript:void(0);"><i class="icon-pencil"></i> Sample Link 1</a></li>
											<li><a href="javascript:void(0);"><i class="icon-edit"></i> Sample Link 1</a></li>
										</ul>
									</li>
									<li><a href="javascript:void(0);"><i class="icon-user"></i>  Sample Link 1</a></li>
									<li><a href="javascript:void(0);"><i class="icon-external-link"></i>  Sample Link 2</a></li>
									<li><a href="javascript:void(0);"><i class="icon-bell"></i>  Sample Link 3</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);">
									<i class="icon-globe"></i>
									Item 2
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li><a href="javascript:void(0);"><i class="icon-user"></i>  Sample Link 1</a></li>
									<li><a href="javascript:void(0);"><i class="icon-external-link"></i>  Sample Link 1</a></li>
									<li><a href="javascript:void(0);"><i class="icon-bell"></i>  Sample Link 1</a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);">
									<i class="icon-folder-open"></i>
									Item 3
								</a>
							</li>
						</ul>
					</li>
				</ul>
				

				<div class="sidebar-widget align-center">
					<div class="btn-group" data-toggle="buttons" id="theme-switcher">
						<label class="btn active">
							<input type="radio" name="theme-switcher" data-theme="bright"><i class="icon-sun"></i> Light
						</label>
						<label class="btn">
							<input type="radio" name="theme-switcher" data-theme="dark"><i class="icon-moon"></i> Dark
						</label>
					</div>
				</div>

			</div>
			<div id="divider" class="resizeable"></div>
		</div>
		 @yield('content')

	</div>

</body>
</html>