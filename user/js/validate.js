function checkPass(){
    var elemFeedback = document.getElementById('feedback');
    var elemFeedback2 = document.getElementById('feedback2');
    var password = elemPass.value;
    //alert(password);

    var regExpPass = /^(\w{5,})([#@-]{1})$/;
    //var regExpEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w (2,3))*$/;
    //alert(check + ' : password: ' +  password);

    if (regExpPass.test(password)){
        elemFeedback.style.display = 'block';
        elemFeedback.style.height = 20;
        elemFeedback.style.width = 250;
        elemFeedback.style.color = "white";
        elemFeedback.style.backgroundColor = "green";
        elemFeedback.innerHTML = "strong password";
        return true;
    }
    else{
        elemFeedback.style.display = 'block';
        elemFeedback.style.height = 20;
        elemFeedback.style.width = 250;
        elemFeedback.style.color = "white";
        elemFeedback.style.backgroundColor = "red";
        elemFeedback.innerHTML = "weak password";
        return false;
    }

}
function checkMatch(){
    var elemFeedback2 = document.getElementById('feedback2');
    var password1 = elemPass.value;
    var password2 = elemPass2.value;
    if (password1 != password2) {
        elemFeedback2.style.display = 'block';
        elemFeedback2.style.height = 20;
        elemFeedback2.style.width = 250;
        elemFeedback2.style.color = "white";
        elemFeedback2.style.backgroundColor = "red";
        elemFeedback2.innerHTML = "password does not match";
        return false;
    }
    else{
        elemFeedback2.style.display = 'block';
        elemFeedback2.style.height = 20;
        elemFeedback2.style.width = 250;
        elemFeedback2.style.color = "white";
        elemFeedback2.style.backgroundColor = "green";
        elemFeedback2.innerHTML = "okay";
        return true;
    }
}


//
var elemPass = document.getElementById('usr_pswrd2');
var elemPass2 = document.getElementById('usr_pswrd3');
//
elemPass.addEventListener('keyup', checkPass);
elemPass2.addEventListener('keyup', checkMatch);
//
//
document.getElementById('signupForm').addEventListener('submit', function(event){
    var check1 = checkPass();
    var check2 = checkMatch();
    //alert(check1 +"" +check2);
    if (check1 && check2) {
        this.submit();
    }
    else{
        event.preventDefault();
        if(!check1){
            alert('enter a strong password');
        }
        if(!check2){
            alert('ensure both passwords matches');
        }
    }

});
 