<?php
session_start();
$con=mysqli_connect("localhost","root","","info");
if(!$con)
{
  die('connection error:'.mysqli_connect_error);
}
$state=$_POST['sta'];
$district=$_POST['dis'];
$sql="SELECT * FROM info where STATE=UPPER('$state')AND DISTRICT=UPPER('$district') AND SLOTS>0";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)==1)
{
 $query="SELECT * FROM info WHERE STATE='$state' AND DISTRICT='$district'";
 $fan = $con->query($query);
 $row = $fan->fetch_assoc();
}
else{
  echo '<script type="text/javascript">';
       echo 'alert("NO SLOTS AVAILABLE AT YOUR PLACE NOW");';
       echo 'window.location= "Covid Home.php";';
       echo '</script>';
}
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Co-WIN Application</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">

     <script >
     function validateForm() {
var x = document.forms["abs"]["fname"].value;
var y = document.forms["abs"]["mobi"].value;
var z = document.forms["abs"]["yr"].value;
var a = document.forms["abs"]["noid"].value;
if (x == "") {
  alert("Name must be filled out");
  return false;
}
if (y == "" ) {
  alert("Invalid mobile number");
  return false;
}
if (z == "" ) {
  alert("Invalid Year Of Birth");
  return false;
}
if (a == "") {
  alert("Invalid Identification Number");
  return false;
}
}
     </script>
     <style>
         * {
             box-sizing: border-box;
             font-family: 'Roboto', sans-serif;
         }

         .left {
             /* border: 2px solid red; */
             display: inline-block;
             position: absolute;
             top: -18px;
             padding: 15px;
             left: 250px;
         }

         .right {
             /* border: 2px solid black; */
             display: inline-block;
             position: absolute;
             right: 370px;
             top: 2px;
         }

         header {
             background: #001f60;
             padding: 60px 0px 5px;
             color: #fff;
             margin: -10px -8px 0px;
             /* top: 0px; */
         }

         .left div img {
             width: 25px;
             height: 40px;
             margin: 10px 244px 0px 0px;
         }

         .left div a {
             font-family: 'Roboto', sans-serif;
             text-decoration: none;
             text-align: center;
             color: white;
             font-size: 14px;
             font-weight: 100;
             padding: 20px 23px;
             position: absolute;
             top: 15px;
             left: 20px;
         }

         .right ul li {
             display: inline-block;
             padding: 0px 8px;
             font-size: 14px;
         }

         .right ul {
             margin: 15px -80px;
         }

         .mid img {
             /* border: 2px solid black; */
             padding: 9px 162px;
             display: inline-block;
             width: 479px;
             left: 135px;
             margin: -36px -9px;
             height: 65px;
         }

         .mid div {
             /* border: 2px solid red; */
             padding: 30px;
             margin: 1px -8px;
             border-bottom: 2px solid #f1f1f1;
         }
         footer  {
             background-color:#001f60 ;
             color: white;
             display: inline-block;
             bottom: 0px;
             width: 1511px;
             height: 40px;
         }
         footer ul li a{
             text-decoration: none;
             color: white;
             font-size: 15px;
         }
         footer ul li{
             display: inline-block;
             font-size: 15px;
         }
         .kona ul{
             /* border: 2px solid red; */
             width: 800px;
             margin: -22px 11px -2px 650px;
         }
        .pahla a{
            text-decoration: none;
            color: white;
        }
        .pahla{
            /* border: 2px solid red; */
            width: 33%;
            margin: 10px 0px 0px 149px;
        }
         .data
         {
           margin:30px;
           width:1000px;
           height:500px;
           border:2px solid black;
           border-radius:25px;
           background-color:white;
           display:flex;
           flex-direction:column;

         }
         .top{
           display:flex;
           justify-content:center;
           background-color:#f6f6f6;
         }
         .info{
           margin:30px;
           width:900px;
           height:500px;
           display: flex;
           flex-direction: column;
              }
              .form{
                width:900px;
                height:250px;

                display: flex;
                justify-content:space-between;
              }
              .upper{
                height:150px;
              }

              .lest,.ri{
               display: flex;
               justify-content: space-around;
               flex-direction: column;
              }
              button {
	--width: 180px;
	--height: 60px;
	border: 0;
	position: relative;
	min-width: var(--width);
	min-height: var(--height);
	border-radius: var(--height);
	color: #fff;
	font-family: "Montserrat";
	font-weight: bold;
background-color: #008CBA;
	cursor: pointer;
	overflow: hidden;
	display: flex;
	justify-content: center;
	align-items: center;
	margin: 0 1rem;
}

  </style>
 </head>

 <body>
     <header>
         <!-- This is for left -->
         <div class="left">
             <div><img src="amblem.png" alt="error"></div>
             <div><a href="https://www.india.gov.in/" target="_blank"> Ministry of Health and Family Welfare </a>
             </div>
         </div>
         <!-- This is for right -->
         <div class="right">
             <ul>
                 <li style="border-right:white">FAQ |</li>
                 <li>1079 |</li>
                 <li> <strong> English |</strong></li>
                 <li style="background-color:  #272424;">A+</li>
                 <li style="background-color:  #272424;">A</li>
                 <li style="background-color: #272424;">A-</li>
             </ul>
         </div>
     </header>
     <!-- Ye wala Co-Win jo likhe hue ka photo h uska  -->
     <div class="mid">
         <div>
             <a href="Covid Home.php " target="_blank">
                 <img src="logo.jpg" alt="error">
             </a>
         </div>
     </div>

     <!-- Main Material-->
     <div class="top">
       <div class="data">
           <div class="info">
             <div class="upper">
               <div class="act" style="color:black;font-size:50px;margin:10px;">Registration Form</div><br>
                 <label for="act"style="color:black;font-size:20px;">State/District: </label>
                 <label for="no"  style="color:darkblue;font-size:20px;margin:10px;">
                   <?php echo $row["STATE"];?> / <?php echo $row["DISTRICT"];?>
                 </label>
                  &emsp;&emsp;
                 <label for="act"style="color:black;font-size:20px;">Location:</label>
                 <label for="no"  style="color:darkblue;font-size:20px;margin:10px;">
                   <?php echo $row["LOCATION"];?>
                 </label>
  <br>
                 <label for="act"style="color:black;font-size:20px;">Slots:</label>
                 <label for="no"  style="color:darkblue;font-size:20px;margin:10px;">
                   <?php echo $row["SLOTS"];?>
                 </label>
                 <br><br><br><br><br><br>
             </div>
