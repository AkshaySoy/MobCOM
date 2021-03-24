<?php

session_start();

if (session_destroy()) {

    unset($_SESSION['logout_message']);
    header('location: index.php');
    
}




