<?php

    function sendEmail($receiver, $subject, $message, $from, $name){
        mail($receiver, $subject, $message, "From: ".$name." <".$from.">\r\n"
             ."Reply-To: ".$email."\r\n"
             ."MIME-Version: 1.0\r\n"
             ."Content-Type: text/html; charset=UTF-8\r\n"
             ."X-Mailer: PHP/" . phpversion());}
    
    
    session_start();
    $submit  = $_POST['submit'];
    $_SESSION['firstname'] = $firstname = strip_tags ($_POST ['firstname']);
    $lastname = strip_tags ($_POST ['lastname']);
    
    $email = strtolower(strip_tags ($_POST ['email']));
    $password = strip_tags ($_POST ['password']);
    $repeatpassword = strip_tags ($_POST ['repeatpassword']);
    
    
    $date = date ("Y-m-d");
    
    $_SESSION['systemMessageReg']='';
    $_SESSION['systemMessageRegSuccess']='';
    
    
    if($submit)
    
    {
        
        $connect = mysql_connect("localhost","dealldsx_dealers","Qq03049835") or die ("Couldn't connect!");
        mysql_select_db("dealldsx_dealers") or die ("Couldn't Find DB!"); // check if user already exist
        
        $namecheck = mysql_query ("select email from users where email = '$email' ");
        $count = mysql_num_rows($namecheck);
        
        if ($count!=0)
        {
            $_SESSION['systemMessageReg'] = "email already taken";
        } else {
            
            if($firstname   && $lastname && $password && $email && $repeatpassword)
            {
                
                if ($password == $repeatpassword)
                {
                    
                    if (strlen ($email) >25 || strlen ($firstname)>25 || strlen ($lastname)>25)
                    {
                        $_SESSION['systemMessageReg'] = "Its too long it won't fit into our Database :( Max 25 Character!";
                    }
                    
                    else
                    {
                        if (strlen($password)>25||strlen($password)<6)
                        {
                            $_SESSION['systemMessageReg'] = "Password must be between 6 and 25 characters!";
                        }
                        //else
                        //    $password = md5 ($password);
                        //$repeatpassword = md5 ($repeatpassword);
                        
                        $connect = mysql_connect("localhost","dealldsx_dealers","Qq03049835") or die ("Couldn't connect!");
                        mysql_select_db("dealldsx_dealers") or die ("Couldn't Find DB!");
                        $queryreg = mysql_query("
                                                INSERT INTO users VALUES ('$email','$firstname','$lastname','$date','$password','','','','')
                                                ");
                                                
                                                }
                                                $_SESSION['systemMessageRegSuccess'] = "Welcome $firstname, please verify you E-mail";
                                                $uid = mysql_insert_id();
                                                $link = "RegisterLogin.php?uid=$uid";
                                                sendEmail( $email , "Please verify your E-mail", 'Please copy this link into your browser <a href="'.$link.'">link</a>  to verify your E-mail', "contact@dealbase.ca", "Admin");
                                                }
                                                else $_SESSION['systemMessageReg'] = "Your Password don't match";
                                                }
                                                else { 
                                                $_SESSION['systemMessageReg'] = " Please fill in all fields";
                                                }
                                                }
                                                header("Location: RegisterLogin.php");
                                                
                                                } // end if submit
                                                
                                                // https://www.youtube.com/watch?v=JhLnS0mXr0M
                                                
                                                header("Location: RegisterLogin.php");
                                                
                                                
 
