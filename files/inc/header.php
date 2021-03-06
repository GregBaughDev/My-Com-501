<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
    <link href="/Diploma/501/www/public/css/styles.css" rel="stylesheet">

    <!-- TO DO: add conditionals for the stylesheets -->
    <link href="/Diploma/501/www/public/css/product.css" rel="stylesheet">
    <link href="/Diploma/501/www/public/css/about.css" rel="stylesheet">
    <link href="/Diploma/501/www/public/css/contact.css" rel="stylesheet">
    <link href="/Diploma/501/www/public/css/sitemap.css" rel="stylesheet">
    <link href="/Diploma/501/www/public/css/view.css" rel="stylesheet">
    <link href="/Diploma/501/www/public/css/staff.css" rel="stylesheet">
    <title>My-Com</title>
</head>
<body>
<header>
    <div>
        <a href="/Diploma/501/www/index.php"><img src="/Diploma/501/www/public/img/logo.svg" alt="My Com logo"></a>
        <nav>
            <a href="/Diploma/501/www/pages/products.php">Products</a>
            <a href="/Diploma/501/www/pages/about.php">About</a>
            <a href="/Diploma/501/www/pages/contact.php">Contact</a>
            <a href="/Diploma/501/www/staff/staffhome.php">Staff Area</a>
            <?php if(isset($_SESSION['authenticate'])) { ?>
                <a href="/Diploma/501/www/files/func/stafflogout.php">Log Out</a>
            <?php } ?>
        </nav>
    </div>
</header>
<div class="content">