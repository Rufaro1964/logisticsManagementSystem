<?php

    require('../controller/signUpController.php');
    
    $signUpController = new SignUpController();

    if(isset($_POST['submit'])){
        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
            
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            echo $signUpController->signUp($username, $email, $password, $confirm_password);
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <form action="" method="POST" class="form" id="createAccount">
            <h1 class="form__title">Create Account</h1>

            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="username" required>
            </div>

            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address" name="email" required>
            </div>

            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="password" required>
            </div>

            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm Password" name="confirm_password" required>
            </div>
            <button class="form__button" type="submit" name="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="sign-in.html" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>


    

</body>

</html>