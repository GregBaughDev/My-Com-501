<?php 
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/inc/conn.php');

    function findItem($id, $db) {
        try {
            $individualItem = "SELECT products.product_id, products.name, products.description, products.condition, products.price, products.status, manufacturer.manufacturer, categories.category FROM products
            LEFT JOIN categories ON products.category_id = categories.category_id
            LEFT JOIN manufacturer ON products.manufacturer = manufacturer.manufacturer_id WHERE product_id = :id";
            $item = $db->prepare($individualItem);
            $item->bindParam(":id", $id);
            $item->execute();
            $item = $item->fetchAll();
            return $item;
        } catch (PDOException $e) {
            error_log($e->getMessage(), 0);
        }
    }

?>