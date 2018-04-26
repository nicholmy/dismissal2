<?php include("../templates/header.php"); ?>
<html>
<head>
	<title>Student View</title>
	<script type="text/javascript" src="../js/studentView.js"></script>
</head>
<body>
	<h2>Student Report</h2>
	<p>Choose a student. Their weekly schedule and overrides will be listed below.</p>
	<form action="studentView.php" class="form-horizontal">
		<div class="form-group">
			<label for="studentID" class="col-sm-2 control-label">Student:</label> 
			<div class="col-sm-10">
				<select id="studentID" name="studentID" class="form-control">
					<?php include("../controllers/Student/options.php"); ?>
				</select>
			</div>
		</div>
	</form>
	<hr>
	<!-- <form action="studentView.php">
		Student: <select id="studentID" name="studentID">
			<?php include("../controllers/Student/options.php"); ?>
		</select>
	</form> -->
	<div id="table"></div>
	<div id="overrideTable"></div>
</body>
</html>
<?php include("../templates/footer.php"); ?>