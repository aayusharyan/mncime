<?php
    
    require_once ("include_connect.php");
    session_start ();

    function clean_text ($parameter) {
        global $all_ok;
        global $_POST;
        if (isset ($_POST [$parameter])) {
            $value = stripslashes($_POST [$parameter]);
            $value = trim($value);
            if ($value != "") {
                return $value;
            } else {
                $all_ok = false;
            }
        } else {
            $all_ok = false;
        }
    }


    $mail = clean_text ("mail");
    $number = clean_text ("number");

    $query = "SELECT * FROM `users` WHERE `mail`='$mail' AND `phone`='$number'";
    $result = mysql_query ($query);
    if($result) {
        if (mysql_num_rows($result) == 1) {
            $row = mysql_fetch_assoc($result);
            
            $_SESSION ["mail"] = $row ["mail"];
            $_SESSION ["phone"] = $row ["phone"];
            
            if ($row ["paid"] != 0) {
                header ("location: thank_you.php");
            } else {
                if ($row ["type"] == "Listener/Attendee") {
                    //Directly Redirect to Payment Page
                    
                    header ("location: payment.php");
                    
                    
                } elseif ($row ["type"] == "Paper Presentor") {
                    
                    if ($row ["uploaded"] == 1) {
                        
                        header ("location: please_wait.php");
                    } elseif ($row ["uploaded"] == 0) {
                        header ("location: upload_file.php");
                    } else {
                        header ("location: login.php");
                    }
                    
                    
                    
                } else {
                    header ("location: login.php");
                }
            }
            var_dump($row);
        }
    } else {
        header ("location: login.php");
    }




?>