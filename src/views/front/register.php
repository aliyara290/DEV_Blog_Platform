<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/front/style.css" />
    <title>Sign in</title>
</head>
<body>
<?php include "../../includes/header.php" ?>
    <section class="form__section">
    <div class="form__content">
        <div class="section__heading">
            <h1>
                Sign up
            </h1>
        </div>
        <form class="log__form" action="signup.php">
            <div class="inp__frm">
                <label for="signup_email">Email</label>
                <input type="email" name="signup_email" id="signup_email" class="" placeholder="email" required="">
            </div>
            <div class="inp__frm">
                <label for="signup_username">Username</label>
                <input type="text" name="signup_username" id="signup_username" class="" placeholder="username" required="">
            </div>
            <div class="inp__frm">
                <label for="signup_password" class="">Password</label>
                <input type="password" name="signup_password" id="signup_password" placeholder="password" class="" required="">
            </div>
            <div class="inp__frm">
                <label for="signup_confirm_password" class="">Confirm password</label>
                <input type="password" name="signup_confirm_password" id="signup_confirm_password" placeholder="confirm password" class="" required="">
            </div>
            <div class="sit__prg">
                    <p>
                        Alredy have an account? <a href="./login.php" class="">Log in</a>
                    </p>
                  </div>
            <div class="submit__btn">
                <button type="submit" class="">Sign up</button>
            </div>

        </form>
    </div>
</section>

<script src="../../../assets/js/main.js"></script>
</body>
</html>