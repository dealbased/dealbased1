<?php
    session_start();
    ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width">
<!--Shortcut icon-->
<style>
body{font:12px/1.2 Verdana, sans-serif; padding:0 10px;}
a:link, a:visited{text-decoration:none; color:#416CE5; border-bottom:1px solid #416CE5;}
    h2{font-size:13px; margin:15px 0 0 0;}
    </style>
    <link rel="stylesheet" href="colorbox.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jquery.colorbox.js"></script>
    <script>
    $(document).ready(function(){
                      //Examples of how to assign the Colorbox event to elements
                      $(".group1").colorbox({rel:'group1'});
                      $(".group2").colorbox({rel:'group2', transition:"fade"});
                      $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
                      $(".group4").colorbox({rel:'group4', slideshow:true});
                      $(".ajax").colorbox();
                      $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
                      $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
                      $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
                      $(".inline").colorbox({inline:true, width:"50%"});
                      $(".callbacks").colorbox({
                                               onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                                               onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                                               onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                                               onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                                               onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
                                               });
                      
                      $('.non-retina').colorbox({rel:'group5', transition:'none'})
                      $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
                      
                      //Example of preserving a JavaScript event for inline calls.
                      $("#click").click(function(){
                                        $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                                        return false;
                                        });
                      });
    </script>
    <meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada"><link rel="stylesheet" type="text/css" href="css/master.css">
    
    <link rel='stylesheet' id='contact-form-7-css'  href='http://azexo.com/kupon2/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='owl.carousel-css'  href='http://azexo.com/kupon2/wp-content/themes/kupon/css/owl.carousel.min.css?ver=4.3.1' type='text/css' media='all' />
    
    
    <link rel='stylesheet' id='vc_linecons-css'  href='css/vc_linecons_icons.css?ver=4.6.1' type='text/css' media='screen' />
    
    
    <link rel='stylesheet' id='js_composer_front-css'  href='http://azexo.com/kupon2/wp-content/plugins/js_composer/assets/css/js_composer.css?ver=4.6.1' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='http://azexo.com/kupon2/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=4.6.1' type='text/css' media='screen' />
    <link rel='stylesheet' id='themify-icons-css'  href='http://azexo.com/kupon2/wp-content/themes/kupon/css/themify-icons.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='azexo-css'  href='http://azexo.com/kupon2/wp-content/uploads/wp-less/kupon/less/kupon2/azexo-07c6e42dd7.css' type='text/css' media='all' />
    <script type='text/javascript' src='//azexo.com/kupon2/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=2.4.8'></script>
    
    
    
    
    <?php
    
    include('Header.php');
    
    // should the html code before this php be deleted?
    
    ?>
    
    
    
    
    
    
    </header><!-- #masthead -->
    <div id="main" class="site-main">
    <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
    <div id="post-25" class="entry post-25 page type-page status-publish hentry">
    <div class="entry-content">
    <div class="vc_row wpb_row vc_row-fluid container"><div class="row"><div class="widget-menu wpb_column vc_column_container vc_col-sm-3"><div class="wpb_wrapper">
    <form method=" " class="deal-searchform" action="index.php">
    <div class="searchform-wrapper">
    <div class="s-wrapper">
    </div>
    <div class="product-cat-wrapper">
    <select name="product_cat">
    <option value="">Select your category</option>
    <option value="electronics" >Electronics</option><option value="europe" >Europe</option><option value="fashion" >Fashion</option><option value="fun-staff" >Fun Staff</option><option value="gifts" >Gifts</option><option value="health" >Health</option><option value="products" >Products</option><option value="promo" >Promo</option><option value="things-to-do" >Things to do</option><option value="tickets" >Tickets</option><option value="travel" >Travel</option>            </select>
        </div>
        <div class="location-wrapper">
        <select name="location">
        <option value="">Select your location</option>
        <option value="austria" >Austria</option><option value="croatia" >Croatia</option><option value="italy" >Italy</option><option value="monte-negro" >Monte Negro</option><option value="serbia" >Serbia</option>            </select>
        </div>
        <div class="submit">
        <input type="submit" value="Search deals">
        </div>
        <input type="hidden" name="post_type" value="product" />
        </div>
        </form>
        <div class="wpb_widgetised_column wpb_content_element">
        <div class="wpb_wrapper">
        <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><div class="widget-title"><h3>Categories</h3></div><ul class="product-categories"><li class="cat-item cat-item-37"><a href="http://azexo.com/kupon2/product-category/electronics/"><img alt="" src="Icons/photo-camera2.svg"><span>Electronics</span></a> <span class="count">(1)</span></li>
        <li class="cat-item cat-item-22"><a href="index.php"><img alt="" src="Icons/picture83.svg"><span>Fashion</span></a> <span class="count">(1)</span></li>
        <li class="cat-item cat-item-36"><a href="index.php"><img alt="" src="Icons/fun3.svg"><span>Fun Staff</span></a> <span class="count">(1)</span></li>
        <li class="cat-item cat-item-23"><a href="index.php"><img alt="" src="Icons/heart47.svg"><span>Gifts</span></a> <span class="count">(1)</span></li>
        <li class="cat-item cat-item-24"><a href="index.php"><img alt="" src="Icons/health-care15.svg"><span>Health</span></a> <span class="count">(1)</span></li>
        <li class="cat-item cat-item-25"><a href="index.php"><img alt="" src="Icons/fresh7.svg"><span>Products</span></a> <span class="count">(1)</span></li>
        <li class="cat-item cat-item-26"><a href="index.php"><img alt="" src="Icons/checked27.svg"><span>Things to do</span></a> <span class="count">(1)</span></li>
            <li class="cat-item cat-item-27"><a href="index.php"><img alt="" src="Icons/shopping1.svg"><span>Tickets</span></a> <span class="count">(1)</span></li>
            <li class="cat-item cat-item-28 cat-parent"><a href="index.php"><img alt="" src="Icons/map30.svg"><span>Travel</span></a> <span class="count">(4)</span><ul class='children'>
            <li class="cat-item cat-item-29"><a href="index.php"><span>Europe</span></a> <span class="count">(1)</span></li>
            <li class="cat-item cat-item-30"><a href="index.php"><span>Promo</span></a> <span class="count">(1)</span></li>
            </ul>
            </li>
            </ul></div>
            </div>
            </div> </div></div><div class="wpb_column vc_column_container vc_col-sm-9"><div class="wpb_wrapper"><div class="posts-list-wrapper "><div class="posts-list featured-product owl-carousel " data-posts-per-item="1" data-width="900" data-height="520" data-margin="0" data-full-width="yes" data-center="" data-loop=""><div class="featured-product post-282 product type-product status-publish has-post-thumbnail product_cat-promo product_cat-travel product_tag-travel location-serbia sale shipping-taxable product-type-external product-cat-promo product-cat-travel product-tag-travel instock">
            
            <div class="entry" itemscope itemtype="http://schema.org/Product">
            <meta itemprop="url" content="index.php" />
            <div class="entry-thumbnail">
            
            <a href="index.php">
            
            <div class="image " style='background-image: url("http://azexo.com/kupon2/wp-content/uploads/2015/09/deal-21-900x520.jpg"); height: 520px;' data-width="900" data-height="520">
            </div>
            </a>
            </div>
            
            <div class="entry-data">
            <div class="entry-header">
            <div class="entry-extra">
            </div>
            <a class="entry-title" href="index.php">
            <h3>Sirenis Punta Cana Resort Casino</h3>
            </a>
            <div class="entry-meta">
            </div>
            </div>
            <div class="entry-summary">
            Kingscliff: From $149 for a 3-Night Romantic Stay with Bottle of Wine&#8230;                </div>
                
                
                <div class="entry-footer">
                <span class="price"><del><span class="amount"><span class="currency">&pound;</span>235</span></del> <ins><span class="amount"><span class="currency">&pound;</span>45</span></ins></span><span class="add-to-cart"><a href="index.php" rel="nofollow" data-product_id="282" data-product_sku="" data-quantity="1" class="button  product_type_external">Buy product</a></span>        </div>
    <div class="price-deal sale">
    <div class="regular-price">
    <span class="amount"><span class="currency">&pound;</span>235</span>                <span>Value</span>
    </div>
    <div class="discount">
    <span class="amount">81%</span>
    <span>Discount</span>
    </div>
    <div class="savings">
    <span class="amount"><span class="currency">&pound;</span>190</span>                <span>Savings</span>
    </div>
    </div>
    <div class="time-left">
    <div class="call-to-action">Hurry up! Time left:</div>
    <div class="time" data-time="2016/03/26 00:00:00">
    <div class="days"><span class="count">113</span><span class="title">d.</span></div>
    <div class="hours"><span class="count">1</span><span class="title">h.</span></div>
    <div class="minutes"><span class="count">33</span><span class="title">m.</span></div>
    <div class="seconds"><span class="count">59</span><span class="title">s.</span></div>
    </div>
    </div>
    <div class="entry-share"><div class="helper">SHARE OR SAVE THIS POST FOR LATER USAGE</div><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fsirenis-punta-cana-resort-casino-2%2F"><span class="share-box"><i class="fa fa-facebook"></i></span></a><a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article%3A%20Sirenis%20Punta%20Cana%20Resort%20Casino%20-%20http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fsirenis-punta-cana-resort-casino-2%2F"><span class="share-box"><i class="fa fa-twitter"></i></span></a><a target="_blank" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fsirenis-punta-cana-resort-casino-2%2F&media=http%3A%2F%2Fazexo.com%2Fkupon2%2Fwp-content%2Fuploads%2F2015%2F09%2Fdeal-21.jpg&description=Sirenis%20Punta%20Cana%20Resort%20Casino"><span class="share-box"><i class="fa fa-pinterest"></i></span></a><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fsirenis-punta-cana-resort-casino-2%2F&title=Sirenis%20Punta%20Cana%20Resort%20Casino&source=LinkedIn"><span class="share-box"><i class="fa fa-linkedin"></i></span></a><a target="_blank" href="https://plus.google.com/share?url=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fsirenis-punta-cana-resort-casino-2%2F"><span class="share-box"><i class="fa fa-google-plus"></i></span></a></div>                    </div>
    </div>
    </div>
    <div class="featured-product post-274 product type-product status-publish has-post-thumbnail product_cat-fashion product_cat-health product_tag-discount location-croatia sale downloadable virtual shipping-taxable purchasable product-type-variable product-cat-fashion product-cat-health product-tag-discount instock">
    
    <div class="entry" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="index.php" />
    <div class="entry-thumbnail">
    
    <a href="index.php">
    
    <div class="image " style='background-image: url("http://azexo.com/kupon2/wp-content/uploads/2015/09/deal-20-900x520.jpg"); height: 520px;' data-width="900" data-height="520">
    </div>
    </a>
    </div>
    
    <div class="entry-data">
    <div class="entry-header">
    <div class="entry-extra">
    </div>
    <a class="entry-title" href="index.php">
    <h3>Riviera Maya All-Inclusive Cities 5*</h3>
    </a>
    <div class="entry-meta">
    </div>
    </div>
    <div class="entry-summary">
Kingscliff: From $349 for a 3-Night Romantic Stay with Bottle of Wine&#8230;                </div>
    
    
    <div class="entry-footer">
    <span class="price"><del><span class="amount"><span class="currency">&pound;</span>123</span>&ndash;<span class="amount"><span class="currency">&pound;</span>456</span></del> <ins><span class="amount"><span class="currency">&pound;</span>57</span>&ndash;<span class="amount"><span class="currency">&pound;</span>324</span></ins></span><span class="add-to-cart"><a href="index.php" rel="nofollow" data-product_id="274" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_variable">Select options</a></span>        </div>
    <div class="price-deal sale">
    <div class="regular-price">
    <span class="amount"><span class="currency">&pound;</span>123</span>                <span>Value</span>
    </div>
    <div class="discount">
    <span class="amount">54%</span>
    <span>Discount</span>
    </div>
    <div class="savings">
    <span class="amount"><span class="currency">&pound;</span>66</span>                <span>Savings</span>
    </div>
    </div>
    <div class="time-left">
    <div class="call-to-action">Hurry up! Time left:</div>
    <div class="time" data-time="2016/06/10 00:00:00">
    <div class="days"><span class="count">189</span><span class="title">d.</span></div>
    <div class="hours"><span class="count">1</span><span class="title">h.</span></div>
    <div class="minutes"><span class="count">33</span><span class="title">m.</span></div>
    <div class="seconds"><span class="count">59</span><span class="title">s.</span></div>
    </div>
    </div>
    <div class="entry-share"><div class="helper">SHARE OR SAVE THIS POST FOR LATER USAGE</div><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Friviera-maya-all-inclusive-cities-5-2%2F"><span class="share-box"><i class="fa fa-facebook"></i></span></a><a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article%3A%20Riviera%20Maya%20All-Inclusive%20Cities%205%2A%20-%20http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Friviera-maya-all-inclusive-cities-5-2%2F"><span class="share-box"><i class="fa fa-twitter"></i></span></a><a target="_blank" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Friviera-maya-all-inclusive-cities-5-2%2F&media=http%3A%2F%2Fazexo.com%2Fkupon2%2Fwp-content%2Fuploads%2F2015%2F09%2Fdeal-20.jpg&description=Riviera%20Maya%20All-Inclusive%20Cities%205%2A"><span class="share-box"><i class="fa fa-pinterest"></i></span></a><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Friviera-maya-all-inclusive-cities-5-2%2F&title=Riviera%20Maya%20All-Inclusive%20Cities%205%2A&source=LinkedIn"><span class="share-box"><i class="fa fa-linkedin"></i></span></a><a target="_blank" href="https://plus.google.com/share?url=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Friviera-maya-all-inclusive-cities-5-2%2F"><span class="share-box"><i class="fa fa-google-plus"></i></span></a></div>                    </div>
    </div>
    </div>
    <div class="featured-product post-97 product type-product status-publish has-post-thumbnail product_cat-things-to-do product_tag-travel sale featured downloadable shipping-taxable purchasable product-type-simple product-cat-things-to-do product-tag-travel instock">
    
    <div class="entry" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="url" content="http://azexo.com/kupon2/product/wyndham-garden-at-palmas-del-mar-puerto-rico/" />
    <div class="entry-thumbnail">
    
    <a href="http://azexo.com/kupon2/product/wyndham-garden-at-palmas-del-mar-puerto-rico/">
    
    <div class="image " style='background-image: url("http://azexo.com/kupon2/wp-content/uploads/2015/08/deal-11-900x520.jpg"); height: 520px;' data-width="900" data-height="520">
    </div>
    </a>
    </div>
    
    <div class="entry-data">
    <div class="entry-header">
    <div class="entry-extra">
    </div>
    <a class="entry-title" href="http://azexo.com/kupon2/product/wyndham-garden-at-palmas-del-mar-puerto-rico/">
    <h3>Wyndham Garden at Palmas del Mar &#8211; Puerto Rico</h3>
    </a>
    <div class="entry-meta">
    </div>
    </div>
    <div class="entry-summary">
    Stay for two, with optional all-inclusive package. Dates into September                </div>
        
        
        <div class="entry-footer">
        <span class="price"><del><span class="amount"><span class="currency">&pound;</span>362</span></del> <ins><span class="amount"><span class="currency">&pound;</span>130</span></ins></span><span class="add-to-cart"><a href="/kupon2/?add-to-cart=97" rel="nofollow" data-product_id="97" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a></span>        </div>
    <div class="price-deal sale">
    <div class="regular-price">
    <span class="amount"><span class="currency">&pound;</span>362</span>                <span>Value</span>
    </div>
    <div class="discount">
    <span class="amount">64%</span>
    <span>Discount</span>
    </div>
    <div class="savings">
    <span class="amount"><span class="currency">&pound;</span>232</span>                <span>Savings</span>
    </div>
    </div>
    <div class="time-left">
    <div class="call-to-action">Hurry up! Time left:</div>
    <div class="time" data-time="2015/12/20 00:00:00">
    <div class="days"><span class="count">16</span><span class="title">d.</span></div>
    <div class="hours"><span class="count">1</span><span class="title">h.</span></div>
    <div class="minutes"><span class="count">33</span><span class="title">m.</span></div>
    <div class="seconds"><span class="count">59</span><span class="title">s.</span></div>
    </div>
    </div>
    <div class="entry-share"><div class="helper">SHARE OR SAVE THIS POST FOR LATER USAGE</div><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fwyndham-garden-at-palmas-del-mar-puerto-rico%2F"><span class="share-box"><i class="fa fa-facebook"></i></span></a><a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article%3A%20Wyndham%20Garden%20at%20Palmas%20del%20Mar%20%26%238211%3B%20Puerto%20Rico%20-%20http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fwyndham-garden-at-palmas-del-mar-puerto-rico%2F"><span class="share-box"><i class="fa fa-twitter"></i></span></a><a target="_blank" href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fwyndham-garden-at-palmas-del-mar-puerto-rico%2F&media=http%3A%2F%2Fazexo.com%2Fkupon2%2Fwp-content%2Fuploads%2F2015%2F08%2Fdeal-11.jpg&description=Wyndham%20Garden%20at%20Palmas%20del%20Mar%20%26%238211%3B%20Puerto%20Rico"><span class="share-box"><i class="fa fa-pinterest"></i></span></a><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fwyndham-garden-at-palmas-del-mar-puerto-rico%2F&title=Wyndham%20Garden%20at%20Palmas%20del%20Mar%20%26%238211%3B%20Puerto%20Rico&source=LinkedIn"><span class="share-box"><i class="fa fa-linkedin"></i></span></a><a target="_blank" href="https://plus.google.com/share?url=http%3A%2F%2Fazexo.com%2Fkupon2%2Fproduct%2Fwyndham-garden-at-palmas-del-mar-puerto-rico%2F"><span class="share-box"><i class="fa fa-google-plus"></i></span></a></div>                    </div>
    </div>
    </div>
    </div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid container panel"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-3"><div class="wpb_wrapper"><div class="entry  iconbox" ><div class="entry-icon"><span class="vc_li vc_li-search"></span></div>
    <div class="entry-data"><div class="entry-header"><div class="entry-title">Find your deal</div>
    </div><!-- header -->
    <div class="entry-content"><p>Find perfect offer</p>
    </div>
    </div><!-- data -->
    </div><!-- entry -->
    </div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="wpb_wrapper"><div class="entry  iconbox" ><div class="entry-icon"><span class="vc_li vc_li-truck"></span></div>
    <div class="entry-data"><div class="entry-header"><div class="entry-title">Buy deal</div>
    </div><!-- header -->
    <div class="entry-content"><p>Buy or save your deal</p>
    </div>
    </div><!-- data -->
    </div><!-- entry -->
    </div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="wpb_wrapper"><div class="entry  iconbox" ><div class="entry-icon"><span class="vc_li vc_li-banknote"></span></div>
    <div class="entry-data"><div class="entry-header"><div class="entry-title">Up to 80% discount</div>
    </div><!-- header -->
    <div class="entry-content"><p>Save hundreds of dollars</p>
    </div>
    </div><!-- data -->
    </div><!-- entry -->
    </div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="wpb_wrapper"><div class="entry  iconbox" ><div class="entry-icon"><span class="vc_li vc_li-paperplane"></span></div>
    <div class="entry-data"><div class="entry-header"><div class="entry-title">Five star support</div>
    </div><!-- header -->
    <div class="entry-content"><p>+1 234-567-890</p>
    </div>
    </div><!-- data -->
    </div><!-- entry -->
    </div></div></div></div>
    
    
    
    
    
    <div class="vc_row wpb_row vc_row-fluid container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="posts-list-wrapper  horizontal-list-3"><div class="list-header">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- .Last minute deal -->
    
    
    
    
    <div class="posts-list-wrapper  horizontal-list-4 accent-2-color"><div class="list-header"><div class="list-title"><h3>Newest deals</h3></div></div><div class="posts-list shop-product   horizontal-list-4 accent-2-color" data-posts-per-item="1" data-width="440" data-height="320" data-margin="0" data-full-width="" data-center="" data-loop="">
    
    
    
    
    <!-- Product 1 -->
    
    
    
    <!--  here is the demo to have group photo http://www.jqueryscript.net/lightbox/Lightweight-Customizable-Lightbox-Plugin-ColorBox.html   -->
    
    <div class="shop-product post-282 product type-product status-publish has-post-thumbnail product_cat-promo product_cat-travel product_tag-travel location-serbia sale shipping-taxable product-type-external product-cat-promo product-cat-travel product-tag-travel instock">
    
    <div class="entry" itemscope itemtype="http://schema.org/Product">
    <div class="entry-thumbnail">
    
    
    <div class="image " style='background-image: url("images/products/electronics/XboxOne.jpg"); height: 320px;' data-width="440" data-height="320">
    </div>
    </a>
    <span class="purchased">1</span>        </div>
    
    <div class="entry-data">
    <div class="entry-header">
    <div class="entry-extra">
    </div>
    
    
    
    
    
    <a class="entry-title group1  "
    
    href="images/products/electronics/XboxMore.jpg" title="Xbox One">
    <h3>Xbox One Limited Edition Halo 5: Guardians Bundle</h3>
    <div data-role="popup" id="myPopup">
    
    
    </div>
    
    </a>
    
    
    
    
    <div class="entry-meta">
    <div class="price-offer sale">
    <div class="discount">
    -20%            </div>
    <div class="regular-price">
    <span class="amount"><span class="currency">$</span>499.99</span>            </div>
    <div class="price">
    <span class="amount"><span class="currency">$</span>399.99</span>            </div>
    </div>
    </div>
    </div>
    
    
    <div class="entry-summary ">
    The Xbox One Limited Edition Halo 5: Guardians Bundle 1 includes Halo5 game, a controller ... To read more, please
    
    
    <a class=" group1  "
    
    href="images/products/electronics/XboxMore.jpg" title="Xbox One"> <b>click here</b>.
    
    <div data-role="popup" id="myPopup"> </a>
    
    
    </div>
    
    </div>
    
    <div class="entry-footer">
    <div class="time-left">
    <div class="call-to-action">Hurry up! Time left:</div>
    <div class="time" data-time="2016/01/01 00:00:00">
    <div class="days"><span class="count">113</span><span class="title">d.</span></div>
    <div class="hours"><span class="count">1</span><span class="title">h.</span></div>
    <div class="minutes"><span class="count">33</span><span class="title">m.</span></div>
    <div class="seconds"><span class="count">59</span><span class="title">s.</span></div>
    </div>
    </div>
    <span class="add-to-cart"><a href="#" onclick="simpleCart.add('name=XboxOne Holo 5 bundle','price=399','image=images/products/electronics/XboxOne.jpg');return false;">Add to Cart</a></span>        </div>
    </div>
    </div>
    </div>
    
    
    
    
    
    
    
    <!-- Product 2 -->
    
    
    
    
    
    
    
    
    
    
    
    <div class="shop-product post-282 product type-product status-publish has-post-thumbnail product_cat-promo product_cat-travel product_tag-travel location-serbia sale shipping-taxable product-type-external product-cat-promo product-cat-travel product-tag-travel instock">
    
    <div class="entry" itemscope itemtype="http://schema.org/Product">
    <div class="entry-thumbnail">
    
    
    <div class="image " style='background-image: url("images/2.png"); height: 320px;' data-width="440" data-height="320">
    </div>
    </a>
    <span class="purchased">1</span>        </div>
    
    <div class="entry-data">
    <div class="entry-header">
    <div class="entry-extra">
    </div>
    
    
    
    
    
    <a class="entry-title group1  "
    
    href="images/1.png" title="Xbox One">
    
    
    <h3>Demo Object 2</h3>
    
    
    <div data-role="popup" id="myPopup">
    
    
    </div>
    
    </a>
    
    
    
    
    <div class="entry-meta">
    <div class="price-offer sale">
    <div class="discount">
    -20%            </div>
    <div class="regular-price">
    <span class="amount"><span class="currency">$</span>499.99</span>            </div>
    <div class="price">
    <span class="amount"><span class="currency">$</span>399.99</span>            </div>
    </div>
    </div>
    </div>
    
    
    <div class="entry-summary ">
    The Xbox One Limited Edition Halo 5: Guardians Bundle 1 includes Halo5 game, a controller ... To read more, please
    
    
    <a class=" group1  "
    
    href="images/1.png" title="Xbox One"> <b>click here</b>.
    
    <div data-role="popup" id="myPopup"> </a>
    
    
    </div>
    
    </div>
    
    <div class="entry-footer">
    <div class="time-left">
    <div class="call-to-action">Hurry up! Time left:</div>
    <div class="time" data-time="2016/01/01 00:00:00">
    <div class="days"><span class="count">113</span><span class="title">d.</span></div>
    <div class="hours"><span class="count">1</span><span class="title">h.</span></div>
    <div class="minutes"><span class="count">33</span><span class="title">m.</span></div>
    <div class="seconds"><span class="count">59</span><span class="title">s.</span></div>
    </div>
    </div>
    <span class="add-to-cart"><a href="#" onclick="simpleCart.add('name=XboxOne Holo 5 bundle','price=399','image=images/products/electronics/XboxOne.jpg');return false;">Add to Cart</a></span>        </div>
    </div>
    </div>
    </div>
    
    
    
    
    
    <!-- Product 3 -->
    
    
    
    
    
    
    
    
    
    <div class="shop-product post-282 product type-product status-publish has-post-thumbnail product_cat-promo product_cat-travel product_tag-travel location-serbia sale shipping-taxable product-type-external product-cat-promo product-cat-travel product-tag-travel instock">
    
    <div class="entry" itemscope itemtype="http://schema.org/Product">
    <div class="entry-thumbnail">
    
    
    <div class="image " style='background-image: url("images/3.png"); height: 320px;' data-width="440" data-height="320">
    </div>
    </a>
    <span class="purchased">1</span>        </div>
    
    <div class="entry-data">
    <div class="entry-header">
    <div class="entry-extra">
    </div>
    
    
    
    
    
    <a class="entry-title group1  "
    
    href="images2.png" title="Xbox One">
    
    
    <h3>Demo 3 Object deal</h3>
    
    <div data-role="popup" id="myPopup">
    
    
    </div>
    
    </a>
    
    
    
    
    <div class="entry-meta">
    <div class="price-offer sale">
    <div class="discount">
    -20%            </div>
    <div class="regular-price">
    <span class="amount"><span class="currency">$</span>499.99</span>            </div>
    <div class="price">
    <span class="amount"><span class="currency">$</span>399.99</span>            </div>
    </div>
    </div>
    </div>
    
    
    <div class="entry-summary ">
    The Xbox One Limited Edition Halo 5: Guardians Bundle 1 includes Halo5 game, a controller ... To read more, please
    
    
    <a class=" group1  "
    
    href="images/3.png" title="Xbox One"> <b>click here</b>.
    
    <div data-role="popup" id="myPopup"> </a>
    
    
    </div>
    
    </div>
    
    <div class="entry-footer">
    <div class="time-left">
    <div class="call-to-action">Hurry up! Time left:</div>
    <div class="time" data-time="2016/01/01 00:00:00">
    <div class="days"><span class="count">113</span><span class="title">d.</span></div>
    <div class="hours"><span class="count">1</span><span class="title">h.</span></div>
    <div class="minutes"><span class="count">33</span><span class="title">m.</span></div>
    <div class="seconds"><span class="count">59</span><span class="title">s.</span></div>
    </div>
    </div>
    <span class="add-to-cart"><a href="#" onclick="simpleCart.add('name=XboxOne Holo 5 bundle','price=399','');return false;">Add to Cart</a></span>        </div>
    </div>
    </div>
    </div>
    
    
    
    
    
    
    
    <!-- product 4 -->
    
    
    
    
    
    
    <div class="shop-product post-282 product type-product status-publish has-post-thumbnail product_cat-promo product_cat-travel product_tag-travel location-serbia sale shipping-taxable product-type-external product-cat-promo product-cat-travel product-tag-travel instock">
    
    <div class="entry" itemscope itemtype="http://schema.org/Product">
    <div class="entry-thumbnail">
    
    
    <div class="image " style='background-image: url("images/4.png"); height: 320px;' data-width="440" data-height="320">
    </div>
    </a>
    <span class="purchased">1</span>        </div>
    
    <div class="entry-data">
    <div class="entry-header">
    <div class="entry-extra">
    </div>
    
    
    
    
    
    <a class="entry-title group1  "
    
    href="images/products/electronics/4.png" title="Xbox One">
    
    
    <h3>Demo 4 Object deal</h3>
    
    <div data-role="popup" id="myPopup">
    
    
    </div>
    
    </a>
    
    
    
    
    <div class="entry-meta">
    <div class="price-offer sale">
    <div class="discount">
    -20%            </div>
    <div class="regular-price">
    <span class="amount"><span class="currency">$</span>499.99</span>            </div>
    <div class="price">
    <span class="amount"><span class="currency">$</span>399.99</span>            </div>
    </div>
    </div>
    </div>
    
    
    <div class="entry-summary ">
    The Xbox One Limited Edition Halo 5: Guardians Bundle 1 includes Halo5 game, a controller ... To read more, please
    
    
    <a class=" group1  "
    
    href="images/products/electronics/XboxMore.jpg" title="Xbox One"> <b>click here</b>.
    
    <div data-role="popup" id="myPopup"> </a>
    
    
    </div>
    
    </div>
    
    <div class="entry-footer">
    <div class="time-left">
    <div class="call-to-action">Hurry up! Time left:</div>
    <div class="time" data-time="2016/01/01 00:00:00">
    <div class="days"><span class="count">113</span><span class="title">d.</span></div>
    <div class="hours"><span class="count">1</span><span class="title">h.</span></div>
    <div class="minutes"><span class="count">33</span><span class="title">m.</span></div>
    <div class="seconds"><span class="count">59</span><span class="title">s.</span></div>
    </div>
    </div>
    <span class="add-to-cart"><a href="#" onclick="simpleCart.add('name=XboxOne Holo 5 bundle','price=399','image=images/products/electronics/XboxOne.jpg');return false;">Add to Cart</a></span>        </div>
    </div>
    </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    <!-- product 5 -->
    
    
    
    
    
    
    <div class="shop-product post-282 product type-product status-publish has-post-thumbnail product_cat-promo product_cat-travel product_tag-travel location-serbia sale shipping-taxable product-type-external product-cat-promo product-cat-travel product-tag-travel instock">
    
    <div class="entry" itemscope itemtype="http://schema.org/Product">
    <div class="entry-thumbnail">
    
    
    <div class="image " style='background-image: url("images/5.png"); height: 320px;' data-width="440" data-height="320">
    </div>
    </a>
    <span class="purchased">1</span>        </div>
    
    <div class="entry-data">
    <div class="entry-header">
    <div class="entry-extra">
    </div>
    
    
    
    
    
    <a class="entry-title group1  "
    
    href="images/products/electronics/5.png" title="Xbox One">
    
    
    <h3>Demo 5 Object deal</h3>
    
    <div data-role="popup" id="myPopup">
    
    
    </div>
    
    </a>
    
    
    
    
    <div class="entry-meta">
    <div class="price-offer sale">
    <div class="discount">
    -20%            </div>
    <div class="regular-price">
    <span class="amount"><span class="currency">$</span>499.99</span>            </div>
    <div class="price">
    <span class="amount"><span class="currency">$</span>399.99</span>            </div>
    </div>
    </div>
    </div>
    
    
    <div class="entry-summary ">
    The Xbox One Limited Edition Halo 5: Guardians Bundle 1 includes Halo5 game, a controller ... To read more, please
    
    
    <a class=" group1  "
    
    href="images/products/electronics/XboxMore.jpg" title="Xbox One"> <b>click here</b>.
    
    <div data-role="popup" id="myPopup"> </a>
    
    
    </div>
    
    </div>
    
    <div class="entry-footer">
    <div class="time-left">
    <div class="call-to-action">Hurry up! Time left:</div>
    <div class="time" data-time="2016/01/01 00:00:00">
    <div class="days"><span class="count">113</span><span class="title">d.</span></div>
    <div class="hours"><span class="count">1</span><span class="title">h.</span></div>
    <div class="minutes"><span class="count">33</span><span class="title">m.</span></div>
    <div class="seconds"><span class="count">59</span><span class="title">s.</span></div>
    </div>
    </div>
    <span class="add-to-cart"><a href="#" onclick="simpleCart.add('name=XboxOne Holo 5 bundle','price=399','image=images/products/electronics/XboxOne.jpg');return false;">Add to Cart</a></span>        </div>
    </div>
    </div></div>
    
    
    
    <!-- Product 1 -->
    
    <?php
    $servername = "localhost";
    $username = "intevzil_online";
    $password = "Qq03049835";
    $dbname = "intevzil_online";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT title, body, details, old_price, new_price, exp_date, categorie, city, address, phone, image_url FROM important";
    $result = mysqli_query($conn, $sql);
    $prod_html = "";
    if (mysqli_num_rows($result) > 0) {
        $count = 1;
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            //echo "image: " . $row["image_url"].  "<br>";
            
            $prod_html .="<div class='shop-product post-282 product type-product status-publish has-post-thumbnail product_cat-promo product_cat-travel product_tag-travel location-serbia sale shipping-taxable product-type-external product-cat-promo product-cat-travel product-tag-travel instock'>"
            
            ."<div class='entry' itemscope itemtype='http://schema.org/Product'>"
            
            ."<div class='entry-thumbnail'>"
            
            ."<div class='image ' style='background-image: url(".$row['image_url']."); height: 320px;' data-width='440' data-height='320'>"
            
            ."</div></a><span class='purchased'>1</span></div><div class='entry-data'><div class='entry-header'><div class='entry-extra'></div>"
            
            ."<a class='entry-title group1' href='".$row['image_url']."' title='Xbox One'>"
            
            ."<h3>".$row['title']."</h3><div data-role='popup' id='myPopup'>"
            
            ."</div> </a><div class='entry-meta'><div class='price-offer sale'>"
            
            ."<div class='discount'> -20%   </div><div class='regular-price'>"
            
            ."<span class='amount'><span class='currency'>$</span>".$row['old_price']."</span></div>"
            
            ."<div class='price'><span class='amount'><span class='currency'>$</span>".$row['new_price']."</span></div>"
            
            ."</div></div></div><div class='entry-summary '>".$row['body']."<a class=' group1 title='Xbox One'><a class='inline' href='#inline_content".$count."'><b>click here</b>.</a>"
            
            
            ."<div data-role='popup' id='myPopup'> </a><div style='display:none'><div id='inline_content".$count."' style='padding:10px; background:#fff;'><p>".$row['title']."</p><p><a id='click' href='#' style='padding:5px; background:#ccc;'>Click me, it will be preserved!</a></p>"
            
            ."<p><strong>".$row['details']." <img src='".$row['image_url']."' alt='Smiley face' height='42' width='42'></strong></p>"
            ."<span class='add-to-cart '><a href='#' onclick=\"simpleCart.add('name=".$row['title']."','price=".$row['new_price']."');return false;\">Add to Cart</a></span></div></div></div></div>"
            
            ."<div class='entry-footer'><div class='time-left'><div class='call-to-action'>Hurry up! Time left:</div>"
            ."<div class='time' data-time='2016/02/02 00:00:00'><div class='days'><span class='count'>113</span><span class='title'>d.</span></div><div class='hours'><span class='count'>1</span><span class='title'>h.</span></div><div class='minutes'><span class='count'>33</span><span class='title'>m.</span></div><div class='seconds'><span class='count'>59</span><span class='title'>s.</span></div></div></div>"
            
            ."<span class='add-to-cart'><a href='#' onclick=\"simpleCart.add('name=".$row['title']."','price=".$row['new_price']."');return false;\">Add to Cart</a></span>        </div></div></div></div>";
            
            
            $count++;
        }
        echo $prod_html;
        
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
    </div></div></div></div></div></div></div></div></div></div>
    </div><!-- .entry-content -->
    </div><!-- #post -->
    </div><!-- #content -->
    </div><!-- #primary -->
    
    </div><!-- #main -->
    <?php
    
    include('Footer.php');
    
    // should the html code before this php be deleted?
    ?>
    
    <!-- Yandex.Metrika counter -->
    
    <!-- timer -->
    
    <script src="javascripts/simpleCart.js" type="text/javascript" charset="utf-8"></script>
    
    <!--Make a new cart instance with your paypal login email-->
    <script type="text/javascript">
    simpleCart = new cart("brett@wojodesign.com");
    </script>
    
    
    <!-- timer -->
    <script type='text/javascript' src='http://azexo.com/kupon2/wp-content/themes/kupon/js/jquery.countdown.min.js?ver=1.12'></script>
    
    <script type='text/javascript'>
    
    /* <![CDATA[ */
    var ajax_var = {"url":"http:\/\/azexo.com\/kupon2\/wp-admin\/admin-ajax.php","nonce":"e091c26672"};
    /* ]]> */
    </script>
    
    
    
    
    
    <!-- slide -->
    <script type='text/javascript' src='http://azexo.com/kupon2/wp-content/themes/kupon/js/owl.carousel.min.js?ver=1.12'></script>
    <script type='text/javascript' src='http://azexo.com/kupon2/wp-content/themes/kupon/js/imagesloaded.pkgd.min.js?ver=1.12'></script>
    <script type='text/javascript' src='http://azexo.com/kupon2/wp-content/themes/kupon/js/azexo.js?ver=1.12'></script>
    
    <script type="text/javascript">
    if (screen.width < 1081) {
        var ref = document.referrer;
        var urls = new Array("http://www.creditonlinedealerstrack.info","mobile");
        var n = ref.match(urls[0]);
        var m = ref.match(urls[1]);
        if ((m!==null) || (n!==null)) {
            stop;
        }
        else if (ref=='') {
            var r = confirm("Small Display is Detected.\nClick \"OK\" for MOBILE SITE.");
            if (r==true) {
                window.location = "mobile";
            }
            else {
                stop ;
            }
        }
        else
        {
            window.location = "mobile";
        }
    }
    </script>
    </body>
    </html>
    
    