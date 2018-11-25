
<?php 
header('Access-Control-Allow-Origin *');
header('Access-Control-Allow-Headers: Origin,Content-Type');
$rest_json=file_get_contents("php://input");
$_POST = json_decode($rest_json,true);


  $host="localhost";
  $username ="root";
  $password="";
  $dbname="miniproject";
  
$conn =mysqli_connect($host,$username,$password,$dbname);

$studentid = (isset($_POST["studentid"])) ? $_POST["studentid"] : '';
$namestudent= (isset($_POST["namestudent"])) ? $_POST["namestudent"] : '';
$telstudent = (isset($_POST["telstudent"])) ? $_POST["telstudent"] : '';
$nameobject = (isset($_POST["nameobject"])) ? $_POST["nameobject"] : '';
$dateborrow = (isset($_POST["dateborrow"])) ? $_POST["dateborrow"] : '';
$datereturn = (isset($_POST["datereturn"])) ? $_POST["datereturn"] : '';
$detail = (isset($_POST["detail"])) ? $_POST["detail"] : '';
$status='WAIT ADMIN';

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