<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/inc/conn.php');

    try {
        $retrieveItems = "SELECT products.product_id, products.image, products.name, products.description, products.condition, products.price, products.status, manufacturer.manufacturer, categories.category FROM products
            LEFT JOIN categories ON products.category_id = categories.category_id
            LEFT JOIN manufacturer ON products.manufacturer = manufacturer.manufacturer_id";
        $retrieveItems = $conn->prepare($retrieveItems);
        $retrieveItems->execute();
        $retrieveItems = $retrieveItems->fetchAll();
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }

?>