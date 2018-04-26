<?php include("../templates/header.php"); ?>
<html>
<head>
	<title>Edit Assignments</title>
	<script type="text/javascript" src="../js/editAssignments.js"></script>
</head>
<body>
	<h2>Edit Bus Assignments</h2>
	<p>Choose a bus assignment below. The assignment's information will be filled in the appropriate dropdowns. After making edits, click "Save New Changes" to save your changes.
	<form action="../controllers/Assignment/edit.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="assignmentID" class="col-sm-2 control-label">Assignment:</label> 
			<div class="col-sm-10">
				<select id="assignmentID" name="assignmentID" class="form-control">
					<?php include("../controllers/Assignment/options.php"); ?>
				</select>
			</div>
		</div>
		<hr>
		<div class="form-group">
			<label for="studentID" class="col-sm-2 control-label">Student:</label> 
			<div class="col-sm-10">
				<select id="studentID" name="studentID" class="form-control">
					<?php include("../controllers/Student/options.php"); ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="dayID" class="col-sm-2 control-label">Day:</label> 
			<div class="col-sm-10">
				<select id="dayID" name="dayID" class="form-control">
					<?php include("../controllers/Day/options.php"); ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="busID" class="col-sm-2 control-label">Bus:</label>
			<div class="col-sm-10">
				<select id="busID" name="busID" class="form-control">
					<?php include("../controllers/Bus/options.php"); ?>
				</select>
			</div>
		</div>
		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
				  <div class="checkbox">
						<label><input type="checkbox" name="applyAll" value="1">Apply the student's bus change to every weekday</label>
				  </div>
			</div>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save New Changes</button>
			</div>
		</div>
	</form>
	<div id="table"></div>
</body>
</html>
<?php include("../templates/footer.php"); ?>