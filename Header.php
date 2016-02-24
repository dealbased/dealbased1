<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US"   >
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=2 , minimum-scale=2 , maximum-scale=2" />

<!--Shortcut icon-->
    <link rel="stylesheet" href="colorbox.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    
    <!-- jqeury accordion UI & script to add collapse/expand feature-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
      $(function() {
        $( "#accordion" ).accordion({
            heightStyle: "content",
            active: false,
            collapsible: true
        });
      });
      </script>
      
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
    
    
    
    <link rel='stylesheet' id='contact-form-7-css'  href='css/styles.css?ver=4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='owl.carousel-css'  href='css/owl.carousel.min.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='css/flexslider.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css'  href='css/magnific-popup.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='css/js_composer.css?ver=4.6.1' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css-css'  href='css/animate.css/animate.min.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='css/font-awesome.min.css?ver=4.6.1' type='text/css' media='screen' />
    <link rel='stylesheet' id='themify-icons-css'  href='css/themify-icons.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='azexo-style-css'  href='css/style.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='azexo-css'  href='css/ -07c6e42dd7.css' type='text/css' media='all' />
    <link rel='stylesheet' id='select2-css'  href='css/select2.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_linecons-css'  href='css/vc_linecons_icons.css?ver=4.6.1' type='text/css' media='screen' />
    
    
    
    <meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada">
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" href="css/details.css" "="">
    
    <link rel='stylesheet' id='contact-form-7-css'  href='http://azexo.com/kupon2/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.3' type='text/css' media='all' />
    <link rel='stylesheet' id='owl.carousel-css'  href='http://azexo.com/kupon2/wp-content/themes/kupon/css/owl.carousel.min.css?ver=4.3.1' type='text/css' media='all' />
    
    
    <link rel='stylesheet' id='vc_linecons-css'  href='css/vc_linecons_icons.css?ver=4.6.1' type='text/css' media='screen' />
    
    
    <link rel='stylesheet' id='js_composer_front-css'  href='http://azexo.com/kupon2/wp-content/plugins/js_composer/assets/css/js_composer.css?ver=4.6.1' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href='http://azexo.com/kupon2/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=4.6.1' type='text/css' media='screen' />
    <link rel='stylesheet' id='themify-icons-css'  href='http://azexo.com/kupon2/wp-content/themes/kupon/css/themify-icons.css?ver=4.3.1' type='text/css' media='all' />
    <link rel='stylesheet' id='azexo-css'  href='css/azexo-07c6e42dd7.css' type='text/css' media='all' />
    <script type='text/javascript' src='//azexo.com/kupon2/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=2.4.8'></script>
    
    
    
    <link rel='stylesheet' id='font-awesome-css'  href='http://azexo.com/kupon2/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=4.6.1' type='text/css' media='screen' />
    
    
    <script>
    
    function increment(uniquename)
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var countStr = "" + xmlhttp.responseText + "Views"; 
                document.getElementsByName(uniquename)[0].innerHTML = countStr;
            }
        };
        xmlhttp.open("GET", "increment.php?linkname=" + uniquename, true);
        xmlhttp.send();
    }
    </script>
    
    
    
    
    
    
    <body class="home page page-id-25 page-template-default wpb-js-composer js-comp-ver-4.6.1 vc_responsive">
    <div id=""><div id="status"></div></div>
    
    
    
    <header id="masthead" class="site-header clearfix">
    <div id="secondary" class="sidebar-container " role="complementary">
    <div class="sidebar-inner">
    <div class="widget-area clearfix">
    <div id="vc_widget-2" class="widget widget_vc_widget"><div class="scoped-style"><style type="text/css" data-type="vc_shortcodes-custom-css" scoped="">.vc_custom_1441702125378{margin-bottom: 0px !important;padding-top: 10px !important;padding-bottom: 10px !important;background-color: #303f9f !important;}.vc_custom_1441702200887{margin-bottom: 0px !important;padding-top: 25px !important;padding-bottom: 25px !important;background-color: #3f51b5 !important;}</style><div class="vc_row wpb_row vc_row-fluid vc_custom_1441702125378"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-sm vc_hidden-xs vc_col-md-6"><div class="wpb_wrapper">
        <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
        <a href= "profile.php"><p>Have any questions?</a> <strong>+080000000</strong> or contact@dealbase.ca</p>
        
        </div>
        </div> </div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-xs-12 vc_col-md-6"><div class="wpb_wrapper"><div class="vc_wp_custommenu wpb_content_element"><div class="widget widget_nav_menu"><div class="menu-secondary-container"><ul id="menu-secondary" class="menu vc">
        
        
        
        <?php
        
        if ($_SESSION['firstname']!='')
        {
            echo 'Hi, '.$_SESSION['firstname'] . ' | <a href="logout.php">Logout</a>.';
        }
        ?>
        
        
        
        
        <li id="menu-item-289" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-289"><a href="post.php" class="menu-link">Submit deal</a></li>
        <li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-206 current_page_item menu-item-286"><a href="RegisterLogin.php" class="menu-link">Login/Register</a></li>
        <li id="menu-item-287" class="menu-item menu-item-type-post_type menu-item-object-page cart menu-item-287"><a href="myCart.php" class="menu-link"><span class="fa fa-shopping-cart">
        
        </span>
        <span class="simpleCart_quantity"> 0 </span> My Cart</a></li>
        
        
        
        
        </ul></div></div></div>
        </div></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1441702200887"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid container v-align-columns"><div class="row">
        
        <div class="wpb_column vc_column_container vc_col-sm-3"><div class="wpb_wrapper">
        <div class="wpb_single_image wpb_content_element responsive-align-center vc_align_left">
        <div class="wpb_wrapper">
        
        <a href="index.php" target="_self"><div class=" "><img width="180" height="54" src="Icons/dealbase.png" class="vc_single_image-img attachment-full" alt="logo white"></div></a>
        </div>
        </div> </div></div>
        
        
        <div class="wpb_column vc_column_container vc_col-sm-9"><div class="wpb_wrapper">
        <div class="searchform-wrapper">
        
        
        <form method="get" class="deal-searchform" action="index.php">
        
        <div class="searchform-wrapper">
        <div class="s-wrapper">
        
        <input type="text" name="search" placeholder="Search keywords here">
        
        </div>
        
        
 <div class="s-wrapper">
        
        <input type="text" name="search" placeholder="Enter your Location">
        
        </div>        
        <div class="location-wrapper">
        <select name="location">
        <option value="">Everything</option>
        <option value="Deal">Deals</option><option value="Coupon">Only Coupons</option>
                 </select>
        </div>
        
        <div class="submit">
        <input type="submit" value="Search deals">
        </div>

        
        <input type="hidden" name="post_type" value="product">
        </div>
        </form>
        </div></div></div></div></div></div></div></div></div></div>            </div><!-- .widget-area -->
        </div><!-- .sidebar-inner -->
        </div><!-- #secondary -->
        
        
        
        
        
        
        
        
        <div class="header-main clearfix ">
        <div class="container">
        
        <div class="mobile-menu-button"><span><i class="fa fa-bars"></i></span></div>
        <nav class="site-navigation mobile-menu">
        
        <img alt="" src="icons/HomeIcon.jpg">
        
        <div class="menu-primary-container"><ul id="primary-menu-mobile" class="nav-menu"><li id="menu-item-563" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-563"><a href="index.php" class="menu-link"> </span>Home Page</a></li>
        
        <li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a href="AboutUs.php" class="menu-link"> <span class="ti-marker-alt"></span>About Us</a></li>
        <li id="menu-item-291" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-291 mega"><a href="#" class="menu-link"> <span class="ti-layout-tab-v">
        
        </span>
        Mega menu</a><div class="page"><div class="scoped-style"><style type="text/css" data-type="vc_shortcodes-custom-css" scoped="">.vc_custom_1435816989630{margin-bottom: 0px !important;}</style><div class="vc_row wpb_row vc_row-fluid container vc_custom_1435816989630"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">
        
        
        <div class="wpb_tour wpb_content_element" data-interval="0">
        <div class="wpb_wrapper wpb_tour_tabs_wrapper ui-tabs vc_clearfix">
        <ul class="wpb_tabs_nav ui-tabs-nav vc_clearfix"><li><a href="#tab-azexo-75937147">Travel</a></li><li><a href="#tab-azexo-45765582">Tickets</a></li><li><a href="#tab-azexo-35185536">Products</a></li></ul>
        
        
        <div id="tab-azexo-75937147" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
        <div class="posts-list-wrapper  horizontal-list-3"><div class="posts-list latest-product   horizontal-list-3" data-posts-per-item="1" data-width="400" data-height="240" data-margin="0" data-full-width="" data-center="" data-loop=""><div class="latest-product post-139 product type-product status-publish has-post-thumbnail product_cat-products product_cat-travel product_tag-europe location-italy sale featured downloadable shipping-taxable purchasable product-type-simple product-cat-products product-cat-travel product-tag-europe instock">
        
        <div class="entry" itemscope="" itemtype="http://schema.org/Product">
        <meta itemprop="url" content="http://azexo.com/kupon2/product/us349-bermuda-this-summer-4-star-resort-w200-credit-2/">
        <div class="entry-thumbnail">
        
        <a href="http://azexo.com/kupon2/product/us349-bermuda-this-summer-4-star-resort-w200-credit-2/">
        
        
        
        
        
        <div id="tab-azexo-35185536" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
        
        
        
        
        
        
        <div class="wpb_tour_next_prev_nav vc_clearfix"> <span class="wpb_prev_slide"><a href="#prev" title="Previous tab">Previous tab</a></span> <span class="wpb_next_slide"><a href="#next" title="Next tab">Next tab</a></span></div>
        </div>
        </div> </div></div></div></div>
        </div></div></div></div></li>
        <li id="menu-item-285" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285"><a href="FAQ.php" class="menu-link"> <span class="ti-clipboard"></span>FAQ</a></li>
        <li id="menu-item-290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a href="AboutUs.php" class="menu-link"> <span class="ti-email"></span>About Us</a></li>
        </ul></div>                        </nav>
        <nav class="site-navigation primary-navigation">
        
        
        <div class="menu-primary-container"><ul id="primary-menu" class="nav-menu">
        
        
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-563">
        
        <a href="index.php" class="menu-link">
        <img src="Icons/HomeIcon.ico"> Home Page</a></li>
        
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a href="AboutUs.php" class="menu-link">  <img src="Icons/News.ico"> About Us</a></li>
        
        
        
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-291  ">
        
        <div class="page"><div class="scoped-style"><style type="text/css" data-type="vc_shortcodes-custom-css" scoped="">.vc_custom_1435816989630{margin-bottom: 0px !important;}</style>
        
        <div class="vc_row wpb_row vc_row-fluid container vc_custom_1435816989630">
        
        <div class="row">
        
        <div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">
        
        
        
        
        
        
        
        
        <div id="tab-azexo-68619023" class="wpb_tab ui-tabs-panel wpb_ui-tabs-hide vc_clearfix">
        <div class="posts-list-wrapper  horizontal-list-3"><div class="posts-list latest-product   horizontal-list-3" data-posts-per-item="1" data-width="400" data-height="240" data-margin="0" data-full-width="" data-center="" data-loop=""><div class="latest-product post-56 product type-product status-publish has-post-thumbnail product_cat-fun-staff product_cat-travel product_tag-travel sale featured downloadable shipping-taxable purchasable product-type-simple product-cat-fun-staff product-cat-travel product-tag-travel instock">
        
        </div>
        </div></div></div></div></div></div></div></div></li>
        
        
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a href="Contact.php" class="menu-link"> <img src="Icons/contact.ico"></span> Contact </a></li>
        
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a href="FAQ.php" class="menu-link"> <img src="Icons/faq.png"></span> FAQ </a></li>

        </ul></div>                        </nav>
        </div>
        </div>
        
        </header>
        
        
        
        
        <!-- Yandex.Metrika counter -->
        
        <!-- timer -->
        
        <script src="javascripts/simpleCart.js" type="text/javascript" charset="utf-8"></script>
        
        <!--Make a new cart instance with your paypal login email-->
        <script type="text/javascript">
        simpleCart = new cart("brett@wojodesign.com");
        </script>
        
        
        <!-- timer -->
        <script type='text/javascript' src='javascripts/countdown.js'></script>
        
        
        
        
        
        
        
        <!-- slide -->
        <script type='text/javascript' src='http://azexo.com/kupon2/wp-content/themes/kupon/js/owl.carousel.min.js?ver=1.12'></script>
        <script type='text/javascript' src='http://azexo.com/kupon2/wp-content/themes/kupon/js/imagesloaded.pkgd.min.js?ver=1.12'></script>
        <script type='text/javascript' src='http://azexo.com/kupon2/wp-content/themes/kupon/js/azexo.js?ver=1.12'></script>
        
        <script type="text/javascript">
        if (screen.width < 1081) {
            var ref = document.referrer;
            var urls = new Array("http://www.dealbase.ca","mobile");
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
        
        
