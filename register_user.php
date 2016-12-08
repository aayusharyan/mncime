<?php
    require_once ("include_connect.php");

    $all_ok = true;

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

    $title = clean_text ("title");
    $first_name = clean_text ("first_name");
    $middle_name = clean_text ("middle_name");
    $last_name = clean_text ("last_name");
    $designation = clean_text ("designation");
    $department = clean_text ("department");
    $institute = clean_text ("institute");
    $address = clean_text ("address");
    $number = clean_text ("number");
    $mail = clean_text ("mail");
    $accomodation = clean_text ("accomodation");
    $tour = clean_text ("tour");
    $importance = clean_text ("importance");

    $all_ok = true;

    if ($all_ok) {
        $to = "$mail";
        $subject = "Thank you for Registering with us";

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
                                        <p>You have successfull registered, use your Registered Email Id and Registered Phone number to login and Proceed to the next steps:</p>
                                        <p>
                                            Your Registration Details are As Follows:
                                            $title: $first_name $middle_name $last_name<br />
                                            $designation: $department, $institute<br />
                                            Address: $address<br />
                                            Mobile Number: $number<br />
                                            EMail Id: $mail<br />
                                            Accomodation Required: $accomodation<br />
                                            Interested In Lonavala Tour: $tour<br />
                                            I am a: $importance<br />
                                        </p>
                                        <p id=\"footer\">Thanks - <a href=\"https://github.com/niutech\">Sinhgad Institute of Technology</a></p>
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
        
        $query = "INSERT INTO `users` (`mail`, `phone`, `type`) VALUES ('$mail', '$number', '$importance')";
        $result = mysql_query ($query);
        
        if ($result) {
            $return_to = "info@domain.com";
            $return_subject = "New Registration";

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
                                            <h1>You have a new Registration.</h1>
                                            <p>
                                                The Registration Details are As Follows:
                                                $title: $first_name $middle_name $last_name<br />
                                                $designation: $department, $institute<br />
                                                Address: $address<br />
                                                Mobile Number: $number<br />
                                                EMail Id: $mail<br />
                                                Accomodation Required: $accomodation<br />
                                                Interested In Lonavala Tour: $tour<br />
                                                I am a: $importance<br />
                                            </p>
                                            <p id=\"footer\">Thanks - <a href=\"https://github.com/niutech\">Sinhgad Institute of Technology</a></p>
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
        }
        
    }


?>