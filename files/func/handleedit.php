<?php 
    session_start();
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/inc/conn.php');

    unset($_SESSION["errors"]);

    // Array to handle errors
    $formErrs = [
        "name" => "",
        "price" => "",
        "description" => "",
        "image" => ""
    ];

    // Image upload function
    function imgUpload() {
        $imgDir = $_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/public/img/';
        $imgBase = basename($_FILES['image']['name']);
        $imgFile = $imgDir . $imgBase;
        move_uploaded_file($_FILES['image']['tmp_name'], $imgFile);
        return $imgBase;
    }

    // Variable to check if adding a new item or editing item
    $addOrEdit = $_GET['action'];

    // Variables from form data
    $name = "";
    $manufacturer = intval($_POST['manufacturer']);
    $price = 0;
    $status = $_POST['status'];
    $condition = $_POST['condition'];
    $category = intval($_POST['category']);
    $description = "";
    
    if($_FILES['image']['name'] != ''){
        $image = imgUpload();
    }

    // Variable to to be set true if all form validations pass
    $formReady = false;

    // Function to sanitise user input
    function sanitise($formSection, $filter = FILTER_SANITIZE_STRING){
        if(isset($_POST[$formSection])){
            return filter_var($_POST[$formSection], $filter);
        }
    }

    // Check if fields are completed, if false pass error to formErrs, if true sanitise data
    $_POST['name'] == '' ? $formErrs['name'] = "Field must be completed" : $name = sanitise('name');
    $_POST['price'] == 0 ? $formErrs['price'] = "Price must be greater than 0" : $price = sanitise('price', FILTER_SANITIZE_NUMBER_INT);
    $_POST['description'] == '' ? $formErrs['description'] = "Field must be completed" : $description = sanitise('description');
    $_FILES['image']['name'] == '' && $addOrEdit == 'add' ? $formErrs['image'] = "Image must be provided" : null;

    // Check that there are no errors in formErrs
    if(!$formErrs['name'] && !$formErrs['price'] && !$formErrs['description'] && !$formErrs['image'] && $addOrEdit == 'add'){
        $formReady = true;
    } else if (!$formErrs['name'] && !$formErrs['price'] && !$formErrs['description'] && $addOrEdit == 'edit'){
        $formReady = true;
    }

    // Edit route
    if($formReady && $addOrEdit == 'edit'){
        if(!$image) {
            try {
                $update = "UPDATE products SET name = :name, manufacturer = :manufacturer, price = :price,
                    `status` = :status, `condition` = :condition, category_id = :category, description = :description
                    WHERE product_id = :product_id";
                $updateItem = $conn->prepare($update);
                $updateItem->bindParam(":name", $name);
                $updateItem->bindParam(":manufacturer", $manufacturer);
                $updateItem->bindParam(":price", $price);
                $updateItem->bindParam(":status", $status);
                $updateItem->bindParam(":condition", $condition);
                $updateItem->bindParam(":category", $category);
                $updateItem->bindParam(":description", $description);
                $updateItem->bindParam(":product_id", $_GET['id']);
                $updateItem->execute();
    
                header("Location: ../../staff/staffedit.php?msg=succ");
            } catch (PDOException $e) {
                header("Location: ../../staff/staffedit.php?msg=dberr");
                error_log($e->getMessage(), 0);
            }
        } else {
            try {
                $update = "UPDATE products SET name = :name, manufacturer = :manufacturer, price = :price,
                    `status` = :status, `condition` = :condition, category_id = :category, description = :description,
                    image = :image WHERE product_id = :product_id";
                $updateItem = $conn->prepare($update);
                $updateItem->bindParam(":name", $name);
                $updateItem->bindParam(":manufacturer", $manufacturer);
                $updateItem->bindParam(":price", $price);
                $updateItem->bindParam(":status", $status);
                $updateItem->bindParam(":condition", $condition);
                $updateItem->bindParam(":category", $category);
                $updateItem->bindParam(":description", $description);
                $updateItem->bindParam(":image", $image);
                $updateItem->bindParam(":product_id", $_GET['id']);
                $updateItem->execute();
    
                header("Location: ../../staff/staffedit.php?msg=succ");
            } catch (PDOException $e) {
                header("Location: ../../staff/staffedit.php?msg=dberr");
                error_log($e->getMessage(), 0);
            }
        }
    } else if(!$formReady && $addOrEdit == 'edit') {
        $_SESSION['errors'] = $formErrs;
        header("Location: ../../staff/staffeditview.php?id=" . $_GET['id']); 
    }

    // Add route
    if($formReady && $addOrEdit == 'add'){
        try {
            $add = "INSERT INTO products (name, description, `condition`, category_id, `status`, price, manufacturer, image) 
            VALUES (:name, :description, :condition, :category_id, :status, :price, :manufacturer, :image)";
            $addItem = $conn->prepare($add);
            $addItem->bindParam(":name", $name);
            $addItem->bindParam(":manufacturer", $manufacturer);
            $addItem->bindParam(":price", $price);
            $addItem->bindParam(":status", $status);
            $addItem->bindParam(":condition", $condition);
            $addItem->bindParam(":category_id", $category);
            $addItem->bindParam(":description", $description);
            $addItem->bindParam(":image", $image);
            $addItem->execute();

            header("Location: ../../staff/staffhome.php?msg=succ");
        } catch (PDOException $e) {
            header("Location: ../../staff/staffhome.php?msg=dberr");
            error_log($e->getMessage(), 0);
        }
    } else if(!$formReady && $addOrEdit == 'add'){
        $currentData = [
            "name" => $name,
            "manufacturer" => $manufacturer,
            "price" => $price,
            "status" => $status,
            "condition" => $condition,
            "category" => $category,
            "description" => $description,
        ];
        $_SESSION['errors'] = $formErrs;
        $_SESSION['current'] = $currentData;
        header("Location: ../../staff/staffadd.php"); 
    }

?>