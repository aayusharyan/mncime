<?php
    require_once ("include_connect.php");

    function clean_text ($parameter) {
        global $all_ok;
        if (isset ($_post [$parameter])) {
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
$mail = "a123@domain.com";
    $number = clean_text ("number");
$number = 0;

    $query = "SELECT * FROM `users` WHERE `mail`='$mail' AND `phone`=$number";
    $result = mysql_query ($query);
    if($result) {
        if (mysql_num_rows($result) == 1) {
            $row = mysql_fetch_assoc($result);
            if ($row ["paid"] != 0) {
                //Redirect to Success Message, Thank You Page
            } else {
                if ($row ["type"] == "Listener/Attendee") {
                    //Directly Redirect to Payment Page
                } elseif ($row ["type"] == "Paper Presentor") {
                    
                    if ($row ["uploaded"] == 1) {
                        //Redirect to Payment Page
                    } elseif ($row ["uploaded"] == 0) {
                        //Redirect to Upload Page
                    } else {
                        //Redirect to Login Page, showing an Error
                    }
                    
                    
                    
                } else {
                    //Redirect to Login Page, showing error
                }
            }
            var_dump($row);
        }
    }




?>