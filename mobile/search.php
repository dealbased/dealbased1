<?php
    
    mysql_connect("localhost","dealldsx_dealers","Qq03049835") or die ("Could not connect");
    mysql_select_db ("dealldsx_dealers") or die ("Could not find db");
    $output = '';
    
    if(isset($_POST['search'])) {
        $searchq=$_POST['search'];
        $searchq = preg_replace ("#[^0-9a-z]#i","",$searchq);
        
        $query = mysql_query("select * from articles where title like '%$searchq%' ") or die ("Could not search!");
        $count = mysql_num_rows($query);
        if ($count == 0) {
            $output = 'There was no search result!';
        }
        else {
            while ($row = mysql_fetch_array($query)){
                $title = $row['title'];
                $output .='<div>'.$title.'</div>';
                
            }
            
            
        }
    }
?>



<html>
<body>
<form method="post"  action="search.php">
<input type="text" name="search" value="" placeholder="Enter keywords here">
<input type="submit" value = "click" >
</form>

<?php.print("$output");?>

</body>
</html>