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
?>  

<section class="flex">
    <div class="header-container">
        <h1>Staff Area</h1>
    </div>
    <section class="form-container">
        <?php if(isset($_SESSION['errors'])) {
            foreach($_SESSION['errors'] as $error) { ?>
                <h3 class="log-err"><?php echo $error ?></h3>
            <?php }
            unset($_SESSION['errors']);
        } ?>
        <form action="./files/func/stafflogin.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Submit</button>
        </form>
    </section>
</section>

<?php
    require_once('./files/inc/footer.php');
?>