<?php
$allowed_ips = ['YOUR_OFFICE_IP']; // Add more IPs if needed

if (!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips)) {
    die("Access denied.");
}
?>
