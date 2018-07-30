<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header("location: http://checkmate.kippenc.org/dismissal2/login.php");
  exit;
}
?>
<!-- Links in the header/footer need absolute paths -->
<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="http://checkmate.kippenc.org/dismissal2/js/jquerydataTables.js"></script>
	<script type="text/javascript" src="http://checkmate.kippenc.org/dismissal2/js/header.js"></script>
	<script type="text/javascript" src="http://checkmate.kippenc.org/dismissal2/js/dropit.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="http://checkmate.kippenc.org/dismissal2/css/bootstrap.min.css">
	
	
	<link rel="stylesheet" type="text/css" href="http://checkmate.kippenc.org/dismissal2/css/main.css">
	<link rel="stylesheet" type="text/css" href="http://checkmate.kippenc.org/dismissal2/css/header.css">
	
</head>
<body>	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="http://checkmate.kippenc.org/dismissal2/home.php">
				Bus Dismissal System
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="dropdown nav-item">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Reports <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/studentView.php">Student Report</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/dayTeacherView.php">Individual Teacher Report</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/allTeacherView.php">Collective Teacher Report</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/gradeView.php">Grade Report</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/dayBusView.php">Bus Report</a></li>
						</ul>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Assignments<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/editAssignments.php">Edit Assignments</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/controllers/Assignment/add.php">Add Assignments</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/controllers/Assignment/delete.php">Delete Assignments</a></li>
						</ul>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Overrides<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/addOverride.php">Add Overrides</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/controllers/Override/delete.php">Delete Overrides</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/showOverrides.php">See all Overrides</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/editData.php">Edit Core Data</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/importView.php">Import Core Data</a></li>
							<li><a class="dropdown-item" href="http://checkmate.kippenc.org/dismissal2/reports/clearDatabases.php">Wipe Databases</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="#main">Back to Top</a></li>
					<li class="nav-item">
						<a class="nav-link" href="http://checkmate.kippenc.org/dismissal2/logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="main" class="container">