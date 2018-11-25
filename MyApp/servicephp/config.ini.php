<?php
header('Access-control-allow-origin *');
 $host ="localhost";
 $username="root";
 $password= "";
 $DBname="miniproject";

 $con = mysqli_connect($host,$username,$password,$DBname);
 mysqli_set_charset($con,"uft8");

 if($con)
 {
     echo "";
 }
 else{
     echo "not work";
 }
 


 ?>