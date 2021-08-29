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
?>  

<section class="flex">
    <div class="header-container">
        <h1>Sitemap</h1>
    </div>
    <div class="flex-column">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <!-- add product links in -->
            <li>Products
                <ul>
                    <li>Current Products</li>
                    <li>Previous Products</li>
                </ul>
            </li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="./staff.php">Staff Area</a></li>
        </ul>
    </div>
</section>

<?php
    require_once('./files/inc/footer.php');
?>