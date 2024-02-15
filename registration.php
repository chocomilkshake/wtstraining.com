<!DOCTYPE html>
<html lang="en">
<?php
include 'process/config.php';
require_once 'include/website_body.class.php';
require_once 'include/address.class.php';

$websiteBody = new website_body();
$addressData = new Address();
?>

<!--****** Head of the Website******-->

<?php $websiteBody->head(); ?>
<script src="js/registration.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/address_ajx.js"></script>
<?php $websiteBody->login_reg_css(); ?>

<!--****** Head of the Website******-->

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <?php $websiteBody->header(); ?>
        <!-- end header section -->
    </div>

    <section class="registration layout_padding">
        <div class="container d-flex justify-content-center">

            <div class="registation-contain">
                <h1>Application Form</h1>
                <br>

                <!--=============== Start of First Page ===============-->
                <div id="firstPage" style="display:none;">
                    <div class="row">
                        <div class="form-group select-field">
                            <label for="tilteofAssessment">Title of Assessment Applied for<span
                                    style="color:red;">*</span>:</label>
                            <select class="form-control select-form" name="tilteofAssessment" id="tilteofAssessment"
                                required>
                                <option value="" disabled selected>Select Title of Assessment</option>
                                <option value="">Full Qualification</option>
                                <option value="">Certificate Of Competency (COC)</option>
                                <option value="">Renewal</option>
                            </select>
                        </div>

                        <div class="form-group select-field">
                            <label for="clientType">Client Type<span style="color:red;">*</span>:</label>
                            <select class="form-control select-form" name="clientType" id="clientType" required>
                                <option value="" disabled selected>Select client type</option>
                                <option value="">TVET Graduating Student</option>
                                <option value="">TVET Graduate</option>
                                <option value="">Industry Worker</option>
                                <option value="">K-12</option>
                                <option value="">OFW</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <h3 class="select-field">Profile</h3>
                    <hr>
                    <br>
                    <div class="row">

                        <div class="select-field">

                            <div class="form-group">
                                <label for=""> Surname<span style="color:red;">*</span>:</label>
                                <input type="text" class="form-control select-form" id="" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">First Name<span style="color:red;">*</span>:</label>
                                <input type="text" class="form-control select-form" id="" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="">Middle Name:</label>
                                <input type="text" class="form-control select-form" id="middleName" name="middleName"
                                    placeholder="Middle Name" onkeyup="getInitial()" />
                            </div>

                        </div>

                        <div class="select-field">

                            <div class="form-group">
                                <label for="">Middle Initial:</label>
                                <input type="text" class="form-control small-form" id="middleInitial"
                                    name="middleInitial" placeholder="Middle Initial" readonly>
                            </div>

                            <div class="form-group">
                                <label for="">Name Ext.:</label>
                                <input type="text" class="form-control small-form" id="middleInitial"
                                    name="middleInitial" placeholder="Name Extension">
                            </div>

                        </div>

                    </div>

                    <button>Next</button>
                </div>
                <!--=============== End of First Page ===============-->

                <!--=============== Start of Second Page ===============-->
                <div id="secondPage" style="display:;">

                    <div class="form-group street-group">
                        <label for="">Number, Street:</label>
                        <input type="text" class="form-control street-form" id="" name="" placeholder="">
                    </div>

                    <div class="row">
                        <div class="form-group select-field">
                            <label for="region">Region<span style="color:red;">*</span>:</label>
                            <select class="form-control address-form" name="region" id="region" required>
                                <option value="" disabled selected>Select Region</option>
                                <?php $addressData->region($con) ?>
                            </select>
                        </div>

                        <div class="form-group select-field">
                            <label for="">Province<span style="color:red;">*</span>:</label>
                            <select class="form-control province-form" name="province" id="province" required>
                                <option value="" disabled selected>Select Province</option>
                            </select>
                        </div>

                        <div class="form-group select-field">
                            <label for="">District:</label>
                            <input type="text" class="form-control small-form" id="" name="" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group select-field">
                            <label for="city">City/Municipality<span style="color:red;">*</span>:</label>
                            <select class="form-control address-form" name="city" id="city" required>
                                <option value="" disabled selected>City/Municipality</option>
                            </select>
                        </div>

                        <div class="form-group select-field">
                            <label for="brgy">Barangay<span style="color:red;">*</span>:</label>
                            <select class="form-control province-form" name="brgy" id="brgy" required>
                                <option value="" disabled selected>Select Barangay</option>
                            </select>
                        </div>

                        <div class="form-group select-field">
                            <label for="">Zip Code:</label>
                            <input type="text" class="form-control small-form" id="" name="" placeholder="">
                        </div>
                    </div>
                    <button>Prev</button>
                    <button>Next</button>
                </div>
                <!--=============== End of Second Page ===============-->

                <!--=============== Start of Second Page ===============-->
                <div id="secondPage" style="display:;">

                    <div class="form-group street-group">
                        <label for="">Number, Street:</label>
                        <input type="text" class="form-control street-form" id="" name="" placeholder="">
                    </div>

                    <div class="row">
                        <div class="form-group select-field">
                            <label for="region">Region<span style="color:red;">*</span>:</label>
                            <select class="form-control address-form" name="region" id="region" required>
                                <option value="" disabled selected>Select Region</option>
                                <?php $addressData->region($con) ?>
                            </select>
                        </div>

                        <div class="form-group select-field">
                            <label for="">Province<span style="color:red;">*</span>:</label>
                            <select class="form-control province-form" name="province" id="province" required>
                                <option value="" disabled selected>Select Province</option>
                            </select>
                        </div>

                        <div class="form-group select-field">
                            <label for="">District:</label>
                            <input type="text" class="form-control small-form" id="" name="" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group select-field">
                            <label for="city">City/Municipality<span style="color:red;">*</span>:</label>
                            <select class="form-control address-form" name="city" id="city" required>
                                <option value="" disabled selected>City/Municipality</option>
                            </select>
                        </div>

                        <div class="form-group select-field">
                            <label for="brgy">Barangay<span style="color:red;">*</span>:</label>
                            <select class="form-control province-form" name="brgy" id="brgy" required>
                                <option value="" disabled selected>Select Barangay</option>
                            </select>
                        </div>

                        <div class="form-group select-field">
                            <label for="">Zip Code:</label>
                            <input type="text" class="form-control small-form" id="" name="" placeholder="">
                        </div>
                    </div>
                    <button>Prev</button>
                    <button>Next</button>
                </div>
                <!--=============== End of Second Page ===============-->



            </div>
            <form method="post" action="">
            </form>
        </div>
    </section>

    <!-- end contact section -->

    <?php $websiteBody->footer(); ?>

    <?php $websiteBody->script(); ?>

</body>

</html>