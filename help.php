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
    <link rel="icon" href='./Images/LIFE.png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="help.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Connect with us </title>
</head>
<body>
    <header>
    <div class="header-logo" id="logo"><a href="index2.php"><img src="Images/LIFE.png" style="height:150px;width:150px;"></a></div>
    <div id="nav">
            <div class="header-list" id="headerl">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                <li><a href="donate.php" target="_self">Services</a></li>
                    <li><a href="help.php" target="_self">Get Help</a></li>
                    <li><a href="index2.php#vol-sect" target="_self">Donate</a></li>
                    <li><a href="index2.php#vol-sect" target="_self">Volunteer</a></li>
                    <li><a href="index2.php#about-us" target="_self">About Us</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
      </header>
   <main>
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2>Connect with us </h2>
                    <form name="f1" method="POST">
                    <input type="text" class="field" name="uname" placeholder="Your Name">
                    <input type="text" class="field" name="mail" placeholder="Your Email">
                    <input type="text" class="field" name="mnum" placeholder="Phone">
                    <textarea placeholder="Message" name="msg" class="field"></textarea>
                    <input type="submit" class="btn" name="submit" value="Send">
</form>
                    </div>
            </div>
        </div>
    </main>
    <script src="sweetalert.min.js"></script>
<script src="./Register.js"></script>
<?php 
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($link, $_POST['uname']);
    $email = mysqli_real_escape_string($link, $_POST['mail']);
    $mnum = mysqli_real_escape_string($link, $_POST['mnum']);
    $msg = mysqli_real_escape_string($link, $_POST['msg']);
    date_default_timezone_set('Asia/Kolkata');
    $date = date("d/m/y");
    $time = date("h:i:s A");
    $sql = "INSERT INTO People_Message(Name,Email,Mobile_num,Message,Date,Time)
       VALUES('$name','$email','$mnum','$msg','$date','$time')"; 	
    if($name=="" || ($email==""||$mnum=="")||$msg==""){
        ?>
        <script>
         swal({
         title: "Something Went Wrong !",
         text: "Please,Enter details !",
         icon: "error",
         });
         </script>
         <?php
      }   
    else if(mysqli_query($link, $sql)){
        ?>
        <script>
         swal({
         title: "Message Sent!",
         text: "We will contact you soon... ",
         icon: "success",
         });
         </script>
         <?php
        } else{
        ?>
        <script>
         swal({
         title: "Something Went Wrong !",
         text: "Please,Try again !",
         icon: "error",
         });
         </script>
         <?php
}
}

mysqli_close($link);
?>
<footer>
       <div class="footer-content">
            <h3>JOIN OUR CAUSE</h3>
            <p>Donating blood or platelets can be intimidating and even scary. Time to put those hesitations and fears aside. Learn from Blood Buddy and platelet donors how simple and easy it is to roll up a sleeve and help save lives.</p>
            <div class="socials">
                <ul class="sci">
                    <li><a href="https://www.facebook.com/givebloodnhs/" target="_blank"><i
                                class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/indiablooddonation/?hl=en" target="_blank"><i
                                class="fab fa-instagram"></i></a></li>
                    <li><a href="http://nbtc.naco.gov.in/" target="_blank"><i class="fas fa-globe"></i></a></li>
                </ul>
            </div>
        </div>


    </footer>
    

</body>

</html>