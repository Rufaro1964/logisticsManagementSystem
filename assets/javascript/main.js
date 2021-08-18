var ready = (callback) => {
    if (document.readyState != "loading") callback();
    else document.addEventListener("DOMContentLoaded", callback);
}
ready(() => {
    document.querySelector(".header").style.height = window.innerHeight + "px";
})

$(document).ready(function(){

   const divMessage = $('#errorMessage');
   const signupPassword = $('#signupPassword');
   const signupConfirmPassword = $('#signupConfirmPassword');
   const email = $('#signupEmail');
   const username = $('#signupUsername');


    divMessage.hide();

    /**
     * WHEN THE SIGN-UP BUTTON IS CLICKED, THE METHOD ABOVE IS GOING TO RUN
     *
     */
    $('#createAccount').submit(function(e){
       
        if(!isMatchedPassword(signupPassword.val(), signupConfirmPassword.val())){
            showResult(divMessage, "Passwords do not match.");   
        }else{
            $.ajax({
                type:"POST",
                url:"sign-up.php",
                data:{
                    email: email.val(),
                    username: username.val(),
                    password: signupPassword.val()
                }, 
                success:function(data){
                    if(data != "Successfully registered"){
                        showResult(divMessage, data);
                    }else{
                        alert(data+". You will now be redirected to the sign in page");
                        window.location="sign-in.php";
                    }
                }
            })

        }
        e.preventDefault();
    }); 







    /**
     * 
     * @param {*} password 
     * @param {*} confirmPassword 
     */
    function isMatchedPassword(password, confirmPassword){
        if(password === confirmPassword){
            return true;
        }
        return false;
    }



    /**
     * 
     * @param {*} element 
     * @param {*} message 
     */
    function showResult(element, message){
        element.text(message);
            element.show();
            
            setTimeout(() => {
                element.hide();
            }, 5000);
    }
    
});