<?php 
include '../process/config.php';
require_once 'address.class.php';
$addressData = new Address();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['region'])) {
        $regCode = $_POST['region'];
        echo "<option value='' disabled selected>Select Province</option>";
        $addressData->province($con, $regCode); // Corrected method call
        exit(); // Stop further execution after handling the AJAX request
    }
}
?>