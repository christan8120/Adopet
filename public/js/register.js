function Submit(){
    var txtName = $('#txtName');
    var txtAddress = $('#txtAddress');
    var txtEmail = $('#txtEmail');
    var txtPassword = $('#txtPassword');
    var txtPassword2 = $('#txtPassword2');
    var rbFemale = $('#rbFemale');
    var rbMale = $('#rbMale');
    var cbxAgree = $('#cbxAgree');

    if(txtName.val().length < 5){
        swal("","Your name needs to be at least 5 chars!", "error");
        return false;
    }
    else if(txtPassword.val()===""){
        swal("","Your password hasn't been filled", "error");
        return false;
    }
    else if(txtPassword.val().length < 8){
        swal("","Your password needs to be at least 8 chars!", "error");
        return false;
    }
    else if(txtPassword.val()!==txtPassword2.val()){
        swal("","Your passwords don't match", "error");
        return false;
    }
    else if(txtEmail.val()===""){
        swal("","Your email hasn't been filled", "error");
        return false;
    }
    else if(txtAddress.val()===""){
        swal("","Your address hasn't been filled", "error");
        return false;
    }
    else if(!rbMale.prop('checked') && !rbFemale.prop('checked')){
        swal("","Your haven't chosen your gender!", "error");
        return false;
    }
    else if(!cbxAgree.prop('checked')){
        swal("","Your have not checked the terms and conditions", "error");
        return false;
    }
    return true;
}
