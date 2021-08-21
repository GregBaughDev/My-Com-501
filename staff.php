<?php
    require_once('./files/inc/header.php');
?>  

<section class="flex">
    <div class="header-container">
        <h1>Staff Area</h1>
    </div>
    <section class="form-container">
        <form>
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