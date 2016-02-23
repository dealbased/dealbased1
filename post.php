<?php
    session_start();
    //header("Location: login.php");
    
    $user_id = $_SESSION['user_id'];
    
    //echo "User_ID:".$_SESSION['user_id'];
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
<link rel="stylesheet" href="css/calendar.css">

<link rel="alternate" type="application/rss+xml" title="Kupon &raquo; Feed" href="http://azexo.com/kupon2/feed/" />
<meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada"><link rel="stylesheet" type="text/css" href="css/master.css">
<meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada"><link rel="stylesheet" type="text/css" href="css/example1.css">
<meta property="og:type" content="website"><meta property="og:description" content=""><meta property="og:title" content="index.html Canada"><link rel="stylesheet" type="text/css" href="css/example.css">


<link rel="stylesheet" type="text/css" href="css/page-checkout.css">
<link rel="stylesheet" type="text/css" href="css/sprites.css">



<title>Dealbase, Post your adds</title>



<?php
    include('Header.php');
    // should the html code before this php be deleted?
    ?>
<?php
    session_start();
    ?>
<?php
    if(isset($_POST['title'])){
        
        $title = $_POST['title'];
        $body = $_POST['body'];
        $details = addslashes($_POST['details']);
        $old_price = $_POST['oldprice'];
        $new_price = $_POST['newprice'];
        $Expiration = $_POST['Expiration'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $postalcode = $_POST['postalcode'];
        $phone = $_POST['phone'];
        $categorie = $_POST['categorie'];
        $percentage_off = $_POST['percentage_off'];
        $redirect_link = $_POST['redirect_link'];

        $sign = $_POST['sign'];
        
        
        
    }
    
    if(isset($_FILES['image'])){
        
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
        
        $expensions = array("jpeg","jpg","png");
        
        if(in_array($file_ext, $expensions)==false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file";
        }
        
        if($file_size>2097152){
            $errors[]="File size must be less than 2 MB";
            
        }
        
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"./images/".$file_name);
            $image_url = "./images/".$file_name;
            echo "success! Details updated successfully";
        }
        else{
            
            print_r($errors);
        }
        
        //Now the db part
        
        $servername = "localhost";
        $username = "dealldsx_dealers"; //dealldsx_dealers
        $password = "Qq03049835";//Qq03049835
        $dbname = "dealldsx_dealers";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn){
            
            die("Connection failed".mysqli_connect_error());
        }
        //This one? yes this is the post.php file that we have i didint put the inputs and everything only php
        function randomstring($length)
        { //NOTE you could improve this better later, for now it will work fine.i will add you on facebook
            // and keep you updated to be my hero ... ok so this is what we do. ok am here
            //name column name again? we did counter and uid thats right
            $allowedCharacters = "abcdefghijklmnopqrstuvwxzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $prefix = "ad";
            $result = "";
            for($i=0;$i<$length;$i++)
            {
                $index = rand(0, 51);
                $result .= $allowedCharacters[$index];
                
            }
            return $prefix.$result;
        }
        //ok 1 sec see? TEST this. now when you add an ad, the only thing we see right now, will be values in those columns in phpmyadmin ok let me try :D
        $uid = randomstring(15);
        $sql = "INSERT INTO articles (user_id, title, body, details, new_price, old_price, Expiration,categorie, city, address,postalcode, phone, image_url, uid,percentage_off, redirect_link, sign, counter)
        VALUES ('$user_id','$title', '$body', '$details','$new_price', '$old_price', '$Expiration', '$categorie', '$city', '$address','$postalcode','$phone','$image_url', '$uid','$percentage_off','$redirect_link', '$sign', 0)";
        
        if($conn->query($sql)===TRUE){
            echo "Details inserted in articles table successfully";
        }  else{
            echo "ERROR:". $sql."<br>",$conn->error;
        }
        $conn->close();
    }
    ?>




<body id="PageSelectPayment">


<div id="PaymentMainContainer" class="layout-0 fixed-width bottom-space">
<h4>Post your add</h4>

<hr>

<div class="layout-2">
<div class="col-2">

<div class="container-info container-summary" id="PurchaseSummary">
<h2>Your Order</h2>



<dl>
</dt>
<dd>




</dd>


<a href="myCart.html" button class="button-task" type="submit" name="ccsubmit" id="ccsubmit">
Preview</button></a>




</div>
</div>
<div class="col-1">
<div class="container-forms">

<div class="container-info">


<form action="" method="POST" enctype="multipart/form-data">





<h2>Add description</span></h2>

<ul class="purchase-form">
<li>

