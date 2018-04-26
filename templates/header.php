<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: http://www.mylesnicholson.com/dismissal2/login.php");
  exit;
}
?>
<!-- Links in the header/footer need absolute paths -->
<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="http://www.mylesnicholson.com/dismissal2/js/jquerydataTables.js"></script>
	<script type="text/javascript" src="http://www.mylesnicholson.com/dismissal2/js/header.js"></script>
	<script type="text/javascript" src="http://www.mylesnicholson.com/dismissal2/js/dropit.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="http://www.mylesnicholson.com/dismissal2/css/bootstrap.min.css">
	
	
	<link rel="stylesheet" type="text/css" href="http://www.mylesnicholson.com/dismissal2/css/main.css">
	<link rel="stylesheet" type="text/css" href="http://www.mylesnicholson.com/dismissal2/css/header.css">
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://www.mylesnicholson.com/dismissal2/home.php">
					Bus Dismissal System
				</a>
			</div>
			<div id="navbar">
				<ul class="nav navbar-nav">
					<li>
						<a href="http://www.mylesnicholson.com/dismissal2/home.php">Home</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/studentView.php">Student Report</a></li>
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/dayTeacherView.php">Individual Teacher Report</a></li>
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/allTeacherView.php">Collective Teacher Report</a></li>
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/dayBusView.php">Bus Report</a></li>
						</ul>
					</li class="dropdown">
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Assignments<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/editAssignments.php">Edit Assignments</a></li>
							<li><a href="http://www.mylesnicholson.com/dismissal2/controllers/Assignment/add.php">Add Assignments</a></li>
							<li><a href="http://www.mylesnicholson.com/dismissal2/controllers/Assignment/delete.php">Delete Assignments</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Overrides<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/addOverride.php">Add Overrides</a></li>
							<li><a href="http://www.mylesnicholson.com/dismissal2/controllers/Override/delete.php">Delete Overrides</a></li>
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/showOverrides.php">See all Overrides</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/editData.php">Edit Core Data</a></li>
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/importView.php">Import Core Data</a></li>
							<li><a href="http://www.mylesnicholson.com/dismissal2/reports/clearDatabases.php">Wipe Databases</a></li>
						</ul>
					</li>
					<li><a href="#main">Back to Top</a></li>
					<li>
						<a href="http://www.mylesnicholson.com/dismissal2/logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="main" class="container">