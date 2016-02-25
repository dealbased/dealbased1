<?php
session_start();
    $username = "dealldsx_dealers"; //"dealldsx_dealers";
    $password = "Qq03049835"; //"Qq03049835";
    $dbname = "dealldsx_dealers";
    $servername = "localhost";
    include './local_connection.php';
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $selectedCategory = null;
    if (isset($_GET['category'])) {
        $selectedCategory = $_GET['category'];
    }
    
    $sql = "SELECT articles.*, users.status, users.username FROM articles inner join users on users.id = articles.user_id ";
    $hiddenInputString = "";
    if(isset($_GET['search'])) {
        $searchq =$_GET['search'];
        $searchq = preg_replace ("#[^0-9a-z]#i","",$searchq);
        $sql .= "where title like '%$searchq%' ";

        $inheritSearch = $_GET['search'];
    }
    if (!is_null($selectedCategory)) {
        if (isset($_GET['search'])) {
            $sql .= "and ";
        } else {
            $sql .= "where ";
        }
        $sql .= "categorie = '$selectedCategory'";
    }
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    
    //code to get number of items in each category
    $categoryCountArray = array();
    $countSql = "SELECT * FROM articles";
    $countResult = mysqli_query($conn, $countSql);
    if (mysqli_num_rows($countResult) > 0)
    {
        while($row = mysqli_fetch_assoc($countResult))
        {
            $category = $row['categorie'];
            if (!array_key_exists($category, $categoryCountArray)) {
                $categoryCountArray[$category] = 1;
            } else {
                ++$categoryCountArray[$category];
            }
        }
    }
    
    
    /////////////////------------------------------------------Result Pages Links----------------------------------------------
    $totalAdRows = $rowCount;
    /////////////////
    if($totalAdRows > 0)
    {
        $resultLinksPerPage = 12;                /*--SETTING--*///How many ads do you want to display on each page--\\
        $totalResultPages = ceil($totalAdRows / $resultLinksPerPage); // Calculate how many pages it will take to display all the ad rows(don't change)
        $resultPageLinksPerPage = 15;                                 /*--SETTING--*/// The amount of links to result pages to show on each page
        $currentResultPage = ((isset($_GET['page']))?$_GET['page']:1);// Gets the current page number(don't change)
        if($currentResultPage > $totalResultPages)                    // Check if the current page is greater than the maximum available page
        {                                                             //
            $currentResultPage = $totalResultPages;                   // If it is, then we decrease the current page to the max page, preventing index out of range errors
        }                                                             //
        $firstIndex = ($currentResultPage * $resultLinksPerPage) - $resultLinksPerPage;  //Calculate the starting index in the query result set to start pulling ads from
        $lastIndex = $firstIndex + $resultLinksPerPage-1;                                //Calculate the last index in the query result set to pull
        $attemptPad = ceil($resultPageLinksPerPage / 2)-1;                               //Used to offset the current page to the middle of the line of links
        $start = $currentResultPage - $attemptPad;                                       //Adjust the start
        $end = $start + $resultPageLinksPerPage-1;                                       //Adjust the end
        $lastArrayIndex =  $totalAdRows - 1;
        //Notice that start, and end are similar to $firstindex and $lastindex
        //One set is used to render links, the other set is used to access indexes in the array.
        while($start <= 0) //Since start is less than 0, this isnt good. We need to (cont..)
        {
            $start += 1;  //Increment it until it is greater than 0, because we start with page 1, not page 0
            $end += 1;    //What we do to start, we must also do to end.
        }
        if($end > $totalResultPages) //We do this to make sure that if the last page is centered, that still $resultPageLinksPerPage links are visible.
        {
            $oldEnd = $end; //get the old end value
            $end = $totalResultPages; //Change the old end value to the highest possible
            $diff = $oldEnd - $end; //Calculate how much it has changed
            $newStart = $start - $diff; //Adjust the start , what we do to end, we must do to start too
            if($newStart > 0) //that is, as long as its greater than 0....
            {
                $start = $newStart; //So we set the new value to start
            }
        }
        
        if ($lastIndex > $lastArrayIndex) //now we just make sure that the last index is not out of bounds with the array
        {
            $lastIndex = $lastArrayIndex;//Fix it if it is....
        }
    }
    /////////////////--------------------------------------End Result Pages Links----------------------------------------------
    
    
    
    ?>



    <?php
    
    include('Header.php');
    
    // should the html code before this php be deleted?
    
    ?>


    <link href="chat/public/style/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" type="text/css" />
    <link href="chat/public/style/core.css" rel="stylesheet" type="text/css" />



    <body >
        <style type="text/css">
        .container1 {
            z-index: 999999;
        }
        .minimize{
            display:none;
        }
        </style>
        <div id="main" class="site-main">
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                    <div id="post-25" class="entry post-25 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div class="vc_row wpb_row vc_row-fluid container">
                                <div class="row">


