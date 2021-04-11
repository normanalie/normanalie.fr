function validateFormSignUp(form, name, surname, pseudo, pwd, pwdConf){
    var name = document.forms[form][name].value;
    var surname = document.forms[form][surname].value;
    var pseudo = document.forms[form][pseudo].value;
    var pwd = document.forms[form][pwd].value;
    var pwdConf = document.forms[form][pwdConf].value; //C pa bô

    if(pwd != pwdConf){
        alert("Les mots de passe doivent correspondre");
        return false;
    }
}