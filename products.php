<!-- 
    Coding standards: My-Com HTML standards.pdf

    Colour reference:
        grey: #F6F6F6
        black: #000000
        orange: #E5A01A
        blue: #3300FF
        purple: #927DE8
-->
<?php
    require_once('./files/inc/header.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/func/itemretrieve.php');
?>  

<section class="flex">
    <div class="header-container">
        <h1>Products</h1>
        <h2>Current products</h2>
    </div>
    <!-- <div class="flex"> -->
    <div class="product-main">
        <!-- <div class="flex product-row"> -->
        <div class="grid">
            <?php for($i = 0; $i < count($retrieveItems); $i++) { ?>
                <div class="grid-product">
                    <h2><?php echo $retrieveItems[$i]['name'] ?></h2>
                    <h3>$<?php echo $retrieveItems[$i]['price'] ?></h3>
                    <h4><?php echo $retrieveItems[$i]['status'] ?></h4>
                    <h5><?php echo $retrieveItems[$i]['condition'] ?></h5>
                    <p><?php echo $retrieveItems[$i]['description'] ?></p>
                    <p><?php echo $retrieveItems[$i]['category'] ?></p>
                    <p><?php echo $retrieveItems[$i]['manufacturer'] ?></p>
                </div>
            <?php } ?>
        </div>
        <div class="flex product-row">
            <div class="product-placeholder">
            </div>
            <div class="product-placeholder">
            </div>
            <div class="product-placeholder">
            </div>
        </div>
        <div class="flex product-row">
            <div class="product-placeholder">
            </div>
            <div class="product-placeholder">
            </div>
            <div class="product-placeholder">
            </div>
        </div>
    </div>
</section>

<?php
    require_once('./files/inc/footer.php');
?>