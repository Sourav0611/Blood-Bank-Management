<?php 
$link = mysqli_connect("localhost", "root", "root", "bbm");
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error( ));
}
$sql = "CREATE TABLE Account_Detail(Id INT(4) PRIMARY KEY AUTO_INCREMENT,
 Name varchar(30) NOT NULL,
 Email VARCHAR(50), 
 Mobile_num VARCHAR(30) NOT NULL,
 Blood_Group varchar(10) not null,
 Address varchar(30) not null,
 Password varchar(30) not null,
 Date varchar(20),Time varchar(20))";
if (mysqli_query($link, $sql))
echo "table created";
else
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
mysqli_close($link);
?>
<?php 
$link = mysqli_connect("localhost", "root", "root", "bbm");
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error( ));
}
$sql = "CREATE TABLE People_Message(Id INT(4) PRIMARY KEY AUTO_INCREMENT,
 Name varchar(30) NOT NULL,
 Email VARCHAR(50), 
 Mobile_num VARCHAR(30) NOT NULL,
 Message varchar(300) not null,
 Date varchar(20),Time varchar(20))";
if (mysqli_query($link, $sql))
echo "table created";
else
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
mysqli_close($link);
?>


