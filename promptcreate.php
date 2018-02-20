<?php

  $servername="localhost";
$username="root";
$password="";
$dbname="contact";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}

$gname=$_POST['name'];
$gid=$_POST['id'];
$gmail=$_POST['email'];
$gphone=$_POST['ph'];
$sql= "insert into promptcreate(gname,gid,gmail,gphone) values('$gname','$gid','$gmail','$gphone')";
 echo <"table border='1'><tr><th>Groupname</th>";
$result=$conn->query($sql);

if($result->num_rows>0){
	echo "<tr><td>".$row['gname']."</td><td>".$row["gphone"]."</td></tr>";

}
echo $result;





$conn->close();

?>