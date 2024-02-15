<?php 
include '../process/config.php';
require_once 'address.class.php';
$addressData = new Address();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['city'])) {
        $citymunCode = $_POST['city'];
        echo "<option value='' disabled selected>Select Barangay</option>";
        $addressData->brgy($con, $citymunCode); // Corrected method call
        exit(); // Stop further execution after handling the AJAX request
    }
}
?>