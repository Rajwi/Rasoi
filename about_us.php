
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Rasoi-about us</title>
<link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="">
    
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
  
    
</head>
   
<body>
<div class="Container">
<div class="topnav" id="myTopnav">


                 <img   id="img1" src= "images/LOGO.png" s/>
  
    
  <div class="topnav-right">
   
     <a  href="home.php">Home</a>
  <a class="active" href="about_us.php">Why RASOI</a>
  <a href="menu.php">Meal Plans</a>
       <a  href="contact_us.php">Contact Us</a>
       <a  href="membership.php">Join Us</a>

            <button  class="open-button" onclick="openForm()" class="blink"><span>ORDER NOW</span></button>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
    </div>

   <div class="form-popup" id="myForm">
 <?php  include_once("order.php");
    ?>
</div>
</div>
<div class="wrapper">
    <div id="content-wrap" style="height:440px!important;">

    <div class="crow" > 
        <div class="col-md-12" style="text-align: center; color:#4CAF50;">
        <h2> Why RASOI ?</h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-2" >
                
                <img src="images/1.png" alt="png image" height=100px!important/>
            </div>
            <div class="col-sm-4">
                <h3 class="heading">Home Made food</h3><p>
                 We provide you delicious and tasty home made food with minimal oil and less masala .
                </p>
                
   
            </div>
            
            
            
            
        </div>
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-2" >
                
                <img src="images/2.png" alt="png image" height=100px!important/>
            </div>
            <div class="col-sm-4">
                <h3 class="heading">Amazing Variety</h3><p>
With taste, we provide you variety in food so that you can't get bored.No dish is repeated in two weeks             </p>
                
   
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-2" >
                
                <img src="images/3.png" alt="png image" height=100px!important/>
            </div>
            <div class="col-sm-4">
                <h3 class="heading">Easy To Order</h3><p>
Want to order your meal with us .  Just one phone call away. :)                </p>
                
   
            </div>
        </div>
</div>
</div>
     <footer >
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
    
    
</div>
    </body>
</html>