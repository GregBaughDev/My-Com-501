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
    session_start();
    
    if(!$_SESSION['authenticate']){
        header("Location: ./staff.php");
    }
?>  

<section class="flex">
    <div class="header-container">
        <h1>Dashboard</h1>
    </div>
</section>

<?php
    require_once('./files/inc/footer.php');
?>