<?php
    
    require_once ("include_check_user.php");

    $target_dir = "papers/";
    $target_file = $target_dir .$user_details["id"]."-". basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


    //Defining the Webaddress of the server root as a variable, for easy access
    $web_root = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http'."://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/";
    



    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }


    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            
            
            $query = "UPDATE `users` SET `uploaded`=1 WHERE `mail`='".$user_details ["mail"]."' AND `phone`=".$user_details ["phone"]."";
            
            mysql_query($query);
            
            
            $mail = $user_details ["mail"];
            $to = "$mail";
            $subject = "Thank you for Uploading the File";

            $message = "
                        <!DOCTYPE html>
                            <html>
                                <head>
                                    <meta charset=\"utf-8\">
                                        <title>Thank you for sharing your work with us</title>
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
                                            <h1>Thank you for Sharing your Work with us.</h1>
                                            <p>You have uploaded your file.</p>
                                            <p>
                                                You can download a copy of the file by clicking on the link below:<br />
                                                <a href=\"$web_root/$target_file\">Click Here to Download.</a>
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
            $return_subject = "New File Upload";

            $return_message = "
                        <!DOCTYPE html>
                            <html>
                                <head>
                                    <meta charset=\"utf-8\">
                                        <title>you have a new File Upload</title>
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
                                            <h1>You have a New File Upload.</h1>
                                            <p>
                                                A Paper Presentor has shared their work with you:<br />
                                                From Mail: $mail<br />
                                                From Mobile Number: $mobile_number<br />
                                                <a href=\"$web_root/$target_file\">Click Here to download</a>
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
            
            
            
            
            
            
            
            header ("location: please_wait.php");
            
            
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }   
    }
?>
