<?php include("../templates/header.php"); ?>
<html>
<head>
	<title>Individual Teacher Report</title>
	<script type="text/javascript" src="../js/dayTeacherView.js"></script>
</head>
<body>
	<h2>Individual Teacher Report</h2>
	<p>Choose a teacher. Their student roster for today will be listed below.</p>
	<form action="dayTeacherView.php" class="form-horizontal">
		<!--Day: <select id="dayID" name="dayID">
			<?php include("../controllers/Day/options.php"); ?>
		</select> <br /> -->
		<div class="form-group">
			<label for="teacherID" class="col-sm-2 control-label">Teacher:</label> 
			<div class="col-sm-10">
				<select id="teacherID" name="teacherID" class="form-control">
					<?php include("../controllers/Teacher/options.php"); ?>
				</select>
			</div>
		</div>
	</form>
	<hr>
	<div id="table"></div>
	<!-- <div id="overrideTable"></div> -->
</body>
</html>
<?php include("../templates/footer.php"); ?>