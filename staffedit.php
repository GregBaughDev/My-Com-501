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
    session_start();
    
    if(!$_SESSION['authenticate']){
        header("Location: ./staff.php");
    }
?>  

<section class="flex">
    <div class="header-container">
        <h1>Edit page</h1>
    </div>
    <div>
        <table>
            <thead>
                <tr>Name</tr>
                <tr>Description</tr>
                <tr>Condition</tr>
                <tr>Category</tr>
                <tr>Status</tr>
                <tr>Price</tr>
                <tr>Edit</tr>
                <tr>Delete</tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($retrieveItems); $i++){ ?>
                    <tr>
                        <td><?php echo $retrieveItems[$i]["name"] ?></td>
                        <td><?php echo $retrieveItems[$i]["description"] ?></td>
                        <td><?php echo $retrieveItems[$i]["condition"] ?></td>
                        <td><?php echo $retrieveItems[$i]["status"] ?></td>
                        <td>$<?php echo $retrieveItems[$i]["price"] ?></td>
                        <!-- TO DO - Link to edit and delete page -->
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<?php
    require_once('./files/inc/footer.php');
?>