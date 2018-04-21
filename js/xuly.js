$(document).on('click','#btn-login-user', function(){
	var email = $('#inputEmail').val();
	var password = $('#inputPassword').val();
	$('#error_login').text('');
	$("#error_email_login").text("");
	$("#error_password_login").text("");
	email = $.trim(email);
	password = $.trim(password);

	if(email.length >0 && password.length>0){
		$.ajax({
			url:'modules/xuly/process_login.php',
			method: 'POST',
			data:{email: email,password: password},
			cache: false,
			beforeSend:function(){
				$('#btn-login-user').text('Đang xử lý..');
			},
			success:function(data){
				if(data){
					alert("Đăng nhập thành công! "+data);
					$('#btn-login-user').text('Đăng nhập');
					window.location='index.php';
				}else{
					$('#error_login').text('Đăng nhập lỗi').css('color','red');
					return false;
				}
			}
		});

	}else{
		if(email ==""){
			$("#error_email_login").text("Email bị lỗi").css("color","red");

		}
		if(password ==""){
			$("#error_password_login").text("Mật khẩu bị lỗi").css("color","red");
		}
		return false;
	}

});