<?php

$dbservername='localhost';
$dblocation='root';
$dbpass="";
$dbdbname='contact';

$conn=mysql_connect($dbservername,$dblocation,$dbpass,$dbdbname);

if($conn->connect_error){
	die("connection failed:".$conn->connect_error);

}
echo "hello";

 $name=$_POST['variable'];

 $sql="insert into addcontact(Name) values ('$name')";

 
if(mysql_query($conn,$sql)){
  echo "sucess";
}
$conn->close();



?>