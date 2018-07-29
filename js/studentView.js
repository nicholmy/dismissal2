$(document).ready(function(){
	currentStudent = $("#studentID").val()
	overrideFlag = 1;
	
	$("#studentID").change(function() {
		updateVals();
		grabTable();
		grabOverride(overrideFlag);
	});	
	
	$("#seeAll").change(function() {
		//Toggle the override with MATH!
		overrideFlag = (overrideFlag + 1 ) % 2
		if (currentStudent) {
			grabOverride(overrideFlag);
		}
	});
});

function updateVals() {
	currentStudent = $("#studentID").val()
}

function grabTable() {
	$.ajax({
		url : "../controllers/Assignment/byStudent.php",
		data : {
			studentID : currentStudent
		},
		success : function(response) {
			$("#table").html(response)
		}
	});
}

function grabOverride(flag) {
	$.ajax({
		url : "../controllers/Override/byStudent.php",
		data : {
			studentID : currentStudent,
			limitFlag : flag
		},
		success : function(response) {
			$("#overrideTable").html(response)
		}
	});
}