<?php

$conn = mysqli_connect("localhost", "root", "", "iot");

if (!$conn) {
    echo "Connection Failed";
}