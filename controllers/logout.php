<?php
session_start();
include('../config/Config.php');
//destroy the session
session_unset();
//redirect to login page
header("location: ../login.php");
?>