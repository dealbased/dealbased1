<?php
    
    $connect = mysql_connect("localhost","root","1111") or die ("Couldn't connect!");
    mysql_select_db("dealldsx_dealers") or die ("Couldn't Find DB!");
    
    $result = mysql_query ("select email from users");
    
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        echo("Email: ".$row[0]."<br />");
    }
    
    ?>




