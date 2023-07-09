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
    <nav>
    <div class="header-logo"><a href="index.php"><img src="./Images/LIFE.png" style="height:140px;width:140px"></a></div>
    <div class="header-list">
        <ul>
            <li><a href="#donate.php" target='_self'>Services</a></li>
            <li><a href="help.php" target="_self">Get Help</li></a>
            <li><a href="index2.php#vol-sect" target="_self">Donate</li></a>
            <li><a href="index2.php#vol-sect" target="_self">Volunteer</li></a>
            <li><a href="index2.php#about-us" target="_self">About Us</a></li>
        </ul>
    </div>
    </nav>
</header>

<div class="inner">
    <div class="photo" style="height:550px;">
        <img src="./Images/regphoto.png">
    </div>
    <div class="user-form" style="height:550px;">
        <h1>Start Saving Lives</h1>
        <form name="f1" method="POST">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Name" name="uname">
            <br>
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="E-mail" name="mail">
            <br>
            <i class="fas fa-envelope-square"></i>
            <input type="text" placeholder="Mobile number" name="mnum">
            <br>
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password_data" name="pswd">
            <div class="action-btn">
                <input type="submit" name="submit" class="btn primary" value="Login">
                <a href="Register.php" target="_self"><input type="button" class="btn" value="Register" style="width:100%"></a><br>
                </div>

        </form>
    </div>
</div>
<script src="sweetalert.min.js"></script>

<script src="./Register.js"></script>
<?php 
if(isset($_POST['submit'])){
    $_SESSION['name'] = $_POST['uname'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['mnum'] = $_POST['mnum'];
    $_SESSION['pswd'] = $_POST['pswd'];
//     if(($_SESSION['name'])&&($_SESSION['pswd'])&&(($_SESSION['mail'])||($_SESSION['mnum']))){
//         $_SESSION['status']="Sorry :-(";
//         $_SESSION['status_code']="error";
//         $check=false;
//    }
    $check=false;
    $sql = "SELECT * FROM Account_Detail";
  if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        if(($row['Name']==$_SESSION['name'])&&($row['Password']==$_SESSION['pswd'])&&(($row['Email']==$_SESSION['mail'])||($row['Mobile_num']==$_SESSION['mnum']))){
            $_SESSION['status']="Welcome :-)";
            $_SESSION['status_code']="success";
            header('location:index2.php');
            $check=true;
       } 
      }
      if(!$check){
            $_SESSION['status']="Sorry :-(";
            $_SESSION['status_code']="error";
      }
        mysqli_free_result($result);
        } else{
            $_SESSION['status']="Sorry :-(";
            $_SESSION['status_code']="error";
          }
        }else{
            $_SESSION['status']="Sorry :-(";
            $_SESSION['status_code']="error";
        }
        if(isset($_SESSION['status'])&&(isset($_SESSION['status_code']))){
           ?>
            <script>
             swal({
             title: "<?php echo $_SESSION['status']; ?>",
             //text: "Logged in !",
             icon: "<?php echo $_SESSION['status_code']; ?>",
             button:"OK. Done!",
             });
             </script>
             <?php
             unset($_SESSION['status']);
        }
        //header('location:index2.php');
        mysqli_close($link);
    }
        ?>
    


</body>
</html>