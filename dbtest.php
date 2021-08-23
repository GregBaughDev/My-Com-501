<?php
    require('./files/inc/conn.php');

    try{
        $allItems = "SELECT * FROM products";
        $allItems = $conn->prepare($allItems);
        $allItems->execute();
        $allItems = $allItems->fetchAll();
    } catch (PDOException $e) {
        error_log($e->getMessage(), 0);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Test</title>
</head>
<body>
    <h1>DB Test</h1>
    <?php for($i = 0; $i < count($allItems); $i++) { ?>
        <h2><?php echo $allItems[$i]['name']?></h2>
        <h3>Price: <?php echo $allItems[$i]['price']?></h3>
        <h4>Condition: <?php echo $allItems[$i]['condition']?></h4>
        <h5>Status: <?php echo $allItems[$i]['status']?></h5>
        <p><?php echo $allItems[$i]['description']?></p>
    <?php } ?>
</body>
</html>