<div class="widget-menu wpb_column vc_column_container vc_col-sm-3">

<div class="wpb_wrapper">

<div class="wpb_widgetised_column wpb_content_element">
<div class="wpb_wrapper">



<div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
<div class="widget-title">
<h3>Categories</h3></div>
<ul class="product-categories">

<li class="cat-item cat-item-37">
<a href="index.php?category=electronics"><img alt="" src="Icons/photo-camera2.svg">
<span>Electronics</span></a> <span class="count">(<?php if (isset($categoryCountArray['electronics'])) echo $categoryCountArray['electronics']; else echo '0' ?>)</span></li>

<li class="cat-item cat-item-22">
<a href="index.php?category=fashion"><img alt="" src="Icons/picture83.svg"><span>Fashion</span></a> 
<span class="count">(<?php if (isset($categoryCountArray['fashion'])) echo $categoryCountArray['fashion']; else echo '0' ?>)</span></li>


<li class="cat-item cat-item-24">
<a href="index.php?category=health"><img alt="" name="health" src="Icons/health-care15.svg"><span>Beauty</span></a> 
<span class="count">(<?php if (isset($categoryCountArray['health'])) echo $categoryCountArray['health']; else echo '0' ?>)</span></li>



<li class="cat-item cat-item-26">
<a href="index.php?category=thingstodo"><img alt="" name="thingstodo" src="Icons/checked27.svg"><span>Things to do</span></a> 
<span class="count">(<?php if (isset($categoryCountArray['thingstodo'])) echo $categoryCountArray['thingstodo']; else echo '0' ?>)</span></li>


<li class="cat-item cat-item-28">
<a href="index.php?category=travel"><img alt="" name="travel" src="Icons/map30.svg"><span>Travel</span></a> 
<span class="count">(<?php if (isset($categoryCountArray['travel'])) echo $categoryCountArray['travel']; else echo '0' ?>)</span></li>

<li class="cat-item cat-item-28">
<a href="index.php?category=restaurants"><img alt="" name="travel" src="Icons/map30.svg"><span>restaurants</span></a> 
<span class="count">(<?php if (isset($categoryCountArray['restaurants'])) echo $categoryCountArray['restaurants']; else echo '0' ?>)</span></li>

<li class="cat-item cat-item-26">
<a href="index.php?category=Services"><img alt="" name="Services" src="Icons/checked27.svg"><span>Services</span></a> 
<span class="count">(<?php if (isset($categoryCountArray['Services'])) echo $categoryCountArray['Services']; else echo '0' ?>)</span></li>

                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
<div class="wpb_column vc_column_container vc_col-sm-9">
<div class="wpb_wrapper">
<div class="posts-list-wrapper ">
    <div class="posts-list featured-product owl-carousel " data-posts-per-item="1" data-width="900" data-height="340" 
    <data-margin="0" data-full-width="yes" data-center="" data-loop="">
<div class="featured-product post-282 product type-product status-publish has-post-thumbnail product_cat-promo 
product_cat-travel product_tag-travel location-serbia sale shipping-taxable 
product-type-external product-cat-promo product-cat-travel product-tag-travel instock">

<div class="entry" itemscope itemtype="http://schema.org/Product">
<meta itemprop="url" content="index.php" />
<div class="entry-thumbnail">

<a href="index.php">

<div class="image " style='background-image: url("images/downtown.jpg"); height: 340px;' data-width="900" data-height="340">
</div>
</a>
</div>

