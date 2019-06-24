<?php
//conectar base de datos
$servername = "localhost";
$username = "root";
$password = "Daniel456";
$dbname = "ck_editor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 





