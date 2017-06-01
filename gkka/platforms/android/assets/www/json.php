<?php
include "dbconfig2.php";
$data=array();
$q=mysqli_query($con,"select * from warta");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>
