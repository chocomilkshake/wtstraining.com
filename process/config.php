<?php

/**
* Description  : Main script for redirection to the correct directory
* Author       : JOHN MICHAEL mASMELA.
* Date Created  : MARCH. 17, 2023
* Date Modified : MARCH. 17, 2023
* Revised By   : JOHN MICHAEL mASMELA. 
*/



   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'wtstraining');
   $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $con->set_charset("utf8mb4");
?>