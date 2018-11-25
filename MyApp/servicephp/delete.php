<?php 
header('Access-Control-Allow-Origin *');
header('Access-Control-Allow-Headers: Origin,Content-Type');

$rest_json=file_get_contents("php://input");
$_POST = json_decode($rest_json,true);


$studentid=$_POST["studentid"];

  $host="localhost";
  $username ="root";
  $password="";
  $dbname="miniproject";
  
$conn =mysqli_connect($host,$username,$password,$dbname);

if($conn->connect_error)
{
  die("con".$conn->connect_error);
}


  $sql = 'DELETE FROM borrowform WHERE studentid="' .$studentid. '" ';
if($conn->query($sql)===TRUE)
{
    $outp = "Deleted" . $studentid ;
    echo json_encode($outp);

}else{
    echo json_encode("Error" .$sql. "<br>".$conn->error);
}
  
?>