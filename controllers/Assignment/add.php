<?php include("../../templates/header.php"); include("../../templates/db_connect.php"); ?>
<html>
<head>
	<title>Add Assignments</title>
</head>
<body>
	<div id="status">
		<?php
			if($_POST["studentID"]) {
			
				foreach($_POST['dayIDs'] as $day) {
				
					$query = "INSERT INTO Assignment(dayID, studentID, busID) VALUES('" . $day . "', '$_POST[studentID]', '$_POST[busID]')";
					
					if (!mysqli_query($conn, $query)) {
						echo ("Error: ".mysqli_error ());
					} else {
						echo("Database updated successfully!<br />");
					}
				}
			}
		?>
	</div>
	<div id="top">
		<h2>Add Assignments</h2>
		<p>If a student is missing any assignments in their schedule, add them here.</p>
		<p class="text-danger">WARNING: Be careful about adding duplicate assignments!</p>
		<form name="input" action="add.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="dayIDs[]" class="col-sm-2 control-label">Day:</label> 
				<div class="col-sm-10">
					<?php include("../Day/radios.php"); ?>
				</div>
			</div>
			<div class="form-group">
				<label for="studentID" class="col-sm-2 control-label">Student:</label> 
				<div class="col-sm-10">
					<select id="studentID" name="studentID" class="form-control">
						<?php include("../Student/options.php"); ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="busID" class="col-sm-2 control-label">Bus:</label>
				<div class="col-sm-10">
					<select id="busID" name="busID" class="form-control">
						<?php include("../Bus/options.php"); ?>
					</select>
				</div>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Save New Changes</button>
				</div>
			</div>
		</form>
		<!--
		<form name="input" action="add.php" method="post">
			<table>
				<tr>
					<td>Day:</td> 
					<td><?php include("../Day/radios.php"); ?></td>
				</tr>
				<tr>
					<td>Student:</td>
					<td><select name="studentID"><?php include("../Student/options.php"); ?></select></td>
				<tr>
					<td>Bus:</td> 
					<td><select name="busID"><?php include("../Bus/options.php"); ?></select></td>
				</tr>
			</table>
			<input type="submit" value="Submit" />
		</form> -->
	</div>
</body>
</html>
<?php include("../../templates/footer.php"); ?>