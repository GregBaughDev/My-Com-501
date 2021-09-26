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
    $randItem = rand(0, count($retrieveItems) - 1);
?>  

<section id="hero">
    <h1>My-Com provide high quality refurbished and new computer components at competitive prices</h1>
    <img src="./public/img/slider3.jpg" alt="Inside of a computer">
</section>
<section id="featured-prod">
    <h2>Featured Product</h2>
    <h3><?php echo $retrieveItems[$randItem]['name']?></h3>
    <img src="./public/img/<?php echo $retrieveItems[$randItem]["image"]; ?>" alt="Image of <?php echo $retrieveItems[$randItem]["name"] ?>">
    <p><?php echo $retrieveItems[$randItem]['description']?></p>
    <p><a href="./pages/view.php?id=<?php echo $randItem ?>">Link to item</a></p>
</section>
<script src='./public/js/index.js'></script>

<?php
    require_once('./files/inc/footer.php');
?>