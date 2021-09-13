<?php 
    session_start();

    $errors = array();
    $formInfo = [
       "name" => $_POST["name"],
       "email" => $_POST["email"],
       "telephone" => $_POST["telephone"],
       "message" => $_POST["message"] 
    ];

    if($formInfo["name"] == "" || $formInfo["email"] == "" || $formInfo["message"] == ""){
        array_push($errors, "All fields must be completed");
        $_SESSION["errors"] = $errors;
        header("Location: ../../contact.php");
    } else {
        // Confirmation messaged through in errors array for brevity in dev mode
        array_push($errors, "Thank you! Your message has been submitted");
        $_SESSION["errors"] = $errors;
        header("Location: ../../contact.php");
    }
?>