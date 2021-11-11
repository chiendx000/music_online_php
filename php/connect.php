<?php
 
$servername = "localhost";
 
$username = "root";
 
$password = "";
 
$dbname = "nhac";
 
$con = mysqli_connect($servername,$username,$password,$dbname);
mysqli_query($con,'SET NAMES UTF8');
 
if(!$con){
 
   die('Ket noi that bai:'.mysqli_connect_error());
 
}else{
 
echo"kết nối thành công";
 
}
 
?>