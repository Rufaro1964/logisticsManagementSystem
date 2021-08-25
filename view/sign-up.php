<?php

    require('../controller/signUpController.php');
    
    $signUpController = new SignUpController();

    
    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
        
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo $signUpController->signUp($username, $email, $password);
        exit;
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <form action="" method="POST" class="form" id="createAccount">
            <h1 class="form__title">Create Account</h1>

            <div class="form-control text-center text-danger" id="errorMessage">
                <p></p>
            </div><br>

            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username" name="username" required>
            </div>

            <div class="form__input-group">
                <input type="text" id="signupEmail" class="form__input" autofocus placeholder="Email Address" name="email" required>
            </div>

            <div class="form__input-group">
                <input type="password" id="signupPassword" class="form__input" autofocus placeholder="Password" name="password" required>
            </div>

            <div class="form__input-group">
                <input type="password" id="signupConfirmPassword" class="form__input" autofocus placeholder="Confirm Password" name="confirm_password" required>
            </div>
            <button class="form__button" id="signupSubmit" type="submit" name="submit">Continue</button><br>
            <p class="form__text">
                <a class="form__link" href="sign-in.php" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>


    <script src="../assets/javascript/main.js"></script>

</body>

</html>