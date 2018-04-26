<?php include("../templates/header.php"); ?>
<html>
<head>
	<title>Bus View by Day</title>
	<script type="text/javascript" src="../js/dayBusView.js"></script>
</head>
<body>
	<h2>Bus Report</h2>
	<p>Choose a bus and a day of the week. The usual student roster for that day will be listed below.</p>
	<form action="dayBusView.php" class="form-horizontal">
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
	</form>
	<hr>
	<div id="table"></div>
	</br>
	<div id="overrideTable"></div>
</body>
</html>
<?php include("../templates/footer.php"); ?>