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
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/func/itemretrieve.php');

    if(!isset($_SESSION['authenticate'])){
        header("Location: ./staff.php");
    }

    $item = findItem($_GET['id'], $conn);
    
    if(!$item){
        header("Location: ./staffedit.php");
    }
?>  
<section class="flex">
    <div class="header-container">
        <h1>Edit - <?php echo $item[0]['name'] ?></h1>
    </div>
    <section class="form-container">
        <form action="./files/func/handleedit.php?action=edit&id=<?php echo $item[0]['product_id'] ?>" method="POST" enctype="multipart/form-data">
            <label for="name">Product name</label><?php if(isset($_SESSION['errors']['name'])) { ?> <span class="validation"><?php echo $_SESSION['errors']['name'] ?></span> <?php } ?>
                <input type="text" name="name" id="name" value="<?php echo $item[0]['name']?>">
            <div class="form-edit">
                <label for="manufacturer">Manufacturer</label>
                    <select name="manufacturer">
                        <?php foreach($manuList as $man) { ?>
                            <option value="<?php echo $man['manufacturer_id']?>" <?php if($item[0]['manufacturer'] == $man['manufacturer']) { ?> selected <?php } ?>><?php echo $man['manufacturer'] ?></option>
                        <?php } ?>
                    </select>
            </div>
            <label for="price">Price</label><?php if(isset($_SESSION['errors']['price'])) { ?> <span class="validation"><?php echo $_SESSION['errors']['price'] ?></span><?php } ?>
                <input type="text" name="price" id="price" value="<?php echo $item[0]['price'] ?>">
            <label for="image">Image</label>
                <input type="file" name="image" id="image">
            <div class="form-edit">
                <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="In Stock" <?php if($item[0]['status'] == 'In Stock') { ?> selected <?php } ?>>In Stock</option>
                        <option value="Previous Item" <?php if($item[0]['status'] == 'Previous Item') { ?> selected <?php } ?>>Previous Item</option>
                    </select>
            </div>
            <div class="form-edit">
                <label for="condition">Condition</label>
                    <select name="condition">
                        <option value="New" <?php if($item[0]['condition'] == 'New') { ?> selected <?php } ?>>New</option>
                        <option value="Refurbished" <?php if($item[0]['condition'] == 'Refurbished') { ?> selected <?php } ?>>Refurbished</option>
                    </select>
            </div>
            <div class="form-edit">
                <label for="category">Category</label>
                    <select name="category">
                    <?php foreach($catList as $cat) { ?>
                        <option value="<?php echo $cat['category_id']?>" <?php if($item[0]['category'] == $cat['category']) { ?> selected <?php } ?>><?php echo $cat['category']?></option>
                    <?php } ?>
                    </select>
            </div>
            <label for="description">Description</label><?php if(isset($_SESSION['errors']['description'])) { ?> <span class="validation"><?php echo $_SESSION['errors']['description'] ?></span><?php } ?>
                <textarea name="description" id="description"><?php echo $item[0]['description'] ?></textarea>
            <button type="submit">Submit</button>
        </form>
        <form action="./files/func/handledelete.php?id=<?php echo $item[0]['product_id'] ?>" method="POST">
            <button type="submit">Delete Item</button>
        </form>
    </div>
</section>

<?php
    unset($_SESSION["errors"]);
    require_once('./files/inc/footer.php');
?>