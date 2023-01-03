<?php

require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php & MySQL Blog Application with admin panel</title>
    <!-- custom stylesheets -->
    <link rel="stylesheet" href="<?= ROOT_URL?>css/style.css">
    <!-- iconscout cdn -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <section class="form__section">

    <div class="container form__section-container">
        <h2>Sign In</h2>
       
        <div class="alert__message success">
            <p>Login successful</p>
        </div>
        <form action=""  
 enctype="multipart/form-data">
            <input type="text" name=""  id="" placeholder="Username or Email">
            <input type="password" name=""  id="" placeholder="Password">
            <button type="submit" class="btn">Sign In</button>
                <small>
                    Don't have an account? <a href="signup.php">Sign Up</a>
                </small>
           
        </form>
    </div>
</section>
</body>
    
</html>
