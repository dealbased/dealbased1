<?php session_start(); ?>
<!DOCTYPE html>
<!--[if IE 7]>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<!--Shortcut icon-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://azexo.com/kupon2/xmlrpc.php">
<title>Contact | Kupon</title>
<link rel="alternate" type="application/rss+xml" title="Kupon &raquo; Feed" href="http://azexo.com/kupon2/feed/" />
<link rel="alternate" type="application/rss+xml" title="Kupon &raquo; Comments Feed" href="http://azexo.com/kupon2/comments/feed/" />

<meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada"><link rel="stylesheet" type="text/css" href="css/master.css">
<link rel="stylesheet" href="css/example.css" href="example.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/example1.css"   type="text/css" media="screen" charset="utf-8" />

<link rel="stylesheet" type="text/css" href="css/page-checkout.css">


<!-- Masthead -->
                                     <!-- Masthead -->


<?php
    
    include ('Header.php');
    
     ?> 






                                                        <body id="PageSelectPayment">


                                                        <div id="PaymentMainContainer" class="layout-0 fixed-width bottom-space">
                                                        <h4>Welcome to our Site</h4>

                                                        <hr>

                                                        <div class="layout-2">
                                                        <div class="col-2">

                                                        <div class="container-info container-summary" id="PurchaseSummary">
                                                        <h2>Why us?</h2>

                                                        <dl>
                                                        <dt><span class=""></span> We look forward to help you sav We look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you savWe look forward to help you sav   </a></li>
                                                        </dt>
                                                        <dd>




                                                        </dd>

                                                        
                                                        
                                                        
                                                        </div>
                                                        </div>
                                                        <div class="col-1">
                                                        <div class="container-forms">
                                                        
                                                        <div class="container-info">
                                                        
                                                        
                                                        <form action = 'login.php' method='post' >
                                                        
                                                        
                                                        
                                                        <h2>Log in </span></h2>
                                                            
                                                            
                                                            <?php
                                                            
                                                            echo '<p style="color: #CC0000">'.$_SESSION['systemMessage'].'</p>' ;
                                                            
                                                            $_SESSION['systemMessage']='';
                                                            
                                                            if ($_SESSION['systemMessageSuccess']!='')
                                                            {
                                                                echo '<p style="color: #00CC00">'.$_SESSION['systemMessageSuccess'].'</p>';

                                                             }
                                                            ?>
                                                        
  
                                                            
                                                        <ul class="purchase-form">
                                                        
                                                            
                                                       
                                                        <li>
                                                        <label for="firstname">Email Address:</label>
                                                        
                                                        <div class="form-section">
                                                        <input type='text' id='LastName' name='email'>                                                        </div>
                                                        </li>
                                                        
                                                        
                                                        <li>
                                                        <label for="lastname">Password:</label>
                                                        
                                                        <div class="form-section">
                                                        <input name="password" id="LastName" req="" type="password">
                                                        </div>
                                                        </li>
                                                        
                                                        
                                                        <li>
                                                        
                                                        
                                                        <p> <input type='submit' value='Log in'> </p>
                                                        
                                                        
                                                        </form>
                                                        
                                                        
                                                        
                                                        <form action = 'register.php' method='post' >
                                                        
                                                        
                                                        <label>&nbsp;</label>
                                                        
                                                        <h2>Register </span></h2>
                                                            
                                                            
                                                         <ul class="purchase-form">
                                                        
                                                        
                                                            <?php
                                                            
                                                            if ($_SESSION['systemMessageReg']!='')
                                                            {
                                                                echo '<p style="color: #CC0000">'.$_SESSION['systemMessageReg'] .'</p>';
                                                            } else if ($_SESSION['systemMessageRegSuccess'] != '')
                                                            {
                                                                echo '<p style="color: #00CC00">'.$_SESSION['systemMessageRegSuccess'] .'</p>';
                                                            }
                                                            
                                                            $_SESSION['systemMessageReg']='';
                                                            $_SESSION['systemMessageRegSuccess']='';                                                            ?>  

                                                        <li>
                                                        <label for="firstname">First Name:</label>
                                                        
                                                        <div class="form-section">
                                                        <input name="firstname" id="FirstName" req="" type="text">
                                                        <span class="field-message" data-for="CardHolderName"></span>
                                                        </div>
                                                        </li>
                                                        
                                                        
                                                        <li>
                                                        <label for="lastname">Last Name:</label>
                                                        
                                                        <div class="form-section">
                                                        <input name="lastname" id="LastName" req="" type="text">
                                                        <span class="field-message" data-for="CardHolderName"></span>
                                                        </div>
                                                        </li>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <li>
                                                        <label for="email">Email Address:</label>
                                                        
                                                        <div class="form-section">
                                                        <input autocomplete="off" name="email" id="LastName" maxlength="50"   type="text">
                                                        </div>
                                                        </li>
                                                        
                                                        
                                                        
                                                        
                                                        <li>
                                                        <label for="Password">Password:</label>
                                                        
                                                        <div class="form-section">
                                                        <input autocomplete="off" name="password" id="LastName" maxlength="16"   type="password">
                                                        </div>
                                                        </li>
                                                        <li>
                                                        <label for="Password">Repeat Password:</label>
                                                        
                                                        <div class="form-section">
                                                        <input autocomplete="off" name="repeatpassword" id="LastName" maxlength="16"   type="password">
                                                        </div>
                                                        </li>
