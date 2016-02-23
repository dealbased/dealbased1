<?php
    session_start();
    $email = $_POST ['email'];
    // th eline with the username got deleted? wait...the username variable you have to get it from the sql...all you have is the email address yeh i dont want username ... no username to log in client will use email .. its working ... normal ... its the firstname that we want to put on header. yes thats what i mean...you have to get the firstname from sql.... yeh so ?
    $password = $_POST ['password'];
    $_SESSION['systemMessage'] = '';
    $_SESSION['systemMessageSuccess']='';
    
    $user_id = '';
    
    if ($email&&$password)
    {
        $connect = mysql_connect("localhost","dealldsx_dealers","Qq03049835") or die ("Couldn't connect!");
                                 mysql_select_db("dealldsx_dealers") or die ("Couldn't Find DB!");
        
        
        $query = mysql_query("SELECT * FROM users WHERE email = '".$email."' ");
        $numrows = mysql_num_rows($query);
        
        if ($numrows!=0)
        {
            while ($row = mysql_fetch_assoc($query))
            {
                $dbemail = $row ['email'];
                $dbpassword = $row ['password'];
                $firstname = $row['firstname'];
                $user_id = $row ['id'];
							$user_name=$row['username'];
            }
            
            if ($email == $dbemail && $password == $dbpassword)
            {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $user_name;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['systemMessageSuccess'] = "Hi $firstname, you're Logged In! Enjoy our Daily deals :) ";
                $_SESSION ['email'] = $email;
                $query = mysql_query("UPDATE users SET status='Online' WHERE email = '".$email."'");

            }
            
            else $_SESSION['systemMessage'] = "Bad Password";
        }
        else $_SESSION['systemMessage'] = "That Email Address is invalid";
        
    }
    else $_SESSION['systemMessage']="Please enter Email Address and Password";
    
    header("Location: RegisterLogin.php");
    


