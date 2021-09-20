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
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/func/individualitem.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/func/categoryManu.php');

    if(!$_SESSION['authenticate']){
        header("Location: ./staff.php");
    }
?>  
<section class="flex">
    <div class="header-container">
        <h1>Add New Item</h1>
    </div>
    <section class="form-container">
        <form action="./files/func/handleedit.php?action=add" method="POST">
            <label for="name">Product name</label><?php if(isset($_SESSION['errors']['name'])) { ?> <span class="validation"><?php echo $_SESSION['errors']['name'] ?></span> <?php } ?>
                <input type="text" name="name" id="name" value="<?php if(isset($_SESSION['current'])) { echo $_SESSION['current']['name']; }?>">
            <div class="form-edit">
                <label for="manufacturer">Manufacturer</label>
                    <select name="manufacturer">
                        <?php foreach($manuList as $man) { ?>
                            <option value="<?php echo $man['manufacturer_id']?>" <?php if(isset($_SESSION['current']) && $_SESSION['current']['manufacturer'] == $man['manufacturer_id']) {?> selected <?php } ?>><?php echo $man['manufacturer'] ?></option>
                        <?php } ?>
                    </select>
            </div>
            <label for="price">Price</label><?php if(isset($_SESSION['errors']['price'])) { ?> <span class="validation"><?php echo $_SESSION['errors']['price'] ?></span><?php } ?>
                <input type="text" name="price" id="price" value="<?php if(isset($_SESSION['current'])) { echo $_SESSION['current']['price']; } ?>">
            <div class="form-edit">
                <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="In Stock" <?php if(isset($_SESSION['current']) && $_SESSION['current']['status'] == "In Stock") { ?> selected <?php } ?>>In Stock</option>
                        <option value="Previous Item" <?php if(isset($_SESSION['current']) && $_SESSION['current']['status'] == "Previous Item") { ?> selected <?php } ?>>Previous Item</option>
                    </select>
            </div>
            <div class="form-edit">
                <label for="condition">Condition</label>
                    <select name="condition">
                        <option value="New" <?php if(isset($_SESSION['current']) && $_SESSION['current']['condition'] == 'New') { ?> selected <?php } ?>>New</option>
                        <option value="Refurbished" <?php if(isset($_SESSION['current']) && $_SESSION['current']['condition'] == 'Refurbished') { ?> selected <?php } ?>>Refurbished</option>
                    </select>
            </div>
            <div class="form-edit">
                <label for="category">Category</label>
                    <select name="category">
                    <?php foreach($catList as $cat) { ?>
                        <option value="<?php echo $cat['category_id']?>" <?php if(isset($_SESSION['current']) && $_SESSION['current']['category'] == $cat['category_id']) { ?> selected <?php } ?>><?php echo $cat['category'] ?></option>
                    <?php } ?>
                    </select>
            </div>
            <label for="description">Description</label><?php if(isset($_SESSION['errors']['description'])) { ?> <span class="validation"><?php echo $_SESSION['errors']['description'] ?></span><?php } ?>
                <textarea name="description" id="description"><?php if(isset($_SESSION['current'])) { echo $_SESSION['current']['description']; } ?></textarea>
            <button type="submit">Submit</button>
        </form>
        <img class="view-img" src="./public/img/test.jpg" alt="Computer monitor">
    </div>
</section>

<?php
    unset($_SESSION['errors']);
    unset($_SESSION['current']);
    require_once('./files/inc/footer.php');
?>