<div class="lower" >
  <hr>
  <form name="abs" action="success.php" onsubmit="return validateForm()" method="post" required>
    <div class="form">
      <div class="lest">
        <div class="1">
            <label for="name" >Enter Name:</label>
            <input type="text" name="fname" value="">
          </div>
          <div class="2">
            <label for="mobile" >Enter Mobile Number:</label>
            <input type="tel" name="mobi" value="" placeholder="1234567890" pattern="[0-9]{10}">
          </div>
          <div class="3">
            <label for="yr" >Enter Year Of Birth:</label>
            <input type="text" name="yr" value="" placeholder="1234" pattern="[0-9]{4}">
          </div>
          <div>  <button type="submit" name="sub">SUBMIT</button></div>
      </div>
      <div class="ri">
        <div class="4">
          <label for="id" >Enter Identification Method:</label>
          <select class="photoid" name="idname" required>
            <option value="Select Id">Select Id</option>
            <option value="Aadhar" >Aadhar</option>
            <option value="Pan Card">Pan Card</option>
            <option value="Driver License">Driver License</option>
            <option value="Passport">Passport</option>
          </select>
        </div>
      <div class="5">
        <label for="noid" >Enter Id number:</label>
        <input type="text" name="noid" value="" placeholder="1234-5678-9012" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
      </div>
      <div class="5">
        <label for="vac name" >Vaccine:</label>
        <select class="vacc" name="vaccine" required>
          <option value="Select Vaccine" >Select Vaccine</option>
          <option value="Covishield" >Covishield</option>
          <option value="Covaxin">Covaxin</option>
          <option value="Pfizer">Pfizer</option>
          <option value="Moderna">Moderna</option>
        </select>
      </div>
      <div><button type="reset" name="sub">RESET</button></div>

      </div>
    </div>

 </form>
</div>


           </div>
       </div>
     </div>

     <footer>
         <div class="antim">
             <!-- This is pahla -->
             <div class="pahla">For Grievances & Feedback:
                <a href = "mailto: support@cowin.gov.in">support@cowin.gov.in</a> </div>
             <!-- This is last corner -->
             <div class="kona">
                 <ul>
                     <li> <a href="https://www.cowin.gov.in/privacy-policy">Privacy Policy |</a> </li>
                     <li> <a href="https://www.cowin.gov.in/terms-condition">Terms of Service</a> </li>
                     <li> Copyright © 2021 COWIN. All Rights Reserved</li>

                 </ul>
             </div>
         </div>
     </footer>
 </body>
 </html>