<div class="entry-data">

<a class=" " href="index.php">

<font color='blue'><h4>Increase Traffic & Grow Your Business</h4> </font>
</a>


<div class=" "><font color='black'>
Every business wants to grow and expand, increasing sales year-over-year and staying relevant in the market. 
Dealbase has created a smart way by which a company can reach customers and maintain a 
presence in the marketplace. Like never before, place good looking ads that represent your deals, sell coupons, ship items, answer your
clients online and drive them to your business</div></font>






<div class="price-deal sale">
</div>


<div class="entry-share">

</div>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>








<div class="vc_row wpb_row vc_row-fluid container panel" style="
margin-bottom: 15px;
margin-top: 15px;>
                                                                <div class="row">
                                                                    <div class="wpb_column vc_column_container vc_col-sm-3">

                                                                        <div class="wpb_wrapper">
                                                                            <div class="entry  iconbox">
                                                                                <div class="entry-icon"><span class="vc_li vc_li-search"></span></div>

                                                                                <div class="entry-data">

                                                                                    <div class="entry-header">

                                                                                        <div class="entry-title">Find your deal</div>
                                                                                    </div>
                                                                                    <div class="entry-content">
                                                                                        <p>Find perfect offer</p>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- data -->
                                                                            </div>
                                                                            <!-- entry -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="entry  iconbox">
                                                                                <div class="entry-icon"><span class="vc_li vc_li-truck"></span></div>
                                                                                <div class="entry-data">
                                                                                    <div class="entry-header">
                                                                                        <div class="entry-title">Buy deal</div>
                                                                                    </div>
                                                                                    <!-- header -->
                                                                                    <div class="entry-content">
                                                                                        <p>Buy or save your deal</p>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- data -->
                                                                            </div>
                                                                            <!-- entry -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="entry  iconbox">
                                                                                <div class="entry-icon"><span class="vc_li vc_li-banknote"></span></div>
                                                                                <div class="entry-data">
                                                                                    <div class="entry-header">
                                                                                        <div class="entry-title">Up to 80% discount</div>
                                                                                    </div>
                                                                                    <!-- header -->
                                                                                    <div class="entry-content">
                                                                                        <p>Save hundreds of dollars</p>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- data -->
                                                                            </div>
                                                                            <!-- entry -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="entry  iconbox">
                                                                                <div class="entry-icon"><span class="vc_li vc_li-paperplane"></span></div>
                                                                                <div class="entry-data">
                                                                                    <div class="entry-header">
                                                                                        <div class="entry-title">Five star support</div>
                                                                                    </div>
                                                                                    <!-- header -->
                                                                                    <div class="entry-content">
                                                                                        <p>+1 234-567-890</p>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- data -->
                                                                            </div>
                                                                            <!-- entry -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="vc_row wpb_row vc_row-fluid container">
                                                                <div class="row">
                                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="row">
                                                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="posts-list-wrapper  horizontal-list-3">
                                                                                                <div class="list-header">







<div class="posts-list-wrapper  horizontal-list-4 accent-2-color" style="zoom:0.9;">
<div class="list-header">
<div class="list-title">
<h3>Newest ads</h3></div>
</div>
<div class="posts-list shop-product   horizontal-list-4 accent-2-color" data-posts-per-item="1" 
data-width="440" data-height="340" data-margin="0" data-full-width="" data-center="" data-loop="">




                                                                                                                <?php



