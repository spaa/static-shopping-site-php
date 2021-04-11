
$(document).ready(function(){
	var status1 = false;
	var status2 = false;
	var pass1 = $("#pass1").val();
	var pass2 = $("#pass2").val();
	var pass3 = $("#pass3").val();

	$("#save").click(function(){
		
		if (pass1 == "") {
		$("#pass1").addClass("error");
		$("#pass1").css({"border":"2px solid red"});
		}
		if (pass2 == "") {
			$("#pass2").addClass("error");
			$("#pass2").css({"border":"2px solid red"});
		}
		if (pass3 == "") {
			$("#pass3").addClass("error");
			$("#pass3").css({"border":"2px solid red"});
		}

	})

	$("#change_password").click(function(){
		if(status1==false)
		{
			$("#Change_password").css({"display":"block"});
			status1 = true;
		}
		else
		{
			$("#Change_password").css({"display":"none"});
			status1 = false;
		}
		if(pass3 == "") {
			$("#pass3").addClass("error");
			$("#pass3").css({"border":"2px solid red"});
		}
		if (pass1 == "") {
		$("#pass1").addClass("error");
		$("#pass1").css({"border":"2px solid red"});
		}
		if (pass2 == "") {
			$("#pass2").addClass("error");
			$("#pass2").css({"border":"2px solid red"});
		}
	})
	
	$("#change_username").click(function(){
		if (status2==false) 
		{
			$("#username1").css({"display":"none"});
			$("#username2").css({"display":"block"});
			$("#user_password").css({"display":"block"});
			status2 = true;
		}
		else
		{
			$("#username1").css({"display":"block"});
			$("#username2").css({"display":"none"});
			$("#user_password").css({"display":"none"});
			status2 = false;
		}
	})
})