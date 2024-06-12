<?php
$servername = "localhost";
$dbusername = "id22306897_root";
$dbpassword = "Umbusurya_09";
$dbname = "id22306897_webuas";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
