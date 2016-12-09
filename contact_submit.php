<?php
$name = $_POST ["name"];
$email = $_POST ["email"];
$mail = $email;
$message = $_POST ["message"];

$to = "$mail";
$subject = "You have a new Contact Request";
    
$message = "
            <!DOCTYPE html>
                <html>
                    <head>
                        <meta charset=\"utf-8\">
                        <title>you have a new Contact Request</title>
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
                            <h1>From: $name</h1>
                                                
                            <p>
                                Message: $message
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
$headers .= 'From: '.$mail. " \r\n";
    
mail($to,$subject,$message,$headers);

//Clearing the Output Buffer
ob_flush ();
$return_object = new stdClass;
$return_object->response = "success";
echo (json_encode($return_object));


?>