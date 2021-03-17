<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>OgisSchoolLoginPage</title>
</head>

<body>
    <script type="text/javascript" src="loginregister.js"></script>
    <div class="steam-login-form">
        <div class="front">
            <img src="assets/logo.jpg" alt="logo">
            <h1 class="title">Hello, please login</h1>

            <form class="form" action="includes/login.inc.php" method="post">
                <label class="form__label" for="email">Your Email <span class="form__tooltip" data-tooltip="Please enter your email adress">?</span></label>
                <input class="form__text" type="email" id="email" name="email">
                <!--Type makes sure it has to be an email that is entered, for connects email to the id email-->
                <label class="form__label" for="password">Password<span class="form__tooltip" data-tooltip="Minimum 8 characters, at least 1 uppercase letter and 1 number">?</span></label>
                <input class="form__text" id="password" type="password" name="password">

                <button class="button" id="submit" name="submit">Login</button>
                <a href="index.php" class="fineprint">Take me back to home</a>

            </form>

            <?php
                
                if (isset($_GET["error"])) {
                    if ($_GET["error"] =="emptyinput") {
                        echo "<p>FILL IN ALL FIELDS!</p>";
                    }
                    else if($_GET["error"]== "wronglogin"){
                        echo "<p>INCORRECT LOGIN INFO</p>";
                    
                }
    
           
            }
        ?>
    
        </div>

      


    </div>




</body>

</html>