$prod_html = "";
if ($rowCount > 0)
{
$count = 1;
        // output data of each row
$indexCounter = 0;
while($row = mysqli_fetch_assoc($result))
{
if($indexCounter < $firstIndex)
{
$indexCounter++;
continue;
}
if($indexCounter > $lastIndex)
{
$indexCounter++;
break 1;
}



            //echo "image: " . $row["image_url"].  "<br>";
                                                                                                                        ?>
<div class='shop-product post-282 product type-product status-publish has-post-thumbnail 
product_cat-promo product_cat-travel product_tag-travel location-serbia sale shipping-taxable product-type-external 
product-cat-promo product-cat-travel product-tag-travel instock'>
<div class='entry' itemscope itemtype='http://schema.org/Product'>

<div id="fb-root"></div>


                                                                                                                                <?php
    $dbCount = $row['counter']; //<-------This is the click count variable.
    $dbName =  $row['uid'];
    
    
    //Set your link text
    $yourlinktext = "".$dbCount." Views";
    ?>

    <div class='entry-thumbnail'>
        <div class='image' style='background-image: url(<?php echo $row['image_url'];?>); height: 240px;' data-width='340' data-height='240'></div>
    </a>

    <span class='share1' name="<?php echo $dbName;?>" onclick="increment('<?php echo $dbName;?>')" href="javascript:void(0);"><?php echo $yourlinktext; ?>
    </span>
<span class='share3' ><?php echo $row['city'];?>
    </span>



    <a class='inline' href='#inline_content<?php echo $count;?>' name="<?php echo $dbName;?>" 
        onclick="increment('<?php echo $dbName;?>')" href="javascript:void(0);"><span class='purchased' >Share
    </span></a>


    <div data-role='popup' id='myPopup'>
    </a>
    <div style='display:none'>
        <div id='inline_content<?php echo $count;?>' style='padding:10px; background:#fff;'>


            <h3>
                <center>
                    <?php echo $row['title'];?>
                </center>
            </h3>


            <div class='holder' style='width: 600px;margin: 0 auto;'>
                <div style="width:180px; float: left;">
                <div class='featured_image' style='width: 180px;'>
                    <img src="<?php echo $row['image_url'];?>" alt="" style="width:100%;">
                </div>
                
                   <?php 
                   if(!empty($row['address'])){?>
                <iframe width="180" 
                        height="standard" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBRh-luFPocbBNGpLFz-LlzX37seaB1JZw&q=<?php echo $row['address'];?>">
                                                        </iframe>
                   <?php }else{echo "Location not available";} ?>
                                                        
                </div>

                <div class='product_content' style=' width: 380px;padding-left: 20px;'>

<?php 


echo nl2br($row["details"]);



?>                  <br>
                    <br>
                    <b>Address:</b>
                    <?php echo $row['address'];?>
                    <br>
                    <b>Phone:</b>
                    <?php echo $row['phone'];?>

                    <br>



                </div>
                <div class='clearfix'>
                </div>
            </div>


            <span class='add-to-cart '>

                <a href='http://dealbase.ca/ContactSeller.php?uid=<?php echo $row['uid']; ?>' onclick="">
                    <input type='submit' value='Share'>
                </a>



                <div class="fb-share-button" data-href="http://dealbase.ca/ContactSeller.php?uid=<?php echo $row['uid']; ?>" 
                    data-layout="button_count"></div>
            </span>
        </div>
    </div>
</div>




</div>
<div class='entry-data'>
    <div class='entry-header'>
        <div class='entry-extra'>
        </div>





        <a class='entry-title inline' href='#inline_content<?php echo $count;?>' 
        name="<?php echo $dbName;?>" onclick="increment('<?php echo $dbName;?>')" href="javascript:void(0);"  style='
            padding-top: 4px;
            padding-bottom: 4px;
            border-bottom:2px solid green;}'>
            <h4>
                <?php echo substr($row['title'], 0, 21) .((strlen($row['title']) > 25) ? '' : ''); ?>
            </h4>


<!--            <div data-role='popup' id='myPopup'>
            </div>-->
        </a>

        <div class='price-offer sale '>
            <div class='discount '>

                <span class='regular-price '>

          <?php if (trim($row['new_price']) != '') { ?>
          
                    <span style="text-decoration: line-through; color: black; font-size: 2em;">
                        <span style="font-size: 0.9em; color: orange; vertical-align: middle;">
                            <?php echo $row['old_price'];?>$
                        </span>
                    </span>
                    
                    <?php } else { ?>
                    <span style="color: black; font-size: 2em;">
                        <span style="font-size: 0.9em; color: orange; vertical-align: middle;">
                            -<?php echo $row['percentage_off'];?>%
                        </span>
                    </span>
                    <?php } ?>
                </div>


                <div class='regular-price '>
                    <span class='amount'>
                        <span class='currency'>

                        </span>


                        <a class="boxUsers" href='#' data-user="<?php echo $row['username']?>" 
                            font-color='green'> <?php echo ($row['status'] == 'Online') ? 'Chat' :  $row['status'] ;?> </a>

                        
</span>
</div>
<div class='price '>
    <span class='amount'>
        <span class='currency '>

        </span>
            <?php if (trim($row['new_price']) != '') { ?>
        <font style="font-size: 0.9em" color='green'><?php echo $row['new_price'];?>$</font>
          <?php } ?>

    </span>

</div>
</div>
</div>

<div class='entry-summary '>
<?php echo substr($row['details'], 0, 55) .((strlen($row['details']) > 25) ? '...' : ''); ?> For more details
    <a class='inline' href='#inline_content<?php echo $count;?>' 
        name="<?php echo $dbName;?>" onclick="increment('<?php echo $dbName;?>')" href="javascript:void(0);" style='
        color:#416CE5; 
        border-bottom:1px solid #416CE5;}'><b>Click here</b></a>
    </b>

</a>


<!--<div data-role='popup' id='myPopup'>
</a>
<div style='display:none'>
    <div id='inline_content<?php echo $count;?>' style='padding:10px; background:#fff;'>
        <h3>
            <center>
                <?php echo $row['title'];?>
            </center>
        </h3>
        <div class='holder' style='width: 600px;margin: 0 auto;'>
            <div class='featured_image' style='width: 180px;'>
                <img src="<?php echo $row['image_url'];?>" alt="" style="width:100%;">
            </div>
            <div class='product_content ' style=' width: 380px;padding-left: 20px;'>


<?php 


echo preg_replace('/\\r\\n/', "<br/>", $row["details"]);



?>
                <br>
                <br>

                <a href='http://dealbase.ca/ContactSeller.php?uid=<?php echo $row[' uid ']; ?>'> Click here</a>


                <b>Address:</b>
                <?php echo $row['address'];?>
                <br><b>Phone:</b>
                <?php echo $row['phone'];?>

                <input type='submit' value='Add to Cart'>
            </div>
            <div class='clearfix'>
            </div>
        </div>


        <div class="fb-share-button" data-href="http://dealbase.ca/ContactSeller.php?uid=<?php echo $row['uid']; ?>" data-layout="button_count"></div>




    </div>



</div>
</div>-->

</div>





<div class='entry-footer' style="
    padding-bottom: 4px;
    padding-top: 4px;
">

    <div class='time-left'>
        <div class='call-to-action'>
            Hurry up! Time left:
        </div>
        <div class='time' data-time='<?php echo $row['Expiration'];?>'>

            <div class='days'>
                <span class='count'>113</span>
                <span class='title'>d.</span></div>

                <div class='hours'><span class='count'>1</span>
                    <span class='title'>h.</span></div>

                    <div class='minutes'><span class='count'>33</span>
                        <span class='title'>m.</span></div>

                        <div class='seconds'><span class='count'>59</span>
                            <span class='title'>s.</span></div>
                        </div>
                    </div>
                            






            <?php if (trim($row['redirect_link']) != '') { ?>
                    <span class='add-to-cart'>
                        <a href='<?php echo $row['redirect_link'];?>'>
                            Redirect
                        </a>
                    </span>

                        <?php } else { ?>

                    <?php if (trim($row['new_price']) != '') { ?>
                    <span class='add-to-cart'>
                        <a href='#' onclick="simpleCart.add('name=<?php echo $row['title'];?>','price=<?php echo $row['new_price'];?>');return false;">
                            Add to Cart
                        </a>
                    </span>
                        <?php } else { ?>

                        <span class='add-to-cart'>
                        <a href=''>
                            Contact
                        </a>
                    </span>

                    <?php } ?>
<?php } ?>


                </div>
            </div>
        </div>
    </div>



    <?php
    $counter++;
    $count++;
    $indexCounter++;
}
    //echo $prod_html;





}
else {
    echo "0 results";
}
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- .entry-content -->
</div>
<!-- #post -->
</div>
<!-- #content -->
</div>
<!-- #primary -->

