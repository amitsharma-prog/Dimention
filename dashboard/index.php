<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Dashborad - Dimension</title>
	<!-- google font -->
	<?php
		require_once 'include/header.php';
	?>
	</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<?php require_once 'include/headerMenu.php'; ?>
		<!-- start color quick setting -->
		<div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i
					class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors">
					<li>
						<p class="selector-title">Main Layouts</p>
					</li>
					<li class="complete">
						<div class="theme-color layout-theme">
							<a href="#" data-theme="light"><span class="head"></span><span class="cont"></span></a>
							<a href="http://radixtouch.in/templates/admin/smart/source/dark/index.html" data-theme="dark"><span class="head"></span><span
									class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Sidebar Color</p>
					</li>
					<li class="complete">
						<div class="theme-color sidebar-theme">
							<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Header Brand color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color logo-theme">
							<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-indigo"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Header color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color header-theme">
							<a href="#" data-theme="header-white"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-dark"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-blue"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-indigo"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-cyan"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-green"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<?php require_once 'include/sideNavbar.php'; ?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Dashboard</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="../index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-green">
									<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Students</span>
										<span class="info-box-number">450</span>
										<div class="progress">
											<div class="progress-bar" style="width: 45%"></div>
										</div>
										<span class="progress-description">
											45% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-yellow">
									<span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
									<div class="info-box-content">
										<span class="info-box-text">New Students</span>
										<span class="info-box-number">155</span>
										<div class="progress">
											<div class="progress-bar" style="width: 40%"></div>
										</div>
										<span class="progress-description">
											40% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-blue">
									<span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Total Course</span>
										<span class="info-box-number">52</span>
										<div class="progress">
											<div class="progress-bar" style="width: 85%"></div>
										</div>
										<span class="progress-description">
											85% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<div class="info-box bg-b-pink">
									<span class="info-box-icon push-bottom"><i
											class="material-icons">monetization_on</i></span>
									<div class="info-box-content">
										<span class="info-box-text">Fees Collection</span>
										<span class="info-box-number">13,921</span><span>$</span>
										<div class="progress">
											<div class="progress-bar" style="width: 50%"></div>
										</div>
										<span class="progress-description">
											50% Increase in 28 Days
										</span>
									</div>
									<!-- /.info-box-content -->
								</div>
								<!-- /.info-box -->
							</div>
							<!-- /.col -->
						</div>
					</div>
					<!-- end widget -->
							<!-- end page container -->
		<?php require_once 'include/footer.php'; ?>
</body>
</html>