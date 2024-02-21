<?php $host="localhost";
 $user="root";
  $password=""; 
  $dbname="donate";
   $conn=mysqli_connect($host,$user,$password,$dbname); 
if(mysqli_connect_errno())
 { die("failedto connect db".mysqli_connect_error()); 
 
 } ?>