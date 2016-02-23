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




                        <meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada"><link rel="stylesheet" type="text/css" href="css/master.css">
                            <meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada"><link rel="stylesheet" type="text/css" href="css/example1.css">
                                <meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada"><link rel="stylesheet" type="text/css" href="css/example.css">
                                    
 
                                    <link rel="stylesheet" type="text/css" href="css/page-checkout.css">
                                    <link rel="stylesheet" type="text/css" href="css/sprites.css">
                            <script src='javascripts/simpleCart.js' type="text/javascript" charset="utf-8"></script>
                            
                            <!--Make a new cart instance with your paypal login email-->
                            <script type="text/javascript">
                            simpleCart = new cart("brett@wojodesign.com");
                            </script>
                            
                            
                            

                            
                            
                            
                            
                            
                            
                            
                            <?php
                            include ('Header.php');
                            ?> 
                            
                            
                            
                            
                            
                            
                            
                         
                            
                            


<body id="PageSelectPayment">


    <div id="PaymentMainContainer" class="layout-0 fixed-width bottom-space">
<h4>Select Payment Option</h4>

<hr>

<div class="layout-2">
<div class="col-2">
    
    <div class="container-info container-summary" id="PurchaseSummary">
    <h2>Your Order</h2>

    <dl>
    <dt><span class=""></span> Number of item(s)    </a></li>
</dt>
            <dd>


<span class="simpleCart_quantity"> 0 </span></li>


</dd>

<dt class="total"  >   Total Price:  <span class="simpleCart_total"> 0 </span> </dt>

<a href="myCart.php" button class="button-task" type="submit" name="ccsubmit" id="ccsubmit">
Review order</button></a>



 </div>
</div>
<div class="col-1">
<div class="container-forms">

<div class="container-info">
    
    
    <form method="post" action="https://payflowlink.paypal.com" id="creditCardForm" autocomplete="off" data-payment-type="CreditCard">
        
        
        <input id="" name="ca.index.html.xsrf.token" value="1448948443033.9d1f636e32db0b38ed6d150ecd23603" type="hidden">
<input name="SECURETOKENID" value="" type="hidden">
        <input name="SECURETOKEN" value="" type="hidden">
        <input name="TENDER" value="C" type="hidden">

        <h2>Pay by Credit Card <span>(Visa / Mastercard)</span></h2>

        <ul class="purchase-form">
            <li>
                <label for="CardHolderName">Card Holder's Name:</label>

                <div class="form-section">
                    <input name="CARDHOLDERNAME" id="CardHolderName" req="" type="text">
                    <input name="FIRSTNAME" id="CardHolderFirstName" type="hidden">
                    <input name="LASTNAME" id="CardHolderLastName" type="hidden">
                    <span class="field-message" data-for="CardHolderName"></span>
                </div>
            </li>
            <li>
                <label for="CreditCardNumber">Credit Card Number:</label>

                        <div class="form-section">
                            <input autocomplete="off" name="CARDNUM" id="CreditCardNumber" maxlength="16" data-type="creditcard" req="" type="text">
                         </div>
                    </li>
            <li>
                <label for="ExpiryMonth">Expiration Date:</label>

                        <div class="form-section">
                            <select name="EXPMONTH" id="ExpiryMonth">
                                <option selected="selected" value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                </select>
                            <select name="EXPYEAR" id="ExpiryYear">
                                <option selected="selected" value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                                <option value="2034">2034</option>
                                <option value="2035">2035</option>
                                </select>
                        </div>
                    </li>
            <li>
                <label for="SecurityCode">CVV2:</label>

                        <div class="form-section">
                            <input autocomplete="off" name="CVV2" id="SecurityCode" req="" maxlength="4" data-type="number" type="text">
                            <span data-hasqtip="0" class="tooltip-trigger icon" data-content="CvvTooltip"></span>
                            <span class="field-message" data-for="SecurityCode"></span>
                            
                            
                             <label for="PostalCode">Postal Code:</label>
                            
                             <input autocomplete="off" name="CVV2" id="PostalCode" req="" maxlength="6" data-type="number" type="text">
                            <span data-hasqtip="0" class="tooltip-trigger icon" data-content="CvvTooltip"></span>
                            <span class="field-message" data-for="SecurityCode"></span>
                            
                            


                            
 
                        </div>
                    <span id="CvvTooltip" class="tooltip-content">
                    <img src="payment-cvv2.png">
              
              
              
              </span>
              


            </li>
            
            
    

            <li>
                 <label>&nbsp;</label>

                 <div class="form-section">
                    <input name="remember" id="Remember" type="checkbox">
                    <label for="Remember">Save card information</label><br>
                 </div>
              </li>
            <li>
                <label>&nbsp;</label>

                <div class="form-section">
                    <button class="button-task" type="submit" name="ccsubmit" id="ccsubmit">
                        Pay Now</button>
                    <label>&nbsp;</label>
                    <label>&nbsp;</label>
                    <label>&nbsp;</label>

<a href="index.php" button class="button-task" type="submit" name="ccsubmit" id="ccsubmit">
Continue Shopping</button></a>

                </div>
                
            </li>
        </ul>
    </form>
</div>

<div class="container-info" id="PayPalMethod">
    <form method="post" action="/m-paypal-express-submit.html" data-payment-type="PayPal">
        <input id="" name="ca.index.html.xsrf.token" value="1448948443033.9d1f636e32db0b38ed6d150ecd23603" type="hidden">
<ul class="purchase-form">
            <li>
                <label>
                    Pay with PayPal</label>

                <div class="form-section">
                    <input class="sprite-paypal-checkout" id="ppsubmit" value="" type="">
                 </div>
            </li>
        </ul>
    </form>
</div>





</div>


</div>
</div>

</div>
<?php
include ('Footer.php');
?> 
</div>
</body>
</html>