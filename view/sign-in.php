<?php
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../assets/css/main.css">

    <title>LMS | sign in</title>



</head>

<body>

    <div class="container">

        <form class="form" id="signIn">
            <h1 class="form__title">Sign In</h1>

            <div class="form__input-group">
                <input type="text" id="loginUsername" class="form__input" autofocus placeholder="Username" name="username" required>
            </div><br>

            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password" name="password" required>
            </div>
            <button class="form__button" type="submit">Log in</button>

            <p class="form__text">
                <a class="form__link" href="sign-up.html" id="">Click here to sign Up</a>
            </p>

        </form>

    </div>


    <!-- Rufaro note: Javascript CDN includes start here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>