<li>


<label for="case" class="add-asterisk">Important:</label>




<div class="form-section">




<select id="case" name="case" >
<option value="dealer">Dealer</option>
<option value="client">Client</option>
<option value="both">Both</option>

</select>
</div>

</li>




                                                        <li>
                                                        
                                                        
                                                        <p> <input class=" " type='submit' value='Register' name='submit'  </p>

                                                        


                                                        

                                                        </ul>
                                                        </form>
                                                        </div>
                                                        
                                                        
                                                        </div>
                                                        
                                                        
                                                        </div>
                                                        </div>
                                                        
                                                        </div>
                                                        
                                                        <div id="LayoutFooter">
                                                        <footer>
                                                        <div class="footer-top">
                                                        <section>
                                                        <ul>
                                                        <li class="footer-title">index.html Information</li>
                                                        <li><a href="index.htmlhelpdesk/policies/index.html-terms-of-use" rel="nofollow">Terms of Use</a></li>
                                                        <li><a href="index.htmlhelpdesk/policies/index.html-privacy-policy" rel="nofollow">Privacy Policy</a></li>
                                                        <li><a href="index.htmlhelpdesk/policies/" rel="nofollow">Posting Policy</a></li>
                                                        <li><a href="http://www.index.htmlforbusiness.ca" rel="nofollow">Advertise with Us</a></li>
                                                        <li><span class="ad-choice">AdChoice</span></li>
                                                        </ul>
                                                        </section>
                                                        <section>
                                                        <ul>
                                                        <li class="footer-title">index.html Support</li>
                                                        <li><a href="index.htmlhelpdesk/" rel="nofollow">Help Desk</a></li>
                                                        <li><a href="index.htmlhelpdesk/safety/safety-at-index.html" rel="nofollow">Online Safety Tips</a></li>
                                                        
                                                        </ul>
                                                        </section>
                                                        <section>
                                                        <ul>
                                                        <li class="footer-title">index.html Autos</li>
                                                        <li><a id="DealerSignInLink" href="/t-dealer-registration.html" rel="nofollow">New Dealer Signup</a></li>
                                                        <li><a href="index.htmlhelpdesk/policies/why-use-index.html-autos" rel="nofollow">Dealer Help Pages</a></li>
                                                        <li><a href="http://index.htmlforbusiness.ca/autos/index.html-autos-blog/">Dealer Blog</a></li>
                                                        </ul>
                                                        </section>
                                                        <section>
                                                        <ul>
                                                        <li class="footer-title">Explore index.html</li>
                                                        <li><a href="index.htmlhelpdesk/basics/benefits-of-registering" rel="nofollow">index.html Member Benefits</a></li>
                                                        <li><a href="http://index.htmlblog.ca/about-us/" rel="nofollow">About index.html</a></li>
                                                        <li><a href="http://index.htmlblog.ca/heroes/" rel="nofollow">index.html Success Stories</a></li>
                                                        <li><a href="http://news.index.html.ca/news/">index.html News & Press Releases</a></li>
                                                        </ul>
                                                        </section>
                                                        <section class="last">
                                                        <ul>
                                                        <li class="footer-title">Frequently Asked Questions</li>
                                                        <li><a href="index.htmlhelpdesk/basics/benefits-of-promoting-ads" rel="nofollow">How do I get people to see my Ad?</a></li>
                                                        <li><a href="index.htmlhelpdesk/technical-issue/where-is-my-ad" rel="nofollow">Where is my index.html Ad? I can&#39;t find it.</a></li>
                                                        <li><a href="index.html" rel="nofollow">How can I change my Ad?</a></li>
                                                        <li><a href="index.html" rel="nofollow">How do I delete my Ad?</a></li>
                                                        </ul>
                                                        </section>
                                                        </div>
                                                        
                                                        <div class="copyright"><br>
                                                        <p>Copyright &copy; 2015 RK International AG. All rights reserved.</p>
                                                        <p class="fine-print">Google, Google Play, YouTube and other marks are trademarks of Google Inc.</p>
                                                        </div>
                                                        </footer>
                                                        </div>
                                                        </body>
                                                        </html>