function check_login(){
    if(!document.login_form.id.value){
        alert('아이디를 입력하시오.');
        document.login_form.id.focus();
        return;
    }

    if(!document.login_form.pass.value){
        alert('비밀번호를 입력하시오.');
        document.login_form.pass.focus();
        return;
    }
    document.login_form.submit();
}