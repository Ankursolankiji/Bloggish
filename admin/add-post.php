<?php
include 'partials/header.php';

//fetch catagories from db
$query = 'SELECT * FROM categories';
$categories = mysqli_query($connection, $query);

//fget back form data of any thing unvalid

$title=$_SESSION['add-post-data']['title'] ?? null;
$body=$_SESSION['add-post-data']['body'] ?? null;

//del from data session
unset($_SESSION['add-post-data']);
?>

<body>
    <section class="form__section">
  

        <div class="container form__section-container">
            <h2>Add Post</h2>
  <?php if (isset($_SESSION['add-post'])) : ?>
                <div class="alert__message error">
                    <p>
                        <?= $_SESSION['add-post'];
                        unset($_SESSION['add-post']) ?>
                    </p>
                </div>

            <?php endif ?>
            <!-- <div class="alert__message error">
                <p>invalid</p>
            </div> -->
            <form action="<?= ROOT_URL ?>admin/add-post-logic.php" enctype="multipart/form-data" method="post">

                <input type="text" name="title" value="<?= $title ?>" placeholder="Title">

                <select name="category" >
                    <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                        <option value="<?= $category['id'] ?>"><?= $category['title'] ?>
                        </option>
                    <?php endwhile ?>
                </select>

                <textarea name="body" value="<?= $body ?>" rows="10" placeholder="Body"></textarea>

                <?php if (isset($_SESSION['useris_admin'])) : ?>
                    <div class="form__control inline">
                        <input type="checkbox" checked name="is_featured" value="1" id="is_featured">
                        <label for="is_featured">Featured</label>
                    </div>
                <?php endif ?>


                <div class="form__control">
                    <label for="thumbnail">Add thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail">
                </div>

                <button type="submit" name="submit" class="btn">Add Post</button>


            </form>
        </div>
    </section>
    <?php
    include '../partials/footer.php'
    ?>