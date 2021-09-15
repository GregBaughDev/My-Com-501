<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/inc/conn.php');
    
    try {
        $categories = "SELECT * FROM categories";
        $catList = $conn->prepare($categories);
        $catList->execute();
        $catList = $catList->fetchAll();

        $manufacturers = "SELECT * FROM manufacturer";
        $manuList = $conn->prepare($manufacturers);
        $manuList->execute();
        $manuList = $manuList->fetchAll();
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }
?>