</div>
<!-- #main -->

<center>
    <?php
    /////////////////////////////////////////////////DRAW LINKS HERE////////////////////////////////////////////
    if($totalAdRows > 0)
    {
        $g = $currentResultPage > 1;
        $g2 = $currentResultPage < $totalResultPages;
        $a = "<a style=\"color:black;font-size:22px;\"href=\"index.php?page=".($currentResultPage-1)."\">";
        $a2 = "<a style=\"color:black;font-size:22px;\"href=\"index.php?page=".($currentResultPage+1)."\">";
        $ek1 = " ".($g?$a:'<span style=\"color:black;font-size:22px;\">')."<<".($g?'</a>':'</span>')." ";
        $ek2 = " ".($g2?$a2:'<span style=\"color:black;font-size:22px;\">').">>".($g2?'</a>':'</span>')." ";
        echo "<div style='width:780px;height:55px;background-color:#d6f5d6;color:black;'><br>";
        echo $ek1;
        for($i=$start; $i <= $end;$i++)//This will center the active link, like google.
        {
            if($i==$currentResultPage)
            {
                echo " <b><span style=\"font-size:22px;border: 1px dotted red;background-color: #99e699;color:#ff0000;\">".$i."</span></b> ";
            }
            else
            {
                ?>
                <a href="index.php?page=<?
                echo $i;
                if(isset($inheritSearch))
                {
                    echo " &search=$inheritSearch ";
                }
                if (!is_null($selectedCategory)) {
                    echo "&category=".$selectedCategory;
                }
                ?>" style="color:black;text-decoration: underline;">
                <? echo $i;?>
            </a>
            <!--This is a link echo'ed-->
            <?php
        }
    }
    echo $ek2;
    echo "</div>";
}
?>










