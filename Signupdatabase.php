<?

  if(isset($_post['submit'])){

  	include_once 'Database1.php';
  	$first=mysqli_real_escape_string($conn,$_post['signfirst']);
  	$last=mysqli_real_escape_string($conn,$_post['signlast']);
  	$emid=mysqli_real_escape_string($conn,$_post['signid']);
  	
  	$email=mysqli_real_escape_string($conn,$_post['signemail']);
  	$username=mysqli_real_escape_string($conn,$_post['signname']);
  	$pass=mysqli_real_escape_string($conn,$_post['signpassword']);

  	if(empty($first)||empty($last)||empty($emid)||empty($email)||empty($username)||empty($pass)){
  		header("Location: ../signup.php?signup=empty");
  		exit();
  	}
  	else{
  		//check if input
  		if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){
  			header("Location: ../signup.php?signup=invalid");
  			exit();
  		}
  		else{
  			//checkemailvalid//Email Part
  			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  				header("Location: ../signup.php?signup=email");
  			exit();
  			}
  			else{
  					$sql="select * from formdata where Employeeid='$emid'";
  					$result=mysqli_query($conn,$sql);
  					$resultcheck=mysqli_num_rows($result);

  					 if($resultcheck > 0){
  					 	header("Location: ../signup.php?signup=usertaken");
  			              exit();
  					 }

  					  else{
  					  	//password
  					  	$hashed=password_hash($pass,PASSWORD_DEFAULT);
  					  	//insert user in database
  					  	$sql="insert into formdata (Firstname,Lastname,Employeeid,Emailid,Username,Password) values ('$first','$last','$emid','$email','$username','$hashed');";

  					  	$result=mysqli_query($conn,$sql);
  					  	header("Location: ../Display.html?signup Success");
  					  	exit();
  					  }
  			}
  		}
  	}

  }
  else{
  	header("Location: ../signup.php");
  }

  exit();
?>