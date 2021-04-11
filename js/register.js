$(document).ready(function(){
		var status=false;
		

		if(status==false)
		{   $("#on").animate({opacity:".0"});
			$("#form_before_launch").animate({height:"500px",width:"300px"});
		    $("#form_before_launch").children("p").animate({fontSize:"25px",opacity:"0.5"});
		    
		    $("#form").delay(300).fadeIn();
		    
		    $("#img").delay(300).fadeIn();
		    $("#on").animate({opacity:"1"});
		    status =true;
		}
	

		$("#submit").click(function(){
		 
		 var f_name = $('#firstname').val();
		 var l_name = $('#lastname').val();
		 var u_name = $("#username").val();
		 var pass = $("#password").val();
		 var c_pass = $("#confirm-password").val();
		 var dob = $('#dob').val();
		 var address = $('#address').val();
		 var mobile = $('#mobile').val();
		 var email = $('#email').val();
         var j=0;
		 

		  if(f_name=="")
		  {
		  	$("#firstname").addClass("error");
		  	$("#firstname").css({"border":"2px solid red"});
		  }

		  if(l_name=="")
		  {
		  	$("#lastname").addClass("error");
		  	$("#lastname").css({"border":"2px solid red"});
		  }
		  
		  if(u_name=="")
		  {
		  	$("#username").addClass("error");
		  	$("#username").css({"border":"2px solid red"});
		  }

          if(pass=="")
		  {
		  	$("#password").addClass("error");
		  	$("#password").css({"border":"2px solid red"});		  	
		  }

		  if(c_pass=="")
		  {
		  	$("#confirm-password").addClass("error");
		  	$("#confirm-password").css({"border":"2px solid red"});		  	
		  }

		  if(dob=="")
		  {
		  	$("#dob").addClass("error");
		  	$("#dob").css({"border":"2px solid red"});		  	
		  }

		  if(address=="")
		  {
		  	$("#address").addClass("error");
		  	$("#address").css({"border":"2px solid red"});		  	
		  }

		  if(mobile=="")
		  {
		  	$("#mobile").addClass("error");
		  	$("#mobile").css({"border":"2px solid red"});		  	
		  }

		  if(email=="")
		  {
		  	$("#email").addClass("error");
		  	$("#email").css({"border":"2px solid red"});		  	
		  }

          if(u_name==""||pass=="")
          {
          	$(".error-msg").delay(200).fadeIn();
		  	$(".error-msg").css({"color":"red"});
		  	$(".error-msg").css({"font-size":"20px"});
		  	$(".error-msg").delay(600).fadeOut();
          }

  
	    })

	    

	})