<div style="margin: 0px auto; width: 980px;">
    <!--      Main content area-->
</div>

<?php

 // Ensure that user is logged in.
if(isset($_SESSION['user_id'])) {?>


<?php
    //@session_start();

    //$_SESSION['user_id'] = isset($_GET['user_id']) ? (int) $_GET['user_id'] : 0;


    //echo $_SESSION['user_id'];
    // Load the messages initially
require_once __DIR__ . '/chat/core/FbChatMock.php';
$chat = new FbChatMock();
$messages = $chat->getMessages($_SESSION['user_id'], 1);
?>


<div class="chatboxlist">
    <div class="chatboxtemplate" style="border: 1px solid lightgray; visibility: hidden;">
        <div class="msg-wgt-header">
            <a href="#" class="chattitle">John</a>
            <div style="float: right; margin-right:10px;">
                <a href="#" class="chattitle_minimize">_</a>&nbsp;
                <a href="#" class="chattitle_close">x</a>
                <input type="hidden" value="0" class="messageto">
            </div>
        </div>
        <div class="msg-wgt-body">
            <table>
                <?php
                if (!empty($messages)) {


                    echo '<span style="margin-left: 25px;">Loading...</span>';

                    foreach ($messages as $message) {
                        $msg = htmlentities($message['message'], ENT_NOQUOTES);
                        $user_name = ucfirst($message['username']);
            //$sent = date('F j, Y, g:i a', $message['sent_on']);
                        $sent = $message['sent_on'];



            /*
            echo <<<MSG
            <tr class="msg-row-container">
            <td>
            <div class="msg-row">
            <div class="avatar"></div>
            <div class="message">
            <span class="user-label"><a href="#" style="color: #6D84B4;">{$user_name}</a> <span class="msg-time">{$sent}</span></span><br/>{$msg}
            </div>
            </div>
            </td>
            </tr>
            MSG; */
        }
    } else {
        echo '<span style="margin-left: 25px;">No chat messages available!</span>';
    }
    ?>

</table>
</div>
<div class="msg-wgt-footer">
    <textarea class="chatMsg" placeholder="Type your message. Press shift + Enter to send"></textarea>
</div>
</div>
</div>


<?php }?>

<div style="margin: 0px auto; width: 980px;">
    <!--      Main content area-->
</div>




