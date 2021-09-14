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
    require_once($_SERVER['DOCUMENT_ROOT'] . '/Diploma/501/www/files/func/individualitem.php');

    if(!$_SESSION['authenticate']){
        header("Location: ./staff.php");
    }

    // TO DO: Invalid id entered, redirect to edit page

    $item = findItem($_GET['id'], $conn);
?>  
<!-- Change below to form -->
<section class="flex">
    <section class="form-container">
        <form action="" method="POST">
            <label for="name">Product name</label>
                <input type="text" name="name" id="name" value="<?php echo $item[0]['name']?>">
            <label for="manufacturer">Manufacturer</label>
               <input type="text" name="manufacturer" id="manufacturer" value="<?php echo $item[0]['manufacturer'] ?>">
            <label for="price">Price</label>
                <input type="text" name="price" id="price" value="<?php echo $item[0]['price'] ?>">
        </form>
        <img class="view-img" src="./public/img/test.jpg" alt="Computer monitor">
        <h4><?php echo $item[0]['status'] ?></h4>
        <h5><?php echo $item[0]['condition'] ?></h5>
        <p><?php echo $item[0]['description'] ?></p>
    </div>
</section>

<?php
    require_once('./files/inc/footer.php');
?>