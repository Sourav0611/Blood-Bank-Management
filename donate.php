<?php
error_reporting(0);
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='donate.css'>
    <link rel="icon" href='./Images/LIFE.png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<title>Connect with us & save lives around your location </title>

<body>
<header>
    <div class="header-logo" id="logo"><a href="index2.php"><img src="Images/LIFE.png" style="height:150px;width:150px;"></a></div>
    <div id="nav">
            <div class="header-list" id="headerl">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                   <li><a href="donate.php" target="_self">Services</a></li>

                    <li><a href="help.php" target="_self">Get Help</a></li>
                    <li><a href="donate.php" target="_self">Donate</a></li>
                    <li><a href="index2.php#vol-sect" target="_self">Volunteer</a></li>
                    <li><a href="index2.php#about-us" target="_self">About Us</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
      </header>
     <main>
        <div class="box">
            <h2>Connect with us & save lives
                around your location</h2>
            <ul class="des">
                <li class="steps"><a href="Register.php" target="_self" style="text-decoration:none;"><span>1</span> Register🧍🏻</a></li>
                <li class="steps"><span>2</span> Post a Blood request🩸 </li>
                <li class="steps"><span>3</span> Respond ✅ </li>
                <li class="steps"><span>4</span> Get notified 📱</li>
                <li class="steps"><span>5</span> Forever Free 💲❌ </li>
                <li class="steps"><span>6</span> Save a Life 🩸🧬</li>
            </ul>

        </div>


    </main>



    <footer>
        
        <div class="footer-content">
            <h3>JOIN OUR CAUSE</h3>
            <p>Donating blood or platelets can be intimidating and even scary. Time to put those hesitations and fears aside. Learn from Blood Buddy and platelet donors how simple and easy it is to roll up a sleeve and help save lives.</p>
            <div class="socials">
                <ul class="sci">
                    <li><a href="https://www.facebook.com/givebloodnhs/" target="_blank"><i
                                class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/blood_donation_indore/" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="http://nbtc.naco.gov.in/" target="_blank"><i class="fas fa-globe"></i></a></li>
                </ul>
            </div>
        </div>


    </footer>
</body>
<html>