<?php
    
    session_start();
    $servername = "localhost";
    $username = "dealldsx_dealers";
    $password = "Qq03049835";
    $dbname = "dealldsx_dealers";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
   $sql = "select * FROM articles join users on user_id=users.id WHERE uid='".$_REQUEST['uid']."'";
   $result = mysqli_query($conn, $sql);
   $rowCount = mysqli_num_rows($result);
   $row = mysqli_fetch_assoc($result);
    ?>

<!DOCTYPE html>
<html>
<title>Contact Share Seller Deal</title>
<?php
    
    
    include('Header.php');
    ?>

 

<img src="<?php echo $row['id'];?>" alt="Smiley face" height="42" width="42">

<div id="main" class="site-main">

<div class="container active-sidebar">
<div id="primary" class="content-area">

<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper ">


</div>



<header class="page-header">
<h1 class="page-title">
Profile Picture:</h1>
</header>

Profile Picture
<br><br><br>


<header class="page-header">
<h1 class="page-title">
Full Name:</h1>
</header>

<?php echo $row['firstname'];?> <?php echo $row['lastname'];?>
<br><br><br>


<header class="page-header">
<h1 class="page-title">
User ID:</h1>
</header>

<?php echo $row['id'];?>
<br><br><br>


<header class="page-header">
<h1 class="page-title">
Email:</header>

<?php echo $row['email'];?><br><br><br>



<header class="page-header">
<h1 class="page-title">
My Ad(s):</h1>
</header>



<table>
<?php

$sql = "select * from articles where user_id='".$row['id']."'";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);

    while ($row2 = mysqli_fetch_assoc($result)) {
//        print_r($row);
        ?>
<tr>
<td>
<a href="ContactSeller.php?uid=<?php echo $row2['uid']?>">Link</a>
</td>

<td>
  <?php echo $row2['title'] ?>
</td>
    

</tr>
<?php
     }
    
    
?>


Delete my ad.

Ad id:
<br><br><br>
</table>




</div><!-- .entry-content -->
</div><!-- #post -->
</div><!-- #content -->
</div><!-- #primary -->



</div></div></div></div></div></div></div>            </div><!-- .widget-area -->
</div><!-- .sidebar-inner -->
</div><!-- #tertiary -->
</div>

</div><!-- #main -->











</div><!-- #page -->

?>


<?php
    
    include('Footer.php');
    
    // should the html code before this php be deleted?
    ?>

</body>
</html>