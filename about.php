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
        <h1>About My-Com</h1>
    </div>
    <section class="paragraph-text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis illo vitae officiis consectetur ipsum sapiente. Amet aliquid dolore magni voluptatibus, harum laboriosam beatae ipsam exercitationem nesciunt molestiae sapiente repellat voluptate, aperiam rerum ab quidem ullam ratione nemo incidunt placeat aliquam iste! Natus similique molestias doloremque, nisi hic repudiandae minima officiis commodi? Quo rerum, beatae exercitationem perferendis recusandae deserunt. Modi tempore reprehenderit veniam cumque, enim eum sed officia expedita quasi laborum dolore dolor reiciendis suscipit tenetur nobis saepe beatae sequi mollitia! Illo laboriosam ducimus sunt dicta aspernatur quae dolorem necessitatibus blanditiis rerum molestias doloremque sapiente quod magnam, nisi labore porro? Deleniti?</p>
    </section>
    <section>
        <h2>Opening times</h2>
        <table class="tbl">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Open</th>
                    <th>Close</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Monday</td>
                    <td>09:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>09:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>09:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>09:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>Friday</td>
                    <td>09:00</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>Saturday</td>
                    <td>10:00</td>
                    <td>16:00</td>
                </tr>
                <tr>
                    <td>Sunday</td>
                    <td>11:00</td>
                    <td>15:00</td>
                </tr>
            </tbody>
        </table>
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