<div class="container2" style="border: 1px solid lightgray;">
    <div class="msg-wgt-header chatUsersBox">
        <a href="#" class="chattitle">Users Online</a>
    </div>



    <div class="msg-wgt-body2 chatUsersBody">

        <?php

        $result = mysqli_query($conn, "select * from users");

        ?>


        <table>
            <tbody>
                <?php

                $userchatclass = 'username';

if(!isset($_SESSION['user_id'])) // if not logged in
{
    $userchatclass = 'username_register';
}

while ($row = mysqli_fetch_array($result)) {

    ?>
    <tr class="msg-row-container">
        <td>
            <div class="msg-row">
                <div class="avatar"></div>
                <div class="message">
                    <span class="user-label"><a href="#" style="color: #6D84B4;" class="<?php echo $userchatclass?>" 
                        id="<?php echo $row["username"]?>"><?php echo $row["username"]?></a>
                        <span class="msg-time">2016-01-24 19:53:28</span></span>
                        <br>
                        <?php echo $row["status"]?>
                        <input type="hidden" value="<?php echo $row["id"]?>" class="chat_user_id">
                    </div>
                </div>
            </td>
        </tr>

        <?php } ?>


    </tbody>
</table>



</div>
<div class="msg-wgt-footer chatUsersFooter">
    <textarea class="chatMsg" placeholder="Type your message. Press shift + Enter to send"></textarea>
</div>
</div>

<div class="container2 extra-users" style="border: 1px ; margin-left:10%; width:150px;">
    <div class="msg-wgt-header b">
        <a href="#" class="chattitle">Users 2</a>


    </div>

    <section id='extraUsers'>
        <div class="extraUsers">

            test 1
        </div>

        <div class="extraUsers">

            test 2
        </div>

    </section>
</div>


<script>
document.querySelector('.b').addEventListener("click",
    function(e){
        document.querySelector('#extraUsers').classList.toggle("minimize");
    });
var order=[];
window.addEventListener("load", function() {
    var allUsers = [].slice.call(document.querySelectorAll(".msg-row"));
    allUsers.forEach(function(e) {
        var status = e.querySelector('.message').innerText;

        /Online/ig.test(status) ? e.querySelector(".username").click() : false;


    });
    [].slice.call(document.querySelectorAll(".container1"))
    .forEach(function(e){
        e.style.display="none";
    })
    document.querySelector('.chatUsersBox').addEventListener("click",function(){
        document.querySelector('.chatUsersBody').classList.toggle("minimize");
        document.querySelector('.chatUsersFooter').classList.toggle("minimize");



    });
//                                                      [].slice.call(document.querySelectorAll(".msg-wgt-body"))
//                                                          .forEach(function(e) {
//                                                              e.style.display = "none";
//                                                          });
//                                                      [].slice.call(document.querySelectorAll(".msg-wgt-footer"))
//                                                          .forEach(function(e) {
//                                                              e.style.display = "none";
//                                                          });
//                                                      [].slice.call(document.querySelectorAll(".msg-wgt-header"))
//                                                          .forEach(function(e){
//                                                          e.style.display = "none";
//                                                      })

})

$('.chattitle').click(function(e) {
    e.preventDefault();

    $(this).closest('.container1').find('.msg-wgt-body').toggle();
    $(this).closest('.container1').find('.msg-wgt-footer').toggle();

});

$('.chattitle_minimize').click(function(e) {

    e.preventDefault();

    $(this).closest('.container1').find('.msg-wgt-body').toggle();
    $(this).closest('.container1').find('.msg-wgt-footer').toggle();
    $(this).closest('.container1').toggleClass("closed-window");
});


//                                                  [].slice.call(document.querySelectorAll('.chattitle_close'))
//                                                  .forEach(function(e){
//                                                      e.addEventListener("click",function(event){
//                                                          var event=event||window.event;
//
//                                                      })
//                                                  })
$('.chattitle_close').click(function(e) {

    e.preventDefault();

                                                        //console.log(this);
                                                        var elem=$(this).closest('.container1')[0];
                                                        $(this).closest('.container1').toggle();
                                                        order.splice(order.indexOf(elem),1);

                                                    });

