<?php
	$data1=array();
  $servername="localhost";
$username="root";
$password="";
$dbname="contact";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}
$sql="select gname,gmail from promptcreate";

$result=$conn->query($sql);
	 if ($result->num_rows > 0) 
		 {
		    
		    while($row = $result->fetch_assoc()) {
		        array_push($data1,array('gname'=>$row['gname'],'gmail'=>$row['gmail']));
		    }
		 } else 
		 {
		    echo "0 results";
		 }
		 echo json_encode($data1);

?>