<?php 
// session_start();

if (!isset($_SESSION['estudiante'])) {
    header("Location: ../../index.php");
    exit();
}