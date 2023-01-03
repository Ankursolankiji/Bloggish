<?php
include 'partials/header.php';
?>

<body>
    <section class="form__section">

        <div class="container form__section-container">
            <h2>Add User</h2>

            <div class="alert__message error">
                <p>invalid</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" name="" id="" placeholder="First Name">
                <input type="text" name="" id="" placeholder="Last Name">
                <input type="text" name="" id="" placeholder="Username">
                <input type="text" name="" id="" placeholder="Email">
                <input type="password" name="" id="" placeholder="Create Password">
                <input type="text" name="" id="" placeholder="confirm Password">
                <form action="" enctype="multipart/form-data" class="form__control">
                    <select name="" id=""
                    >
                <option value="0">Author</option>
            <option value="1">Admin</option>
            </select>
            <div class="form__control">
                    <label for="avatar">User Avatar</label>
                    <input type="file" name="" id="Avatar">
                </div>
                    

                    <button type="submit" class="btn">Add User</button>
                  
                </form>
                  
        </div>
    </section>

    <?php
 include '../partials/footer.php'
 ?>