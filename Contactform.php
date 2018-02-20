<?php
$connection=mysql_connect("localhost","root","");
$db = mysql_select_db("contact", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL

$name=$_POST['addname'];
$empid=$_POST['addemp'];
$email=$_POST['addemail'];
$phone=$_POST['addphone'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into addcontact(Name,Employeeid,Email,Phone) values ('$name','$empid','$email','$phone')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>


