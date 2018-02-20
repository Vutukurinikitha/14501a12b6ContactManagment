<?php

session_start();

if(isset($_POST['submit'])){
  include 'Signupdatabase.php';

  $uid=mysqli_real_escape_string($conn,$_POST['loginname']);
  $pwd=mysqli_real_escape_string($conn,$_POST['loginpassword']);
}

	//error handlers
  if(empty($uid)||empty($pwd)){
  	header("Location: ../index.php?login=empty")
   	           exit();

  }

    else{
    	$sql="select * from formdata where Username='$uid' or Emailid='$email";
    	$result=mysqli_query($conn,$sql);
    	$resultCheck=mysqli_num_rows($result);
    	if($resultCheck < 1){
    			header("Location: ../index.php?login=error")
   	           exit();
    	}
    	else{
    		if($row=mysqli_fetch_assoc($result)){
    			//De-hashing
    			$hasedpwdcheck=password_verify($pwd,$row['Password']);
    			if($hasedpwdcheck== false){
    				header("Location: ../index.php?login=error")
   	           exit();
    			}
    			elseif($hasedpwdcheck== true){
    				//log in the user
    				$_SESSION['username']=$row['Username'];
    				$_SESSION['first']=$row['Firstname'];
    				$_SESSION['last']=$row['Lastname'];
    				$_SESSION['emid']=$row['Employeeid'];
    				
    				$_SESSION['email']=$row['Emailid'];
    				$_SESSION['pass']=$row['Password'];


    				header("Location: ../Display.html?success")
   	           exit();
    			}

    		}
    	}
    }
   else{
   	header("Location: ../index.php?login=error")
   	exit();
   }


?>