id_counter = 0;
$('.username').click(function(e) {
    e.preventDefault();
    id_counter++;
    var size = "60%";
    if ($('.container1').size() == 1)
        size = '40%';
    else if ($('.container1').size() == 2)
        size = '20%';
                                                        //else if ($('.container1').size() == 3)
                                                        //    size = '0%';

                                                        var user_id = $(this).closest('.message').find('.chat_user_id').val();

                                                        usr = $(this).attr("id");
//                                                      console.log(usr);
                                                        if (!$("#xbox" + usr).length) { //if not user defined do not add it


//                                                          console.log(usr + " added");
$('.chatboxtemplate').clone(true)
                                                                .attr('id', "xbox" + usr) //xbox one :p
                                                                .removeClass('chatboxtemplate')
                                                                .addClass('container1')
                                                                .addClass("cntMessage")
                                                                .css('visibility', 'visible')
                                                                .appendTo('.chatboxlist');
                                                                $("#xbox" + usr).find(".chattitle").text(usr);
                                                                $("#xbox" + usr).find(".messageto").val(user_id);
                                                                document.querySelector('#xbox'+usr).style.zIndex=id_counter;
                                                                var elem= document.querySelector("#xbox" + usr);
                                                                if(elem.style.display!="inline-block"){
                                                                    order.push(elem);
                                                                    if(extras.indexOf(elem)>-1){
                                                                        extras.splice(extras.indexOf(elem),1);}
                                                                        noMoreThanThree();}

                                                            //$('.container1').
                                                        } else{
//                                                          if (document.querySelector("#xbox" + usr).style.display=="none"){
    document.querySelector('#xbox'+usr).style.zIndex=id_counter;
    var elem= document.querySelector("#xbox" + usr);
    if(elem.style.display!="inline-block"){
        order.push(elem);
        if(extras.indexOf(elem)>-1){
            extras.splice(extras.indexOf(elem),1);}

            document.querySelector("#xbox" + usr).style.display="inline-block";
        }
        noMoreThanThree()
//                                                          }
}
});
$('.boxUsers').click(function(e) {
e.preventDefault();
    var usr=this.dataset.user;
    if (!$("#xbox" + usr).length){
        $('.chatboxtemplate').clone(true)
                                                                .attr('id', "xbox" + usr) //xbox one :p
                                                                .removeClass('chatboxtemplate')
                                                                .addClass('container1')
                                                                .addClass("cntMessage")
                                                                .css('visibility', 'visible')
                                                                .appendTo('.chatboxlist');
                                                                $("#xbox" + usr).find(".chattitle").text(usr);
//                                                          $("#xbox" + usr).find(".messageto").val(user_id);
document.querySelector('#xbox'+usr).style.zIndex=id_counter;
var elem= document.querySelector("#xbox" + usr);
if(elem.style.display!="inline-block"){
    order.push(elem);
    if(extras.indexOf(elem)>-1){
        extras.splice(extras.indexOf(elem),1);}
        noMoreThanThree();}
    }
    else{
        document.querySelector('#xbox'+usr).style.zIndex=id_counter;
        var elem= document.querySelector("#xbox" + usr);
        if(elem.style.display!="inline-block"){
            order.push(elem);
            if(extras.indexOf(elem)>-1){
                extras.splice(extras.indexOf(elem),1);}

                document.querySelector("#xbox" + usr).style.display="inline-block";
            }
            noMoreThanThree()

        }
    });

$('.username_register').click(function() {
    alert('Please register for chat.');
    window.location = 'RegisterLogin.php';
})

</script>
<script type="text/javascript" src="chat/public/scripts/chat.js"></script>




    



<?php
mysqli_close($conn);

include('Footer.php');

    // should the html code before this php be deleted? dont delete

?>
<!--

                                                    <script>
                                                        (function(d, s, id) {
                                                            var js, fjs = d.getElementsByTagName(s)[0];
                                                            if (d.getElementById(id)) return;
                                                            js = d.createElement(s);
                                                            js.id = id;
                                                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                                                            fjs.parentNode.insertBefore(js, fjs);
                                                        }(document, 'script', 'facebook-jssdk'));

                                                    </script>
                                                -->

                                                <audio src="/pingchat.mp3" id="chatAudio"></audio>
                                            </body>

                                            </html>
