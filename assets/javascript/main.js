// var ready = (callback) => {
//     if (document.readyState != "loading") callback();
//     else document.addEventListener("DOMContentLoaded", callback);
// }
// ready(() => {
//     document.querySelector(".header").style.height = window.innerHeight + "px";
// })

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
            divMessage.text('The passwords do not match');
            divMessage.show();
            
            setTimeout(() => {
                divMessage.hide();
            }, 5000);
                
        }else{

            $.ajax({
                type:"POST",
                url:"sign-up.php",
                data:{
                    email: email.val(),
                    username: username.val(),
                    password: signupPassword.val(),
                    confirmPassword: signupConfirmPassword.val()
                }, 
                success:function(data){
                    alert("User has been successfully registered. You will now be redirected to the Login page");
                    window.location="sign-in.php";
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
    
});