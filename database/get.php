<?php
include("connection.php");
$con = mysqli_connect("localhost", "root", "Demaga_360", "logst");
$sql = "SELECT * FROM users";
$result = mysqli_query($con,$sql);
 
 
while($row = mysqli_fetch_assoc($result)){
  $data[] = $row;
}
 
// print_r($data);
$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];
 
 
echo json_encode($results);
?>