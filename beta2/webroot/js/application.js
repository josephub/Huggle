validateForm = function(formData, jqForm, options){
	var form = jqForm[0], newPwd, confirmPwd, msg='';
	newPwd = form.UserNewPassword.value;
	confirmPwd = form.UserConfirmPassword.value;
	$flash = jqForm.find('#flashMessage');
	result = true;

	if ($flash.length === 0){
		$flash = $("<div/>", {id: 'flashMessage', 'class': 'message'});
		jqForm.find('span').append($flash);
	} 

	if(newPwd !== confirmPwd){
		msg = "New password does not match.";
	        result = false;
	}else{
		result = true;
	}

	if(!newPwd || !confirmPwd){
		msg = "New password must not be blank";
	        result = false;
	}
	
	$flash.html(msg);
	return result;
};


$(document).ready(function(){
  App = {
    SideBar: {},
    Rightx: {}
  };
  
  App.Rightx = new Rightx({el: $('#rightx')});
  App.SideBar = new Sidebar({el: $('#sidebar')});



  
  $('#UserEditPasswordForm').ajaxForm({beforeSubmit: validateForm});
});

