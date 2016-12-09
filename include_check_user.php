<?php
    require_once ("include_connect.php");
    session_start ();

    $mail = $_SESSION ["mail"];
    $number = $_SESSION ["phone"];


    $query = "SELECT * FROM `users` WHERE `mail`='$mail' AND `phone`=$number";
    $result = mysql_query ($query);
    if($result) {
        if (mysql_num_rows($result) != 1) {
            header ("location: login.php");
        }
    } else {
        header ("location: login.php");
    }

    $user_details = mysql_fetch_assoc($result);
?>