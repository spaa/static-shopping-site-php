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
		 
		 var u_name = $("#username").val();
		 var pass = $("#password").val();
		 
		  
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
		  
          if(u_name==""||pass=="")
          {
          	$(".error-msg").delay(200).fadeIn();
		  	$(".error-msg").css({"color":"red"});
		  	$(".error-msg").css({"font-size":"20px"});
		  	$(".error-msg").delay(600).fadeOut();
          }
		   
	    })

	   

	})
