
<?php 
header('Access-Control-Allow-Origin *');
header('Access-Control-Allow-Headers: Origin,Content-Type');




$studentid='s';
$namestudent=$_POST["namestudent"];
$telstudent=$_POST["telstudent"];
$nameobject=$_POST["nameobject"];
$dateborrow=$_POST["dateborrow"];
$datereturn=$_POST["datereturn"];
$detail=$_POST["detail"];
$status='WAIT ADMIN';

  $host="localhost";
  $username ="root";
  $password="";
  $dbname="miniproject";
  
$conn =mysqli_connect($host,$username,$password,$dbname);

if($conn->connect_error)
{
  die("con".$conn->connect_error);
}



  $sql = 'INSERT INTO borrowform  VALUES ("","'.$studentid.'","'.$namestudent.'","'.$telstudent.'"
  ,"'.$nameobject.'","'.$dateborrow.'","'.$datereturn.'","'.$detail.'","'.$status.'")';
if($conn->query($sql)===TRUE)
{
    $outp = "inserted" . $studentid . " and ". $namestudent. " and ". $telstudent. " and ". $nameobject
    . " and ". $dateborrow. " and ". $datereturn. " and ". $detail. " and ".$status ;
    echo json_encode($outp);

}else{
    echo json_encode("Error" .$sql. "<br>".$conn->error);
}
  
?>