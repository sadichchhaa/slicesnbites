<?php
include_once('config.php');
session_start();
//destroy the session
session_unset();
//redirect to login page
header("location: home.html");
?>