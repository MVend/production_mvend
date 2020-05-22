


function displaydateview(){
	alert("");

	var select= document.getElementById('dateselection');
	select.css({"display":"block"});

  // $("#dateselection").css({"display":"block"});
  // $("#dateselect").text("ok");
}

$(document).ready(function(){

	$("#clickdate").click(function(event){
		event.preventDefault();
		alert("hello test ");
		$("#dateselection").css({"display":"block"});
		$("#dateselect").text("Ok");
	});
});