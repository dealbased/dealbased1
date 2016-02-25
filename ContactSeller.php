<?php
    
    session_start();
    $servername = "localhost";
    $username = "dealldsx_dealers";
    $password = "Qq03049835";
    $dbname = "dealldsx_dealers";
    include './local_connection.php';
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    include('Header.php');
    ?>

<?php
    $addId = $_GET['uid'];
    if (!isset($addId)) {
        die("No add selected");
    }
    $sql = "SELECT * FROM articles WHERE uid='$addId'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    
    if ($rowCount == 0) {
        die('The selected add is not present in our database');
    }
    if ($rowCount > 1) {
        die('Multiple add present with the same uid');
    }
    $row = mysqli_fetch_assoc($result);
    ?>


<!DOCTYPE html>
<html>
<title><?php echo $row['title']; ?></title>

<div id="main" class="site-main">

<div class="container active-sidebar">
<div id="primary" class="content-area">

<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h4><?php echo $row['title']; ?></h4>
<p>
<?php echo $row['details']; ?>
</div>
</div>
<header class="page-header">
<h1 class="page-title">
Contact        </h1>
</header>
<div id="content" class="site-content" role="main">
<div id="post-68" class="entry post-68 page type-page status-publish hentry">
<div class="entry-content">
<div class="vc_row wpb_row vc_row-fluid"><div class="row"><div class="h-padding-0 wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="wpb_gmaps_widget wpb_content_element">
<div class="wpb_wrapper">
<div class="wpb_map_wraper">
    <?php 
                   if(!empty($row['address'])){?>
                <iframe width="100%" 
                        height="standard" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBRh-luFPocbBNGpLFz-LlzX37seaB1JZw&q=<?php echo $row['address'];?>">
                                                        </iframe>
                   <?php }else{echo "Location not available";} ?>
</div>
</div>
</div>



<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
</div>
</div> <div role="form" class="wpcf7" id="wpcf7-f69-p68-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>


<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div></div></div>
</div><!-- .entry-content -->
</div><!-- #post -->
</div><!-- #content -->
</div><!-- #primary -->



<div id="tertiary" class="sidebar-container shop" role="complementary">


<div class="sidebar-inner">
<img src="<?php echo $row['image_url'];?>" height="320p" data-width="440" data-height="320"><br> <br>




</div>
</div>
</div></div></div></div></div></div></div></div>            </div><!-- .widget-area -->
</div><!-- .sidebar-inner -->
</div><!-- #tertiary -->
</div>

</div><!-- #main -->











</div><!-- #page -->

<?php
    
    include('Footer.php');
    
    // should the html code before this php be deleted?
    ?>

</body>
</html>

