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
    require_once('../files/inc/header.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/func/itemretrieve.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/func/filterSearch.php');
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
                <option value="In Stock">Current Stock</option>
                <option value="Previous Item">Previous Stock</option>
            </select>
            <input type="submit" value="Search">
        </form>
        <form action="" type="GET">
            <label for="category">Filter by category:</label>
            <select name="category" id="category">
                <option value="" disabled>--Select a category--</option>
                <?php foreach($retrieveItems as $item) { ?>
                    <option value="<?php echo $item["category"] ?>"><?php echo $item["category"] ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Filter">
        </form>
    </div>
    <div class="product-main">
            <?php if(count($filterProducts) < 1) { ?>
                <h2>No products found</h2>
            <?php } else { ?>
                <div class="grid">
                    <?php for($i = 0; $i < count($filterProducts); $i++) { ?>
                        <div class="flex-product">
                            <h2><a href="view.php?id=<?php echo $i ?>"><?php echo $filterProducts[$i]["name"] ?></a></h2>
                            <div class="flex-row product-information">
                                <img src="../public/img/<?php echo $filterProducts[$i]["image"]; ?>" alt="Image of <?php echo $filterProducts[$i]["name"] ?>">
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
            <?php } ?>
        </div>
    </div>
</section>

<?php
    require_once('../files/inc/footer.php');
?>