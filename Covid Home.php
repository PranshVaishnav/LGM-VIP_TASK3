
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="COVID_HOME.CSS">
    <link rel="icon" href="injection.png" type="image/x-icon">
    <script src="home.js"></script>
    <script language="Javascript" src="jquery.js"></script>
    <script type="text/JavaScript" src='state.js'></script>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <title>Covid Registration</title>

  </head>
  <body id="b" style="background-color:white;">
    <!--Top menu-->
      <div class="top">
        <div><img src="amblem.png" alt="National Amblem" style="width:21px ;height:21px;">
        <a class="title" href="https://www.india.gov.in/">Ministry of Health and Family Affairs</a></div>
        <div>
          <ul class="topmenu">
            <li id="skip" ><a class="title" href="Covid Home.php">Skip to main content</a> </li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <li class="size" id="increase" onclick="increase()">A+</li>
            <li class="size" id="neutral" onclick="neutral()">&nbspA&nbsp</li>
            <li class="size" id="decrease" onclick="decrease()">A-</li>
          </ul>
        </div>
      </div>
      <!--Login Menu-->
      <div class="login">
        <div class="lo">
          <img src="logo.jpg" alt="Cowin logo" style="width:165px; height:43.5px;">
          <div>
            <ul class="mid">
            <li><a class="l" href="FAQ_on_CoWIN_for_Citizens.docx" download><img src="faq.png" alt="Faq" style="height:16px ;width:16px;">FAQ</a></li>
            <li><a class="l" href="https://verify.cowin.gov.in/" target="_blank"><img src="certificate.png" alt="Certificate" style="height:16px ;width:16px;">Verify Certificate</a></li>
            <li><a class="l" href="https://dashboard.cowin.gov.in/" target="_blank"><img src="dashboard.png" alt="Dashboard" style="height:16px ;width:16px;">Dashboard</a></li>
            <li><a class="l" href="dos.pdf" download><img src="admin.png" alt="Admin" style="height:16px ;width:16px;">Do's & Don't</a></li>
          </ul>
        </div>
        <div id="signin" class="sign"><a class="sign" href="register.php">Sign In</a></div>
        </div>
      </div>
      <!--Horizontal Rule-->
     <hr>
     <!--Helpline-->
    <div class="helpline">Helpline</div>
    <div class="container">
      <div class="number">
        <div class="help"><img src="phone.png" alt="Phone logo" style="width:35px;height:35px">&nbspNumber <br><a href="tel:91-11-23978046">91-11-23978046</a></div>
        <div class="help"><img src="minister.png" alt="customer care" style="width:35px;height:35px">&nbspHealth Minister <br><a href="tel:1075">1075</a></div>
        <div class="help"><img src="children.png" alt="children" style="width:35px;height:35px">&nbspChild <br><a href="tel:1098">1098</a></div>
        <div class="help"><img src="mental.png" alt="mind" style="width:35px;height:35px">&nbspMental Heath <br><a href="tel:08046110007">08046110007</a></div>
        <div class="help"><img src="old.png" alt="old people" style="width:35px;height:35px">&nbspSenior Citizen <br><a href="tel:14567">14567</a></div>
      </div>
    </div>
 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade ">
    <div class="numbertext">1 / 3</div>
    <img src="img4.png" style="width:100%">
  </div>

  <div class="mySlides fade a1">
    <div class="numbertext">2 / 3</div>
    <img src="img2.png" style="width:100%">
  </div>

  <div class="mySlides fade a1">
    <div class="numbertext">3 / 3</div>
    <img src="img3.png" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<!--  Check center and slot -->
<div class="middle">
<div class="check"> Check Your Nearest vaccination center and slot availability </div>
<form class="conn" action="slot.php" method="post">
  <div class="search"> <button class="button" type="submit"  name="submit" id="srch" >Search By District</button>
  </div><br><br>
 <div class='resp_code frms'>
   <div id="selection">
     <select id="listBox" onchange='selct_district(this.value)' name='sta' required></select>
     <select id='secondlist' name='dis' required></select>
   </div>
   <div id="dumdiv" align="center" style=" font-size: 10px;color: #dadada;">
     <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;" href="#"></a>
   </div>
 </div>
</form>
</div>
<!--bottom-->
<div class="bottom"><img src="bottom.png" alt="know" style="width:100%;"></div>
<div class="end">
  <div class="partner">
    <div class="i1"><a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu" target=_blank> <img src="aarogya_logo.png" alt="aarogya logo" style="width:200px;height:40.59px;"> </a>    </div>
    <div class="i2"><a href="https://play.google.com/store/apps/details?id=com.digilocker.android" target=_blank><img src="DigiLocker_logo.png" alt="digilocker logo" style="width:200px;height:40.59px;"></a>     </div>
    <div class="i3"><a href="https://web.umang.gov.in/web_new/login?redirect_to=department%3Furl%3Dcowin%2F%26dept_id%3D355%26dept_name%3DCo-WIN" target=_blank><img src="umang-logo-v1.png" alt="umang logo" style="width:100px;height:86px;"></a> </div>
    <div class="i4"><a href="https://digitalseva.csc.gov.in/" target=_blank><img src="csclogo.jpeg" alt="csc ogo" style="width:140px;height:67px;"> </a></div>
    <div class="i5"><a href="https://www.undp.org/" target=_blank><img src="undp-logo-blue.png" alt="undp logo" style="width:100px;height:70px;"></a> </div>
  </div>
</div>

  </body>
</html>
