<?php 
// session_start();

if (!isset($_SESSION['admin'])) {
    if (!isset($_SESSION['user_email_address'])) {
        header("Location: ../../index.php");
        exit();
    } else {
        $emailUser = $_SESSION['user_email_address'];

        $allowed_emails = array("xdxd123asd@gmail.com", "angelhuaman2805@gmail.com", "angelots2005@gmail.com", "angelots2017@gmail.com");

        if (!in_array($emailUser, $allowed_emails)) {
            header("Location: ../../index.php");
        } 
    }
}  