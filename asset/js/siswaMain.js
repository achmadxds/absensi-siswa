$(document).ready(function() {
	$("#submitabsen").click(function() {
		SubmitAbsen();
	});
});

function HideSubmit() {
	$('#submitshow').css("display", "none");
	$('#sudahabsen').css("display", "block");
}

function SubmitAbsen() {
	$.ajax({
		type : "POST",
		data : {task : "absensubmit"},
		success: function(data){
			if(data){
				HideSubmit();
				var showSubmit = $("#shyt");
				showSubmit.append(`<h5> SUDAH ABSEN </h5>`);
			}
		}
	});
}