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
            position: fixed;
            left: 135px;
            margin: -36px -9px;
            height: 65px;
        }

        .mid div {
            /* border: 2px solid red; */
            padding: 30px;
            margin: 1px -8px;
            border-bottom: 2px solid #f1f1f1;
            position: sticky;
        }

        .container {
            border: 2px solid #f1f1f1;
            width: 33%;
            margin: 0px 0px;
            padding: 65px 30px;
            background-color: white;
            position: absolute;
            left: 521px;
            top: 200px;
        }

        .container h2 {
            text-align: center;
            color: #001f60;
        }

        input {
            margin: 27px 27px;
            padding: 0px 111px;
            border-top: none;
            border-left: none;
            border-right: none;
        }

        input:active {
            border: none;
        }

        #otp {
            text-align: center;
        }

        .btn {
            background-color: #001f60;
            color: white;
            margin: 1px 22px;
            width: 90%;
            padding: 10px 9px;
            border-radius: 7px;
        }

        .btn:hover {
            cursor: pointer;
        }

        #dim {
            position: absolute;
            top: 150px;
            left: 695px;
            background: white;
            width: 8%;
            border-radius: 88px;
        }

        h5 {
            text-align: center;

        }
        #dim img {
            width: 123px;
            height: 109px;
        }

        .arogyasetu img {
            width: 40px;
            height: 28px;
        }
        .arogyasetu div a {
            text-decoration: none;
        }
        .arogyasetu div  {
            width: 138px;
            height: 28px;
        }
         #arogya{
            margin: 0px 52px 0px 37px;
         }
        .Umang div img {
            width: 38px;
            height: 28px;
        }
        .Umang div  {
            width: 138px;
            height: 28px;
        }
        footer  {
            background-color:#001f60 ;
            color: white;
            display: inline-block;
            position: absolute;
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
        #mobile{
          font-size: 16px;
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

    <!-- Ye hai main material -->
    <div id="abh">
        <div class="container">
            <h2>SignIn for Vaccination</h2>
            <div id="otp">Enter your mobile number to Sign In .</div>
            <div>
                <form action="login.php" method="post">
                    <input type="integer" name="mobile" id="mobile"
                        placeholder="Enter your Number"  pattern="[0-9]{10}"style="width:400px; height:50px; text-align:center;" >
                      <button class="btn" >CHECK </button>
                </form>
                <h5> ------------ OR BOOK APPOINTMENT USING ------------</h5>
                <button id="arogya">
                    <div class="arogyasetu">
                        <div><a href="https://www.aarogyasetu.gov.in/" target="_blank">
                                <img src="aarogya_logo.png" style="height:29px;width:100px;" alt="error">
                            </a>
                        </div>
                    </div>
                </button>
                <button id="umang">
                    <div class="Umang">
                        <div><a href="https://web.umang.gov.in/web_new/login?redirect_to=department%3Furl%3Dcowin%2F%26dept_id%3D355%26dept_name%3DCo-WIN"
                                target="_blank">
                                <img src="umang-logo-v1.png"
                                    alt="error">
                            </a>
                        </div>
                    </div>
                </button>
            </div>

        </div>
    </div>
    <div id="dim">
        <img src="login-screen.svg" alt="error">
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
