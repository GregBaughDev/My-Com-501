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

    foreach($retrieveItems as $item) {
        if($item['product_id'] == $_GET['id']){
            $currItem = $item;
        }
    }

    if(!$currItem){
        header("Location: ./products.php");
    }
?>  

<section class="flex">
    <div class="header-container">
        <h1><?php echo $currItem['name'] ?></h1>
        <h2><?php echo $currItem['manufacturer'] ?></h2>
        <img class="view-img" src="../public/img/<?php echo $currItem['image']; ?>" alt="Image of <?php echo $currItem['name'] ?>">
        <h3>Price - $<?php echo $currItem['price'] ?></h3>
        <h4><?php echo $currItem['status'] ?></h4>
        <h5><?php echo $currItem['condition'] ?></h5>
        <p><?php echo $currItem['description'] ?></p>
    </div>
</section>

<?php
    require_once('../files/inc/footer.php');
?>