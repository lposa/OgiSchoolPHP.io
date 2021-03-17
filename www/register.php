<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <script type="text/javascript" src="loginregister.js"></script>
    <title>OgisSchoolLoginPage</title>
</head>

<body>

    <div class="steam-signup-form">
        <div class="front">
            <img src="assets/logo.jpg" alt="logo">
            <h1 class="title">Create your account</h1>
            <p>The ultimate studying platform</p>
            <p>Study, learn and ace your exams</p>
            <p><strong>It's free to join and easy to use</strong></p>

            <form class="form" action="includes/register.inc.php" method="post">
                <label class="form__label" for="email">Your Email <span class="form__tooltip" data-tooltip="Please enter your email adress">?</span></label>
                <input class="form__text" type="email" id="email" name="email" >
                <!--Type makes sure it has to be an email that is entered, for connects email to the id email-->
                <label class="form__label" for="password">Password<span class="form__tooltip" data-tooltip="Minimum 8 characters, at least 1 uppercase letter and 1 number">?</span></label>
                <input class="form__text" type="password" name="password">
                <label class="form__label" for="password-reenter">Re-enter password</label>
                <input class="form__text" type="password" id="password-reenter" name="password-reenter">
                <label class="form__label" for="name">Name</label>
                <input class="form__text" type="text" id="name" name="name">
                

                <p class="fineprint flex-center">
                    <input class="form__checkbox" type="checkbox" name="" id="agreement">
                    <label for="agreement">I am 13 years of age or older AND agree to the <a href="#">terms and services</a></label>
                </p>

                <button class="button" id="submit" name="submit">Sign up now</button>
                <a href="login.php" class="fineprint">I already have an account</a>

            </form>
            <div class="errormsg">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] =="emptyinput") {
                    echo "<p class='errormsg'>FILL IN ALL FIELDS!</p>";
                }
                else if($_GET["error"]== "passwordnomatch"){
                    echo "<p class='errormsg'>PASSWORDS DONT MATCH</p>";
                }
                else if($_GET["error"]== "emailexists"){
                    echo "<p class='errormsg'>EMAIL ALREADY EXISTS</p>";
                }
                else if($_GET["error"]== "stmtfailed"){
                    echo "<p class='errormsg'>SOMETHING WENT WRONG</p>";
                }
                else if($_GET["error"]== "none"){
                    echo "<p class='errormsg'>YOU HAVE REGISTERED</p>";
                }
            }

        ?>
        </div>


        </div>

    

        <div class="back">
            <h2 class="subheading">Why join me?</h2>
            <ul class="list list--unstyled">
                <li>Schedule classes whenever you want</li>
                <li>Easy Communication with me and other students</li>
                <li>Easily describe your school/homework problems</li>
                <li>A new and fun way to learn</li>
                <li>Check out my schedule whenever you want</li>
                <li>Contact me via the website!</li>
            </ul>
        </div>

    </div>




</body>

</html>