
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>order food</title>
<link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src=""></script>
  
    
</head>
<?php

session_start();
if(!empty($_SESSION)){
    echo $_SESSION["message"];
    session_unset();
}
?>
   
<body>
<div class="Container">
<div class="topnav" id="myTopnav">

                 <img   id="img1" src= "images/LOGO.png" s/>
  
 
  <div class="topnav-right">
   
     <a  href="home.php">Home</a>
  <a href="about_us.php">Why RASOI</a>
  <a href="menu.php">Meal Plans</a>
       <a  href="contact_us.php">Contact Us</a>
                   <a  href="membership.php">Join Us</a>

         <button   class="open-button" onclick="openForm()" class="blink"><span>ORDER NOW</span></button>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  
</div>
</div>
   <div class="form-popup" id="myForm">
 <?php  include_once("order.php");
    ?>
</div>
    <div class="container"> 
        <div class="row">
             
            <div class="col-sm-6">
   
                <h3 >  Thank you for ordering with us . Your food will be deliver to you with in 15-20 minutes. </h3>
            </div>
             <div class="col-sm-5" id="cont-img">
                 <img src="images/dd.jpg" style="height:300px;"/>
            </div>
           
        </div>
        <div class="row">
         
            </div>
  
</div>
     
     <footer  style="padding-top:200px !important">
         <div class="row" id="footer">
        
            <div  class="col-sm-4">
                <h3>SOCIALIZE</h3>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-snapchat-ghost"></a>


         </div>
            
            
   <div  class="col-sm-4" id="c">
                    <h3>CONTACT US</h3>
             G.T ROAD NEAR JAIL ROAD<br>
             GURADSPUR<br>
             <a href="tel:5551234567">PHONE: (+91)9780114575</a><br>
        <a href = "mailto:rasoi@info.com?">

            EMAIL:RASOI@INFO.COM</a>
        
      <p>RASOI © 2019. All rights reserved.</p>
         
         </div>
         <div  class="col-sm-4">
             
         
         </div>
         </div>
         
        </footer>
    </div>
    

     <script>
    

var slideIndex = 0;
carousel(); 

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); 
}
          
          
          
        function autoResizeDiv()
        {
            document.getElementById('main').style.height = window.innerHeight +'px';
        }
        window.onresize = autoResizeDiv;
        autoResizeDiv();

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
         
// When the user clicks on div, open the popup

</script>
    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    </body>
</html>