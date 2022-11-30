<?php

$conn = mysqli_connect("localhost", "root", "", "futuer");

if (!$conn) {
    echo "Connection Failed";
}