<?php include("../templates/header.php"); include("../templates/db_connect.php"); ?>
<html>
<head>
	<title>Collective Teacher View</title>
	<script type="text/javascript" src="../js/allTeacherView.js"></script>
</head>
<body>
	<h2>Collective Teacher View</h2>
	<p>Choose a date. Every teacher's complete schedule for that day will be listed below.</p>
	<form action="allTeacherView.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="date" class="col-sm-2 control-label">Date:</label> 
			<div class="col-sm-10">
				<input type="text" id="date" name="date" class="form-control" placeholder="Pick a date" />
			</div>
		</div>
	</form>
	<hr>
	<div id="table"></div>
	<!-- <div id="overrideTable"></div> -->
</body>
</html>
<?php include("../templates/footer.php"); ?>