<?php
include 'partials/header.php';
?>
<body>
    <section class="form__section">

        <div class="container form__section-container">
            <h2>Add Post</h2>

            <div class="alert__message error">
                <p>invalid</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" name="" id="" placeholder="Title">
                <select name="" id="">
                    <option value="1">Travel</option>
                    <option value="1">Art</option>
                    <option value="1">Science & Technology</option>
                    <option value="1">Music</option>
                    <option value="1">Wild Life</option>
                    <option value="1">food</option>
                </select>
                <textarea name="" id="" rows="10" placeholder="Body"></textarea>
                <div class="form__control inline">
                    <input type="checkbox" checked name="" id="is__featured">
                    <label for="is__featured">Featured</label>
                </div>
                <div class="form__control">
                    <label for="thumbnail">Add thumbnail</label>
                    <input type="file" name="" id="thumbnail">
                </div>
                <button type="submit" class="btn">Add Post</button>


            </form>
        </div>
    </section>
    <?php
 include '../partials/footer.php'
 ?>