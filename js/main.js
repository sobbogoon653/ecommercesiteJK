
// Contact Form Submit
function send_massage(){
	
	var name 	= jQuery("#name").val();
	var email 	= jQuery("#email").val();
	var phone 	= jQuery("#phone").val();
	var message = jQuery("#message").val();

 if(name == ""){
	 	$("#name").css('borderBottom','solid red');
	}else{
		 $("#name").css('borderBottom','solid green');
	}
	 if(email == ""){
		 $("#email").css('borderBottom','solid red');
	}else{
		 $("#email").css('borderBottom','solid green');
	}
	 if(phone == ""){
	 	$("#phone").css('borderBottom','solid red');
	}else{
		 $("#phone").css('borderBottom','solid green');
	}
	 if(message == ""){
	 	$("#message").css('borderBottom','solid red');
	}
	if(name && email && phone && message){
		jQuery.ajax({
			url : '../info_send.php',
			type: 'post',
			data: 'name='+name+'&email='+email+'&phone='+phone+'&message='+message,
			success:function(result){
				alert(result);
			}
		})
	}
}


