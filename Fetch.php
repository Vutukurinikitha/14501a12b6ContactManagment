<?php

$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}

$sql="select * from nik";
$result=$conn->query($sql);

if($result->num_rows >0){
	while($row = $result->fetch_assoc()){
		echo "Name:".$row["Name"]."-id:".$row["Eid"]."<br>";
	}
}






?>