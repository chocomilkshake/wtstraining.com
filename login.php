<!DOCTYPE html>
<html lang="en">
<?php
require_once 'include/website_body.class.php';

$websiteBody = new website_body();
?>

<!--****** Head of the Website******-->

<?php $websiteBody->head(); ?>
<?php $websiteBody->login_reg_css(); ?>
<script src="js/registration.js"></script>

<!--****** Head of the Website******-->

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <?php $websiteBody->header(); ?>
        <!-- end header section -->
    </div>

    <!-- contact section -->

    <section class="login-form layout_padding">

        <div class="container">
            <h1>Login</h1>
            <br>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control username" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="username">Password:</label>
                <input type="password" class="form-control password" id="password" placeholder="Password">
            </div>



        </div>
        <!-- Add a margin top to create space between form and links -->
        <div class="login-link row">
            <a href="#" class="forgot-pass">Forgot Password</a> <!-- Add margin right to the first link -->
            <a href="registration.php">Register</a>
        </div>

        
            <button type="submit" class="login-btn btn-primary">Login</button>
        

    </section>

    <!-- end contact section -->

    <?php $websiteBody->footer(); ?>

    <?php $websiteBody->script(); ?>

</body>

</html>