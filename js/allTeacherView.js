$(document).ready(function(){
	//currentTeacher = $("#teacherID").val()
	//currentDay = $("#dayID").val()
	
	//updateVals();
	//grabTable();
	//grabOverride();
	
	
	
	$("#date").datepicker({ dateFormat: "yy-mm-dd" });
	$("#date").change(function() {
		grabTable($(this).val());
	});
});

/*$( document ).ajaxStart(function() {
  $("#table").html("Loading...")
}); */

/*function updateVals() {
	//currentTeacher = $("#teacherID").val()
	currentDay = $("#dayID").val()
}*/

function grabTable(getdate) {
	$("#table").html("Loading...")
	$.ajax({
		url : "../controllers/Assignment/withOverridesAllTeachers.php",
		data : {
			teacherID : 0,
			date : getdate 
		},
		success : function(response) {
			$("#table").html(response)
		}
	});
}

/*
function grabOverride() {
	$.ajax({
		url : "../controllers/Override/byTeacher.php",
		data : {
			teacherID : currentTeacher
		},
		success : function(response) {
			$("#overrideTable").html(response)
		}
	});
}*/