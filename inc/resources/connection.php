<?php 
// Local
/* $dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "netmatters"; */

// cPanel
$dbhost = "localhost";
$dbuser = "othellod_othellodeemi";
$dbpass = "270301Lonestar1!";
$dbname = "othellod_netmatters";


$conn =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname,);

/* if ($conn) {
    echo "Connected to database";
} else {
    echo "Connection failed";
} */