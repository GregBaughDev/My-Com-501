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

    $filterProducts = [];

    if(isset($_GET["curr"]) || isset($_GET["prev"])){
        foreach($retrieveItems as $item) {
            if(isset($_GET["curr"]) && $item["status"] == "In Stock") {
                array_push($filterProducts, $item);
            } else if (isset($_GET["prev"]) && $item["status"] == "Previous Item") {
                array_push($filterProducts, $item);
            }
        }
    } else {
        $filterProducts = $retrieveItems;
    }
?>  

<section class="flex">
    <div class="header-container">
        <h1>Products</h1>
        <?php if(!isset($_GET["curr"]) && !isset($_GET["prev"])) { ?>
            <h2>All products</h2>
            <div class="flex-row prod-links">
                <h3><a href="products.php?curr">Current products</a></h3>
                <h3><a href="products.php?prev">Previous products</a></h3>
            </div>  
        <?php } else if(isset($_GET["curr"])) { ?>
            <h2>Current products</h2>
            <div class="flex-row prod-links">
                <h3><a href="products.php">All products</a></h3>
                <h3><a href="products.php?prev">Previous products</a></h3>
            </div>  
        <?php } else if(isset($_GET["prev"])) { ?>
            <h2>Previous products</h2>
            <div class="flex-row prod-links">
                <h3><a href="products.php">All products</a></h3>
                <h3><a href="products.php?curr">Current products</a></h3>
            </div>  
        <?php } ?>
    </div>
    <div class="flex-column product-search">
        <form action="" type="GET">
            <label for="search">Item Search:</label>
            <input name="search" id="search" type="text">
            <select name="filter" id="filter">
                <option value="all">All Stock</option>
                <option value="current">Current Stock</option>
                <option value="previous">Previous Stock</option>
            </select>
            <input type="submit" value="Search">
        </form>
    </div>
    <div class="product-main">
        <div class="grid">
            <?php for($i = 0; $i < count($filterProducts); $i++) { ?>
                <div class="flex-product">
                    <h2><a href="view.php?id=<?php echo $filterProducts[$i]["product_id"] ?>"><?php echo $filterProducts[$i]['name'] ?></a></h2>
                    <div class="flex-row product-information">
                        <img src="./public/img/test.jpg" alt="Computer monitor">
                        <div class="flex-column product-information-rt">
                            <h3>$<?php echo $filterProducts[$i]['price'] ?></h3>
                            <h4><?php echo $filterProducts[$i]['status'] ?></h4>
                            <h5><?php echo $filterProducts[$i]['condition'] ?></h5>
                        </div>
                    </div>
                    <p><?php echo $filterProducts[$i]['description'] ?></p>
                    <div class="flex-row product-information-bttm">
                        <h6>Category: <?php echo $filterProducts[$i]['category'] ?></h6>
                        <h6>Brand: <?php echo $filterProducts[$i]['manufacturer'] ?></h6>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
    require_once('./files/inc/footer.php');
?>