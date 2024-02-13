<!DOCTYPE html>
<html lang="en">
<?php
require_once 'include/website_body.class.php';

$websiteBody = new website_body();
?>

<!--****** Head of the Website******-->

<?php $websiteBody->head(); ?>

<!--****** Head of the Website******-->

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php $websiteBody->header(); ?>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="registration layout_padding">
    
  </section>

  <!-- end contact section -->

  <?php $websiteBody->footer(); ?>

  <?php $websiteBody->script(); ?>

</body>

</html>