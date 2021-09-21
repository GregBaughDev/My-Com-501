<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/inc/conn.php');
    session_start();

    $errors = array();
    $user;
    $pass;

    if(isset($_POST['username'])){
        $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['password'])){
        $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    }

    if($user == '' || $pass == ''){
        array_push($errors, "All fields must be completed");
        header("Location: ../../staff.php");
    }

    try {
        $usernameQueryString = "SELECT * FROM staff WHERE username = :username AND password = :password";
        $usernameQuery = $conn->prepare($usernameQueryString);
        $usernameQuery->bindParam(':username', $user);
        $usernameQuery->bindParam(':password', $pass);
        $usernameQuery->execute();
        $usernameQuery = $usernameQuery->fetchAll();
        
        if(count($usernameQuery) == 1){
            // SET SESSION AND REDIRECT TO STAFF PAGE
            $_SESSION['authenticate'] = true;
            $_SESSION['role'] = $usernameQuery[0]['user_role'];
            header("Location: ../../staffhome.php");
        } else {
            array_push($errors, "An account with these details cannot be found");
            $_SESSION['errors'] = $errors;
            header("Location: ../../staff.php");
        }
    
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }

?>