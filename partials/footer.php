<?php
$query = " SELECT * FROM categories ORDER BY title";
$categories = mysqli_query($connection, $query);
?>
<footer>
    <div class="footer__socials">
        <a href="" target="blank"><i class="uil uil-youtube"></i></a>
        <a href="" target="blank"><i class="uil uil-instagram-alt"></i></a>
        <a href="" target="blank"><i class="uil uil-twitter"></i></a>
        <a href="" target="blank"><i class="uil uil-facebook-f"></i></a>
        <a href="" target="blank"><i class="uil uil-linkedin"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>categories</h4>
            <ul>

                <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                    <li><a href=""><?= $category['title'] ?></a></li>
                <?php endwhile ?>
            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>

                <li><a href="">Call Numbers</a></li>
                <li><a href="">Emails</a></li>
                <li><a href="">Social Support</a></li>
                <li><a href="">Location</a></li>

            </ul>
        </article>
        <article>
            <h4>
                blog
            </h4>
            <ul>
                <li><a href="">Safety</a></li>

                <li><a href="">Repair</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">categories</a></li>

            </ul>
        </article>
        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="<?= ROOT_URL ?>index.php">Home</a></li>
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
            </ul>
        </article>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; 2022 </small>
    </div>
</footer>
<!-- ======================== custom javascript===================== -->
<script src="<?= ROOT_URL ?>js/main.js"></script>

</body>

</html>