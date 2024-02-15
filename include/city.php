<?php 
include '../process/config.php';
require_once 'address.class.php';
$addressData = new Address();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['province'])) {
        $provCode = $_POST['province'];
        echo "<option value='' disabled selected>Select City/Municipality</option>";
        $addressData->city($con, $provCode); // Corrected method call
        exit(); // Stop further execution after handling the AJAX request
    }
}
?>