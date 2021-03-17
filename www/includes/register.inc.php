<?php

if (isset($_POST["submit"])) {
    $email=$_POST["email"];
    $pwd=$_POST["password"];
    $pwdrepeat=$_POST["password-reenter"];
    $name=$_POST["name"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($email,$pwd,$pwdrepeat,$name)!== false) {
        header("location: ../register.php?error=emptyinput");
        exit();

    }
    
    if (pwdMatch($pwd,$pwdrepeat)!== false) {
        header("location: ../register.php?error=passwordnomatch");
        exit();

    }
    if (emailExists($conn,$email)!== false) {
        header("location: ../register.php?error=emailexists");
        exit();

    }

    

    createUser($conn,$name, $email, $pwd);


}
else{
    header("location: ../register.php");

}

?>