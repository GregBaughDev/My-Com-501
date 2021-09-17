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
    
    if(!$_SESSION['authenticate']){
        header("Location: ./staff.php");
    }
?>  

<section class="flex">
    <div class="header-container">
        <h1>Dashboard</h1>
        <?php if(isset($_GET['msg'])) { ?>
            <?php if($_GET['msg'] == 'dberr') { ?>
                <h2>Error with the database - Please contact administrator</h2>
            <?php } else if($_GET['msg'] == 'succ') { ?>
                <h2>Item added successfully!</h2>
            <?php } else if($_GET['msg'] == 'del') { ?>
                <h2>Item deleted successfully!</h2>
            <?php } ?>
        <?php } ?>
    </div>
    <div>
        <h3><a href="./staffadd.php">Add Product</a></h3>
        <h3><a href="./staffedit.php">Edit Products</a></h3>
    </div>
</section>

<?php
    require_once('./files/inc/footer.php');
?>