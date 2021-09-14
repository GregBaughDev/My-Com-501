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
        <h1>Contact Us</h1>
    </div>
    <section class="form-container">
        <h2>You can contact us using the below form and we will get back to you shortly</h2>
        <?php if(isset($_SESSION['errors'])) {
            foreach($_SESSION['errors'] as $error) { ?>
                <h3 class="log-err"><?php echo $error ?></h3>
            <?php }
            unset($_SESSION['errors']);
        } ?>
        <form action="./files/func/contact.php" method="POST">
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
    <section>
        <h2>Contact Information</h2>
        <h3>Email: info@my-com.com.au</h3>
        <h3>Phone: (03) 2345 6789</h3>
    </section>
    <section>
        <h2>Location</h2>
        <h3>447-457 Victoria St | Richmond | VIC | 3121</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.592319810075!2d144.9993234260693!3d-37.80985503092955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6422db00d8aed%3A0x62c6709a8c8f2553!2sCentre%20Com%20Richmond!5e0!3m2!1sen!2sau!4v1630201615801!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</section>

<?php
    require_once('./files/inc/footer.php');
?>
