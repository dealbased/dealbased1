<?php session_start();
    ?>
<!DOCTYPE html>

<meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada"><link rel="stylesheet" type="text/css" href="css/master.css">
<link rel="stylesheet" href="css/example.css" href="example.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/example1.css"   type="text/css" media="screen" charset="utf-8" />

<link rel="stylesheet" type="text/css" href="css/page-checkout.css">

<link rel="stylesheet" type="text/css" href="css/sprites.css">





                            <!-- Masthead -->
                            
                            

<?php
    
    include('Header.php');
    
    // should the html code before this php be deleted?
    
    ?>





                            


<body id="PageSelectPayment">


    <div id="PaymentMainContainer" class="layout-0 fixed-width bottom-space">
<h4>My order review</h4>

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

<a href="Checkout.php" button class="button-task" type="submit" name="ccsubmit" id="ccsubmit">
Checkout</button></a>



 </div>
</div>
<div class="col-1">
<div class="container-forms">

<div class="container-info">
    

    <form method="post" action="https://payflowlink.paypal.com" id="creditCardForm" autocomplete="off" data-payment-type="CreditCard">
        
        
        <div class="simpleCart_items" >





</div>


<div class="  ">
<a href="index.php" button class="simpleCart_empty simpleCart_checkout2 button-task">Continue Shopping</button></a>
<a href='#' button class="simpleCart_empty button-task">Empty Cart</button></a>

</div>

<script src="javascripts/simpleCart.js" type="text/javascript" charset="utf-8"></script>

<!--Make a new cart instance with your paypal login email-->
<script type="text/javascript">
simpleCart = new cart("roudoouOu@mail.com");
</script>


</div>

</div>


</div>
</div>

</div>






<?php
    
    include('Footer.php');
    
    
    ?>






</body>
</html>
