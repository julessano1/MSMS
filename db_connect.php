<?php

$conn = new mysqli("localhost", "root", "", "medicalstore");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>