
<?php 

  $host="localhost";
  $username ="root";
  $password="";
  $dbname="miniproject";
  
$conn =mysqli_connect($host,$username,$password,$dbname);

if($conn->connect_error)
{
  die("con".$conn->connect_error);
}
$sql="SELECT * FROM member";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  $outp=array();
  $outp=$result->fetch_all(MYSQLI_ASSOC);
  echo json_encode($outp);

}else
{
  echo json_encode("0 result");
}
  
?>