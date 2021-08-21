<?php
    require_once('./files/inc/header.php');
?>  

<section class="flex">
    <div class="header-container">
        <h1>Contact Us</h1>
    </div>
    <section class="form-container">
        <h2>You can contact us using the below form and we will get back to you shortly</h2>
        <form>
            <label for="name">Name: *</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            <label for="email">Email: *</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <label for="telephone">Telephone:</label>
            <input type="text" id="telephone" name="telephone" placeholder="Optional: Enter your phone number">
            <label for="message">Message: *</label>
            <textarea id="message" name="message" placeholder="Enter your message here" required></textarea>
            <button type="submit">Submit</button>
        </form>
        <h3>* Required</h3>
    </section>
</section>

<?php
    require_once('./files/inc/footer.php');
?>
