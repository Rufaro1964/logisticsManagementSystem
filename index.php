<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistics Management System</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="CssFiles" href="../CssFiles/main.css">

</head>
<body>
    <div class="container">
          <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error">Incorrect username/password combination.</div>
            <div class="form_input-group">
                <input type="text" class="form__input" autofocus placeholder="Username or email">
                <div class="form__input-error-message">This is an error message</div>
            </div>
            <div class="form_input-group">
                <input type="password" class="form__input" autofocus placeholder="password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Don't have an account?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
          </form>

    </div>
    <script src="./src/main.js"></script>
</body>
</html>