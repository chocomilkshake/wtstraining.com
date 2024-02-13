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

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Request A Call back
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <?php $websiteBody->footer(); ?>

  <?php $websiteBody->script(); ?>

</body>

</html>