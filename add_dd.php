<?php
    require_once ("include_connect.php");
    require_once ("include_check_user.php");
    session_start ();

    $all_ok = true;

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

    $dd_number = clean_text ("dd_number");
    $dd_amount = clean_text ("dd_amount");
    $dd_bank_name = clean_text ("dd_bank_name");
    $all_ok = true;

    if ($all_ok) {
        
        $query = "UPDATE `users` SET `paid`=1 WHERE 1";
        $result = mysql_query ($query);
        
        echo mysql_error ();
       
        
        
        
        if ($result) {
            
            $mail = $user_details ["mail"];
            $to = "$mail";
            $subject = "Thank you for Completing the Registration with us";

            $message = "
                        <!DOCTYPE html>
                            <html>
                                <head>
                                    <meta charset=\"utf-8\">
                                        <title>Thank you for Registering with us</title>
                                            <style>
                                                body {
                                                    font: 12px 'Helvetica Neue', Helvetica, Arial, freesans, clean, sans-serif;
                                                    color: #333;
                                                }
                                                h1 {
                                                    font-size: 20px;
                                                }
                                                a {
                                                    color: #666;
                                                }
                                                form {
                                                    padding: 20px;
                                                    text-align: center;
                                                }
                                                strong {
                                                    color: #333;
                                                    background-color: #FAFFA6;
                                                    padding: 0.1em;
                                                }
                                                #footer {
                                                    margin: 20px 0;
                                                    font-size: 10px;
                                                    color: #666;
                                                }
                                            </style>
                                        </head>
                                    <body>
                                        <form id=\"previewform\" action=\"\">
                                            <h1>Thank you for Registering with us.</h1>
                                            <p>You have successfull registered and paid.</p>
                                            <p>
                                                Your Payment are As Follows:<br />
                                                Method: Demand Draft<br/ >
                                                Bank Name: $dd_bank_name<br />
                                                DD Number: $dd_number<br/ >
                                                Amount: $dd_amount<br />
                                            </p>
                                            <p id=\"footer\">Thanks - <a href=\"#\">Sinhgad Institute of Technology</a></p>
                                        </form>
                                    <script src=\"/htmlpreview.min.js\"></script>
                                    <script>HTMLPreview.init();</script>
                                </body>
                            </html>
                        ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: info@domain.com' . "\r\n";

            mail($to,$subject,$message,$headers);
            
            
            $mobile_number = $user_details ["phone"];
            
            $return_to = "info@domain.com";
            $return_subject = "New Payment";

            $return_message = "
                        <!DOCTYPE html>
                            <html>
                                <head>
                                    <meta charset=\"utf-8\">
                                        <title>You have a New Registration</title>
                                            <style>
                                                body {
                                                    font: 12px 'Helvetica Neue', Helvetica, Arial, freesans, clean, sans-serif;
                                                    color: #333;
                                                }
                                                h1 {
                                                    font-size: 20px;
                                                }
                                                a {
                                                    color: #666;
                                                }
                                                form {
                                                    padding: 20px;
                                                    text-align: center;
                                                }
                                                strong {
                                                    color: #333;
                                                    background-color: #FAFFA6;
                                                    padding: 0.1em;
                                                }
                                                #footer {
                                                    margin: 20px 0;
                                                    font-size: 10px;
                                                    color: #666;
                                                }
                                            </style>
                                        </head>
                                    <body>
                                        <form id=\"previewform\" action=\"\">
                                            <h1>You have a new Payment.</h1>
                                            <p>
                                                Your Payment are As Follows:<br />
                                                Method: Demand Draft<br/ >
                                                From Mail: $mail<br />
                                                From Mobile Number: $mobile_number<br />
                                                Bank Name: $dd_bank_name<br />
                                                DD Number: $dd_number<br/ >
                                                Amount: $dd_amount<br />
                                            </p>
                                            <p id=\"footer\">Thanks - <a href=\"#\">Sinhgad Institute of Technology</a></p>
                                        </form>
                                    <script src=\"/htmlpreview.min.js\"></script>
                                    <script>HTMLPreview.init();</script>
                                </body>
                            </html>
                        ";

            // Always set content-type when sending HTML email
            $return_headers = "MIME-Version: 1.0" . "\r\n";
            $return_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $return_headers .= 'From: ' . $mail . " \r\n";

            mail($return_to,$return_subject,$return_message,$return_headers);
            
            $_SESSION ["mail"] = $mail;
            $_SESSION ["phone"] = $number;
            
            header ("location: thank_you.php");
            
            
        }
        
    }


?>