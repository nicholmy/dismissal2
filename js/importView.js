$(document).ready(function() {
	$.ajax({
		url : "../controllers/Teacher/list.php",
		success : function(response) {
			$("#teacherTable").html(response);
		}
	});
	
	$('#teacherToggle').click(function() {
		$('#teacherTable').toggle();
	});
	
	$.ajax({
		url : "../controllers/Bus/list.php",
		success : function(response) {
			$("#busTable").html(response);
		}
	});
	
	$('#studentToggle').click(function() {
		$('#studentTable').toggle();
	});
	
	$.ajax({
		url : "../controllers/Student/list.php",
		success : function(response) {
			$("#studentTable").html(response);
		}
	});
	
	$('#busToggle').click(function() {
		$('#busTable').toggle();
	});
	
	
	$('#statusToggle').click(function() {
		$('#Status').toggle();
	});
});