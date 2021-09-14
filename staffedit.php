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
    
    if(!$_SESSION['authenticate']){
        header("Location: ./staff.php");
    }
?>  

<section class="flex">
    <div class="header-container">
        <h1>Edit page</h1>
    </div>
    <div class="edit-table">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Condition</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < count($retrieveItems); $i++){ ?>
                    <tr>
                        <td><?php echo $retrieveItems[$i]["name"] ?></td>
                        <td><?php echo $retrieveItems[$i]["condition"] ?></td>
                        <td><?php echo $retrieveItems[$i]["category"] ?></td>
                        <td><?php echo $retrieveItems[$i]["status"] ?></td>
                        <td>$<?php echo $retrieveItems[$i]["price"] ?></td>
                        <td><a href="./staffeditview.php?id=<?php echo $retrieveItems[$i]["product_id"] ?>">Edit</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<?php
    require_once('./files/inc/footer.php');
?>