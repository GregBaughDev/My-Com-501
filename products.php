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
    <div class="flex-row product-search">
        <div>
            <form action="" type="GET">
                <label for="search">Item Search:</label>
                <input name="search" id="search" type="text">
                <input type="submit" value="Search">
            </form>
        </div>
        <div>
            <label for="">Filter Products:</label>
            <select name="filter" id="filter">
                <option value="">Filter Products</option>
                <option value="current">Current Stock</option>
                <option value="previous">Previous Stock</option>
            </select>
        </div>
    </div>
    <div class="product-main">
        <div class="grid">
            <?php for($i = 0; $i < count($retrieveItems); $i++) { ?>
                <div class="flex-product">
                    <h2><?php echo $retrieveItems[$i]['name'] ?></h2>
                    <div class="flex-row product-information">
                        <img src="./public/img/test.jpg" alt="Computer monitor">
                        <div class="flex-column product-information-rt">
                            <h3>$<?php echo $retrieveItems[$i]['price'] ?></h3>
                            <h4><?php echo $retrieveItems[$i]['status'] ?></h4>
                            <h5><?php echo $retrieveItems[$i]['condition'] ?></h5>
                        </div>
                    </div>
                    <p><?php echo $retrieveItems[$i]['description'] ?></p>
                    <div class="flex-row product-information-bttm">
                        <h6>Category: <?php echo $retrieveItems[$i]['category'] ?></h6>
                        <h6>Brand: <?php echo $retrieveItems[$i]['manufacturer'] ?></h6>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
    require_once('./files/inc/footer.php');
?>