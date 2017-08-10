<?php
if (session_status() == PHP_SESSION_NONE) {
    die("Logged out");
}
session_unset();
session_destroy(); 
die("Logged out");
?>