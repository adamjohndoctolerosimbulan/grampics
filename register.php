<?php
require_once "core/init.php";
require_once "shared/register_handlers.php";
require "shared/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Grampics</title>
    <link rel="shortcut icon" href="public/favicon/grampicslogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/register.css">
</head>

<body>
    <section class=pageContainer>
        <main class=row>
            <div class=col-1>
                <div class=heroimg></div>
            </div>
            <article class=col-2>
                <?php
                if (!empty($form_errors)) {
                    echo show_errors($form_errors);
                }
                ?>
                <form action="<?= h($_SERVER["PHP_SELF"]); ?>" method="POST" class="form">
                    <div class=siteLogoContainer>
                        <img src="public/logo/grampics.png" alt="Grampics Logo">
                    </div>
                    <input type="email" placeholder="Email" class="form--input" name="email" autocomplete="off" value="<?= escape(Input::get('email')); ?>">
                    <input type="text" placeholder="Full Name" class="form--input" name="full_name" autocomplete="off" value="<?= escape(Input::get('full_name')); ?>">
                    <input type="text" placeholder="Username" class="form--input" name="username" autocomplete="off" value="<?= escape(Input::get('username')); ?>">
                    <div class="passwordContainer">
                        <input type="password" placeholder="Password" class="form--input" name="password" id="password" autocomplete="new-password">
                        <span class="show_hide_text cursor-pointer" id="show_hide_password">Show</span>
                    </div>
                    <button class="button cursor-pointer" type="submit" name="submitButton">Register</button>
                    <span class="separator">Or</span>
                    <span style="font-size: 15px;">By signing up, you agree to our Terms , Privacy Policy and Cookies Policy.</span>
                </form>
                <footer class="form--footer">
                    Have an account? <a href="login">Sign in</a>
                </footer>
            </article>
        </main>
    </section>
    <script src="public/js/common.js"></script>
</body>

</html>