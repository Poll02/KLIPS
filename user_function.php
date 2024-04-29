<?php
function emptyInputSignup($nomeutente, $pword,$email,$pwordr){
    $result;
    if(empty($nomeutente) || empty($email) || empty($pword) || empty($pwordr)){
        $result = true;
    }
    else $result = false;
    return $result;
}

function invalidUid($nomeutente) {
    $result;
    if( !preg_match("/^[a-zA-Z0-9*$]/",$nomeutente)){
        $result=true;
    }
    else $result = false;
    return $result;
}

function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else $result = false;
    return $result;
}

function pwdNotMatching($pword, $pwordr) {
    $result;
    if($pword !== $pwordr){
        $result=true;
    }
    else $result = false;
    return $result;
}

function userExist($con,$nomeutente, $email){
    $sql = "SELECT* FROM user WHERE username = ? OR email= ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        // header("Location: register.html);
        echo"errore stmt";
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $nomeutente, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function create_user($con,$nomeutente,$pword,$email){
    $hashedPassword = password_hash($pword, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (id, username, email, password,foto) VALUES ('', '$nomeutente', '$email', '$hashedPassword','')";
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }

  
    // close connection
    mysqli_close($con);

}

function emptyInputLogin($nomeutente, $pword){
    $result;
    if(empty($nomeutente) || empty($pword)){
        $result = true;
    }
    else $result = false;
    return $result;
}

function LoginUser($con,$nomeutente,$pword){
    $userExist = userExist($con,$nomeutente, $nomeutente);
    if($userExist === false){
        //header("Location: login.html") da modificare
        echo "errore l'utente non esiste";
        exit();
    }
    $hashedPassword = $userExist['password'];
    $checkpwd = password_veryfy($pword, $hashedPassword);
    if($checkpwd === false) {
        //header("Location: login.html") da modificare
        echo "password incorretta";
        exit();
    }
    else if($checkpwd === true) {
        session_start();
        $_SESSION["id"] = $userExist["id"];
        $_SESSION["username"] = $userExist["username"];
        $_SESSION["password"] = $userExist["password"];
        $_SESSION["foto"] = $userExist["foto"];
        $_SESSION["email"] = $userExist["email"];
        //header("Location: homepage.php") da modificare
        exit();
    }
}
?>
