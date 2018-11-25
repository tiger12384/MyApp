<?php
header('Access-Control-Allow-Origin *');
header('Access-Control-Allow-Headers: Origin,Content-Type');

include('config.ini.php');
$sql="select * from borrowform";
$result = mysqli_query($con,$sql);
mysqli_set_charset($con,"uft8");
$arr =array();
while($row = mysqli_fetch_assoc($result))
{
    $arr[]=$row;
}
mysqli_close($con);
echo json_encode($arr);
header("content-type:text/javascript;charset=utf-8");  
?>