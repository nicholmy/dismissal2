<?php include($_SERVER['DOCUMENT_ROOT'] . "/dismissal2/templates/db_connect.php"); ?>

<?php

	$query = "SELECT * FROM Bus ORDER BY name";
	
	$rs = mysqli_query($conn, $query);
	
	echo("<option value=''></option>");
	while($row = mysqli_fetch_array($rs)) {
		echo("<option value='" . $row["busID"] . "'>");
		if ($row["busID"] != -1 && $row["busID"] != -2) {
			echo($row["name"] . " - " . $row["busID"] . " - " . $row["driverName"]);
		} else {
			echo($row["name"]);
		}
		echo("</option>");
	}
?>