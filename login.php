
<?php
session_start();
$con=mysqli_connect("localhost","root","","info");
if(!$con)
{
  die('connection error:'.mysqli_connect_error);
}
$mobile=$_POST['mobile'];
$query="SELECT * FROM login WHERE mobile='$mobile'";
$result = $con->query($query);
$row = $result->fetch_assoc();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Co-WIN Application</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
          width:1200px;
          height:1215px;
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
          width:1200px;
          height:1215px;

             }
             .mi{
               margin-top: 10px;
               width:1100px;
               height:220px;
               border-radius: 25px;
               border:2px solid black;
               display: flex;
               flex-direction: column;
             }
             .dob{
               display: flex;
               justify-content: space-around;
               margin-top: 10px;
               color:grey;
             }
             .pr1,.pr2,.pr3{
               margin:10px;
             }

             .dos1,.dos2{
               display: flex;
               justify-content: space-between;
             }

 </style>
</head>

<body>
    <header>
        <!-- This is for left -->
        <div class="left">
            <div><img src="amblem.png" alt="error"></div>
            <div><a href="https://www.india.gov.in/" target="_blank"> Ministry of Health and Family Welfare </a></div>
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
            <div class="act" style="color:darkblue;font-size:25px;margin:20px;">Account Details</div>
              <label for="act"style="color:black;font-size:20px;">Registered Mobile Number: </label>
              <label for="no"  style="color:darkblue;font-size:20px;margin:20px;"><?php echo $_POST["mobile"]; ?> </label>
              <br><br><br><br><br><br>
              <form class="LOGIN">
                <div class="mi">
                 <div class="pr1" >
                   <label name="name" for="fname" style="color:darkblue;font-size:25px;"><?php echo $row["name"];?> </label>&#x7c;
                   <label  for="ref" style="color:grey;">Ref Id: </label>
                   <label name="refid" for="refid" style="color:grey;"><?php echo $row["refid"];?></label>&nbsp;&#x7c;
                   <label  for="sec" style="color:grey;">Secret Code: </label>
                   <label name="code" for="sec_code" style="color:grey;"><?php echo $row["code"];?> </label>
                  </div>
                  <div class="dob">
                    <div class="yr">
                      <label for="yob">Year Of Birth:</label>
                      <label name="yob" for="year"><?php echo $row["yob"];?></label>
                    </div>
                    <div class="id_div">
                      <label for="id">Photo Id:</label>
                      <label name="photoid" for="ver"><?php echo $row["photoid"];?></label>
                    </div>
                    <div class="no_id">
                      <label for="id_d">Id Number:</label>
                      <label name="idno" for="id_n"><?php echo $row["idno"];?></label>
                    </div>
                  </div>
                 <div class="pr2"> <hr style=" border-top: 1px dashed grey;">
                   <div class="dos1">
                     <div class="vac_name1">
                       <label for="dos_no1">Dose 1 | </label>
                       <label for="vac1"><?php echo $row["VACCINE"];?></label>
                     </div>
                    <div class="comp">
                      <label for="stat1" style="color:green;">COMPLETED:</label>
                      <label for=""><?php echo $row["dose1"];?></label>

                    </div>
                   </div></div>
                 <div class="pr3"><hr style=" border-top: 1px dashed grey;">
                   <div class="dos2">
                     <div class="vac_name2">
                       <label for="dos_no2">Dose 2 | </label>
                       <label for="vac2"><?php echo $row["VACCINE"];?></label>
                     </div>
                    <div class="comp">
                      <label for="stat2" style="color:green;">COMPLETED:</label>
                      <label for=""><?php echo $row["dose2"];?></label>
                    </div>
                   </div></div>
                </div>
              </form>

          </div>
          <div class="text">
            <img src="info.png" alt="Information" style="width:1200px;border-radius:25px;">
          </div>
      </div>
    </div>

    <footer>
        <div class="antim">
            <!-- This is pahla -->
            <div class="pahla">For Grievances & Feedback: <a href = "mailto: support@cowin.gov.in">support@cowin.gov.in</a> </div>
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
