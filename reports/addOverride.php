<?php include("../templates/header.php"); include("../templates/db_connect.php"); ?>
<html>
<head>
	<title>Add an Override</title>
	<script type="text/javascript" src="../js/jquery-ui.multidatespicker.js"></script>
	<script type="text/javascript" src="../js/overrideView.js"></script>
</head>
<body>
	<div id="status">
		<?php
			if($_POST["date"] && $_POST["studentID"] && $_POST["busID"]) {
				$dates = explode(",", $_POST["date"]);
				$notes = mysqli_real_escape_string($conn, $_POST["notes"]);
				
				foreach($dates as $date) {
					$query = "INSERT INTO Override(date, studentID, busID, notes) VALUES('$date', '$_POST[studentID]', '$_POST[busID]', '$notes')";
						
					if (!mysqli_query($conn, $query)) {
						echo ("Error: ".mysqli_error ($conn));
					} else {
						echo("Database updated successfully!<br />");
					}
				}
			}
		?>
	</div>
	<h2>Add Overrides</h2>
	<p>Pick a date, student, bus, and any special instructions you'd like. Next, the student's weekly schedule and any relevant overrides will appear below. Finally, hit "Submit" to add your override.</p>
	<form action="addOverride.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="date" class="col-sm-2 control-label">Date:</label> 
			<div class="col-sm-10">
				<input type="text" id="date" name="date" class="form-control" placeholder="Pick a date" />
			</div>
		</div>
		<div class="form-group">
			<label for="studentID" class="col-sm-2 control-label">Student:</label> 
			<div class="col-sm-10">
				<select id="studentID" name="studentID" class="form-control">
					<?php include("../controllers/Student/options.php"); ?>
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
			<label for="notes" class="col-sm-2 control-label">Special Instructions:</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5" id="notes" name="notes"></textarea>
			</div>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
	<div id="studentTable"></div>
	<div id="overrideTable"></div>
</body>
</html>
<?php include("../templates/footer.php"); ?>