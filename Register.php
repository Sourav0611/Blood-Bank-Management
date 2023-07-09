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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href='Register.css'>
</head>
<title>Start Saving Lives </title>
<body>
<header>
    <div class="header-logo" id="logo"><a href="index.php"><img src="Images/LIFE.png" style="height:150px;width:150px;"></a></div>
    
      </header>

<div class="inner">
    <div class="photo" style="height:700px;">
        <img src="./Images/regphoto.png">
    </div>
    <div class="user-form" style="height:700px;">
        <h1>Start Saving Lives</h1>
        <form name="f1" method="POST">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Name" name="uname">
            <br>
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="E-mail" name="mail">
            <br>
            <i class="fas fa-phone-alt"></i>
            <input type="text" placeholder="Mobile Number" name="mnum">
            <br>
            <i class="fas fa-hand-holding-heart"></i>
            <input type="text" placeholder="Blood-Group" name="btype">
            <br>
            <i class="fas fa-home"></i>
            <input type="text" placeholder="Address" name="address">
            <br>
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password_data" name="pswd">
            <div class="safety" style="font-family: sans-serif; font-size: 20px;">
            </div>
            <div class="action-btn">
                <input type="submit" name="submit" value="Create Account" class="btn primary">
                <a href="Login.php" target="_self"><input type="button" class="btn" value="Login" style="width:100%"></a>
                <!-- <input type="button" value="Login" class="btn" onclick="window.open(Login.php,_self)"> -->
            </div>
        </form>
    </div>
</div>
<script src="sweetalert.min.js"></script>
<script src="./Register.js"></script>
<?php 
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($link, $_POST['uname']);
    $email = mysqli_real_escape_string($link, $_POST['mail']);
    $mnum = mysqli_real_escape_string($link, $_POST['mnum']);
    $bgrp = mysqli_real_escape_string($link, $_POST['btype']);
    $add = mysqli_real_escape_string($link, $_POST['address']);
    $pswd = mysqli_real_escape_string($link, $_POST['pswd']);
    date_default_timezone_set('Asia/Kolkata');
    $date = date("d/m/y");
    $time = date("h:i:s A");
    $sql = "INSERT INTO Account_Detail(Name,Email,Mobile_num,Blood_Group,Address,Password,Date,Time)
       VALUES('$name','$email','$mnum','$bgrp','$add','$pswd','$date','$time')"; 	
    if($name=="" || ($email==""||$mnum=="")||$bgrp==""||$add==""||$pswd==""){
        ?>
        <script>
         swal({
         title: "Something Went Wrong !",
         text: "Please,Enter details !",
         icon: "error",
         });
         </script>
         <?php
      } else if(mysqli_query($link, $sql)){
        ?>
        <script>
         swal({
         title: "Thank You !",
         text: "Now you can Login!",
         icon: "success",
         });
         </script>
         <?php
    echo "Now login";
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}

mysqli_close($link);
?>
<script>
        function fun(){
            swal({
             title: "Login First",
             //text: "Logged in !",
             icon: "error",
             button:"OK !",
             });
         }
         </script>

</body>
</html>