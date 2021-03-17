<?php

function emptyInputSignup($email,$pwd,$pwdrepeat,$name){
    $result;
    if (empty($email) || empty($pwd) || empty($pwdrepeat) || empty($name)) {
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd,$pwdrepeat){
    $result;
    if ($pwd !== $pwdrepeat) {
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function emailExists($conn,$email){
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);

    if ($row=mysqli_fetch_assoc($resultData)) { //can be both used for signup and login
        return $row;
        
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $pwd){
    $sql = "INSERT INTO users (usersName,usersEmail,usersPassword) VALUES (?, ?, ?);";
    $stmt= mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../register.php?error=none");
        exit();
}

function emptyInputLogin($email,$pwd){
    $result;
    if (empty($email) || empty($pwd)) {
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function loginUser($conn, $email, $pwd){
    $emailExists = emailExists($conn,$email);

    if ($emailExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["usersPassword"];
    $checkPwd= password_verify($pwd,$pwdHashed);

    if ($checkPwd===false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd===true){
    session_start();
    $_SESSION["userid"]=$emailExists["usersId"];
    $_SESSION["useremail"]=$emailExists["usersEmail"];
    header("location: ../index.php");
        exit();
}


}