<?php
    if(!isset($_SESSION['email'])) {
        echo "<font style='padding-left: 170px;' color='red'>You have to be logged in to Post your Ad(s)</font>";
        
    }
    else
    {
    ?>


<label for="title" class="add-asterisk">Title:</label>

<div class="form-section">
<input autocomplete="off" name="title" id="CreditCardNumber" data-req="true"  maxlength="30" data-type="creditcard" req="" type="text">
</div>
</li>

<li>
<label for="details" class="add-asterisk">Product Details:</label>

<div class="form-section">
<textarea id="pstad-descrptn" name="details"  maxlength="61000" row="50" data-minlength="10"></textarea>
</div>


</li>



<li>



<div class="form-section">




<select id="selltype" name="selltype" >
<option value="15">Redirect To website</option>
<option value="16">Sell On Dealbase</option>

 
</select>
<br> <br>

<div id="insertlink" >
<label for="new_price"  id="insertlink" class="add-asterisk"><font color="green">Insert Link:</font></label>
<input autocomplete="off" name="redirect_link" id="link" req="" maxlength="1000" type="text">




</div>





<li>



<div class="form-section">




<select id="dealtype" name="dealtype" >
<option value="14">Deal By price</option>
<option value="13">Percentage off</option>
</select>
<br> <br>

<div id="parentPermission" >
<label for="new_price"  class="add-asterisk"><font color="green">Before:</font></label>
<input autocomplete="off" name="oldprice" id="PostalCode" req="" maxlength="6" type="text"><font color="blue"><font name="sign"> $</font></font>


<label for="new_price" class="add-asterisk"><font color="green">After:</font></label>

<input autocomplete="off" name="newprice" id="PostalCode" req="" maxlength="6" type="text"> <font color="blue" name="sign"> $</font>
</div>

<div id="parentPermission2" >
<font color="red"> * </font><font color="green">Save </font>
<input autocomplete="off" name="percentage_off" id="PostalCode" req="" maxlength="6"  type="text">
<label for="new_price"  ><font color="blue"><a name="sign"> %</a></font></label>

</div>

 


<li>




<label for="locationLevel0" class="add-asterisk">Categorie:</label>

<div class="form-section">
<select id="locationLevel0" name="categorie" req="req" class="locationSelector ">
<option value="travel">
Travel</option>
<option value="thingstodo">
Things to do</option>
<option value="electronics">
Electronics</option>
<option value="restaurants">
Restaurants</option>
<option value="fashion">
Fashion</option>
<option value="health">
Beauty and Health</option>
<option value="products">
Products</option>
<option value="Services">
Services</option>

</select>


<select id="locationLevel0" name="specific" req="req" class="locationSelector ">
<option value="Coupon">
Coupon</option>
<option value="Deal">
Deal</option>

</select>

</div>


<li> 

<label for="locationLevel0" name="Expiration" class="">Expiration Date:</label>
<div class="form-section">


<select name="Expiration">
    <option> - Month - </option>
    <option value="January">January</option>
    <option value="Febuary">Febuary</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
</select>

<select name="Expiration">
    <option> - Day - </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>

<select name="Expiration">
    <option> - Year - </option>
    <option value="1993">2015</option>
    <option value="1992">2016</option>
    <option value="1991">2017</option>
</select>


</div>
<div class="form-section">

<font color="red">Keep empty if your ad dosen't expire.</font>
</div>
<li>
<h2>Contact information</span></h2>

<ul class="purchase-form">
<li>



<li>

<label for="locationLevel0" class="add-asterisk">City:</label>

<div class="form-section">
<select id="locationLevel0" name="city" req="req" class="locationSelector ">
<option value="Montreal">
Montreal</option>
<option value="Laval">
Laval</option>
<option value="Toronto">
Toronto</option>
</select>

</div>


<li>

<label for="description" class="add-asterisk">Street Address:</label>

<div class="form-section">
<input id="Streetaddress" name="address" type="text"  maxlength="64">

<li>
<label for="oldprice" class="add-asterisk">Postal Code:</label>

<div class="form-section">
<input autocomplete="off" name="postalcode" id="PostalCode" maxlength="6" data-type="number" type="text">
</div>


<li>

<label for="description" class="add-asterisk">Phone number:</label>

<div class="form-section">
<input autocomplete="off" name="phone" id="CreditCardNumber" maxlength="12"  type="text">
</div>

<li>

<label class="add-asterisk" for="title">Add Image:</label>

<div class="form-section">
<input name="image" id="body"  type="file">
</div>


</li>

</li>

<input type='submit' value='Submit'> </p>

<li>
<?php
    }
    
    
    
    ?>

</li>
</ul>
</form>
</div>



</div>

<div class="actions">
</div>

<div class="loading-overlay">
<div class="wrapper">
<div class="spinner"></div>
<p>Processing...</p>
</div>
</div>

</div>


</div>
</div>

</div>



</body>


<?php
    include('Footer.php');
    ?>

<script>
    document.querySelector('#lastSubmit').addEventListener("click",function(e){
        var missing=false;
[].slice.call(document.querySelectorAll("input")).forEach(function(elem){
    if(elem.dataset&&elem.dataset.req&&!elem.val){
        missing=true;

    }
})
if(missing){alert("One or more fields are missing. Please fill all required fields");
                     e.preventDefault();}
    });
    /**
 * File: js/showhide.js
 * Author: design1online.com, LLC
 * Purpose: toggle the visibility of fields depending on the value of another field
 **/

 </script>


<script>
$(document).ready(function () {
                  toggleFields(); //call this first so we start out with the correct visibility depending on the selected form values
                  $("#selltype").change(function () {
                                   toggleFields();
                                   });
                  
                  });
function toggleFields() {
    if
        ($("#selltype").val() == 15)
        $("#insertlink").show();

    else if 
                ($("#selltype").val() ==16)
                           $("#insertlink").hide();


}
</script>

 <script>
$(document).ready(function () {
                  toggleFields(); //call this first so we start out with the correct visibility depending on the selected form values
                  $("#dealtype").change(function () {
                                   toggleFields();
                                   });
                  
                  });
function toggleFields() {
    if
        ($("#dealtype").val() == 13  )
        $("#parentPermission2").show()&&
        $("#parentPermission").hide();
    else
        $("#parentPermission2").hide()&&
        $("#parentPermission").show();


    if
        ($("#selltype").val() == 15)
        $("#insertlink").show();

    else if 
                ($("#selltype").val() ==16)
                           $("#insertlink").hide();

}
</script>


 



</html>
