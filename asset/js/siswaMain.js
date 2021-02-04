$(document).ready(function() {
	$("#submitabsen").click(function() {
		SubmitAbsen();
	});
});

function SubmitAbsen() {
	$.ajax({
		type : "POST",
		data : {task : "absensubmit"},
		success: function(data){
			if(data){
				alert("Tersubmit");
			}
		}
	});
}