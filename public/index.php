<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPG Project Online</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../src/library/SASS/main.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
    <div class="root">
        <?php
            require_once("../src/library/PHP/Page_elements/header.php");
        ?>

        <div class="wrapper">
            <div class="container">
                <div class="content">

                    <div class="content__wrapper">
                        <button class="content__wrapper__btn" data-typeofbutton="login">Login</button>
                        <button class="content__wrapper__btn" data-typeofbutton="registry">Registry</button>
                    </div>

                    <!-- Login form -->
                    <form action="" class="content__form active" data-typeofform="login">
                        <label for="nick" class="content__form__label">Nick</label>
                        <input type="text" id="nick" class="content__form__input">

                        <label for="password" class="content__form__label">Password</label>
                        <input type="password" id="password" class="content__form__input">

                        <input type="submit" value="Sign up" class="content__form__submit">
                    </form>

                    <!-- Register form -->
                    <form action="" class="content__form" data-typeofform="register">
                        <label for="nick" class="content__form__label">Nick</label>
                        <input type="text" id="nick" class="content__form__input">

                        <label for="password" class="content__form__label">Password</label>
                        <input type="password" id="password" class="content__form__input">

                        <label for="password2" class="content__form__label">Repeat password</label>
                        <input type="password" id="password2" class="content__form__input">

                        <label for="email" class="content__form__label">Email</label>
                        <input type="email" id="email" class="content__form__input">

                        <input type="submit" value="Sign up" class="content__form__submit">
                    </form>

                </div>
            </div>
        </div>

        <?php
            require_once("../src/library/PHP/Page_elements/footer.php");
        ?>
    </div>

    <script src="../src/library/JavaScript/formswapper.js"></script>

</body>

</html>