<?php
include 'partials/header.php';



?>

<body>
    <section class="form__section">

        <div class="container form__section-container">


            <form action="mailto:solanank@gmail.com?" method="post" enctype="text/plain">
                <input type="text" name="name" placeholder="Your Name" required>

                <input type="text" name="email" placeholder="Email" required>
                <input type="text" name="reason" placeholder="reason to contact">


                <textarea name="body" rows="10" placeholder="Explain here" required></textarea>


                <button type="submit" class="btn">Contact</button>

            </form>

        </div>
    </section>


    <?php
    include 'partials/footer.php'
        ?>