function check_input() {
    if (!document.register_form.id.value) {
        alert("아이디를 입력하세요!");
        document.register_form.id.focus();
        
        return;
    }

    if (!document.register_form.pass.value) {
        alert("비밀번호를 입력하세요!");
        document.register_form.pass.focus();
        return;
    }

    if (!document.register_form.pass_confirm.value) {
        alert("비밀번호확인을 입력하세요!");
        document.register_form.pass_confirm.focus();
        return;
    }

    if (!document.register_form.artist_or_fan.value) {
        alert("아티스트인지 팬인지 선택하세요");
        document.register_form.artist_or_fan.focus();
        return;
    }

    if (!document.register_form.nickname.value) {
        alert("닉네임을 입력하세요!");
        document.register_form.nickname.focus();
        return;
    }

    if (document.register_form.pass.value !=
        document.register_form.pass_confirm.value) {
        alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
        document.register_form.pass.focus();
        document.register_form.pass.select();
        return;
    }

    document.register_form.submit();
}   // end of check_input

function reset_form() {
    document.register_form.id.value = "";
    document.register_form.pass.value = "";
    document.register_form.pass_confirm.value = "";
    document.register_form.nickname.value = "";
    document.register_form.id.focus();
    return;
}
// function is_duplication_Id(){
//     if(!document.register_form.id.value){
//         alert("아이디를 먼저 입력해주세요.");
//         document.register_form.id.focus();
//         return;
//     }
//     // document.getElementsByName('check_id').submit();
//     document.check_id_form.submit();
// }

function check_id() {
    window.open("exists_id.php?id=" + document.register_form.id.value,
        "IDcheck",
        "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
}
