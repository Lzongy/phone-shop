function check_info(form){
if(form.password2.value==""){
	alert("请再次确认密码");
	form.password2.focus();
	return false;
}
if(form.password2.value !==form.password1.value){
	alert("两次密码输入不一致，请重新检查！");
	form.password2.focus();
	return false;
}
}