<?php
class website_body
{


    public function head()
    {
        ?>

        <head>
            <!-- Basic -->
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <!-- Site Metas -->
            <meta name="keywords" content="" />
            <meta name="description" content="" />
            <meta name="author" content="" />

            <title>WTS TRAINING</title>


            <!-- bootstrap core css -->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

            <!-- font awesome style -->
            <link href="css/font-awesome.min.css" rel="stylesheet" />

            <!-- Custom styles for this template -->
            <link href="css/style.css" rel="stylesheet" />
            <!-- responsive style -->
            <link href="css/responsive.css" rel="stylesheet" />

        </head>
        <?php
    }
    public function header()
    {
        ?>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php">
                        <span>
                            WTS TRAINING
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                        <div class="quote_btn-container">
                            <a href="login.php" class="quote_btn">
                                Login/Register
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <?php
    }
    public function footer()
    {
        ?>
        <div class="footer_container">
            <!-- info section -->

            <section class="info_section ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 ">
                            <div class="info_detail">
                                <h4>
                                    WTS TRAINING
                                </h4>
                                <p>
                                    Necessary, making this the first true generator on the Internet. It uses a dictionary of
                                    over 200 Latin words, combined with a handful
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 mx-auto">
                            <div class="info_link_box">
                                <h4>
                                    Links
                                </h4>
                                <div class="info_links">
                                    <a class="" href="index.html">
                                        Home
                                    </a>
                                    <a class="" href="about.html">
                                        About
                                    </a>
                                    <a class="" href="service.html">
                                        Services
                                    </a>
                                    <a class="" href="contact.html">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 ">
                            <h4>
                                Subscribe
                            </h4>
                            <form action="#">
                                <input type="text" placeholder="Enter email" />
                                <button type="submit">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-0 ml-auto">
                            <div class="info_contact">
                                <h4>
                                    Address
                                </h4>
                                <div class="contact_link_box">
                                    <a href="">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>
                                            Location
                                        </span>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span>
                                            Call +01 1234567890
                                        </span>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>
                                            demo@gmail.com
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="info_social">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- end info section -->

            <!-- footer section -->
            <footer class="footer_section">
                <div class="container">
                    <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By
                        <a href="https://html.design/">Free Html Templates</a>
                    </p>
                </div>
            </footer>
            <!-- footer section -->
        </div>
        <?php
    }
    public function script()
    {
        ?>
        <!-- jQery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.js"></script>
        <script src="js/custom.js"></script>
        <!-- Google Map -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
        <!-- End Google Map -->
        <?php
    }

    public function login_reg_css()
    {
        ?>
        <link href="css/login.css" rel="stylesheet" />
        <?php
    }

}