<?php
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/inc/conn.php');

    try {
        $delete = "DELETE FROM products WHERE product_id = :product_id";
        $deleteItem = $conn->prepare($delete);
        $deleteItem->bindParam(":product_id", $_GET['id']);
        $deleteItem->execute();

        header("Location: ../../staffhome.php?msg=del");
    } catch (PDOException $e) {
        header("Location: ../../staffhome.php?msg=dberr");
        error_log($e->getMessage(), 0);
    }
?>