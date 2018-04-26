<?php include("../../templates/header.php"); include("../../templates/db_connect.php"); ?>
<html>
<head>
	<title>Delete Assignments</title>
</head>
<body>
	<div id="status">
		<?php
			
			if($_POST["assignmentID"]) {
				$query = "DELETE FROM Assignment WHERE id = '$_POST[assignmentID]'";
				 
				if (!mysqli_query($conn, $query)) {
					echo ("Error: ".mysqli_error () . "<br />Query: " . $query);
				} else {
					echo("Assignment deleted successfully!");
				}
			}
		?>
	</div>
	<div id="top">
		<h2>Delete Assignments</h2>
		<p>Pick an assignment to delete below.</p>
		<p class="text-danger">WARNING: Deleted assignments aren't coming back!</p>
		<form name="input" action="delete.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="assignmentID" class="col-sm-2 control-label">Assignment:</label> 
				<div class="col-sm-10">
					<select id="assignmentID" name="assignmentID" class="form-control">
						<?php include("options.php"); ?>
					</select>
				</div>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Delete</button>
				</div>
			</div>
		</form>
		<!-- <form action="delete.php" method="post">
			<table>
				<tr>
					<td>Assignment:</td>
					<td>
						<select id="assignmentID" name="assignmentID">
							<?php include("options.php"); ?>
						</select>
					</td>
				</tr>
			</table>
			<input type="submit" value="Delete">
		</form> -->
	</div>
</body>
</html>
<?php include("../../templates/footer.php"); ?>