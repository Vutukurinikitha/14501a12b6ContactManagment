
<?php

session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Front page</title>
  <link rel="stylesheet" type="text/css" href="Frontstyle.css ">
</head>
<body>
  <header>
  	<nav>
  		<div class="topnav">
  			<ul>
  				<li><a href=""> Inmar Contacts </a></li>
  			</ul>
  		</div>
  		<div class="toplogin">
  				<?php

  					if(isset($_SESSION['username'])){


  						echo '<form action="logout.php" method="post">
  					<button type="submit" name="submit">Submit</button>

  				</form>';

  					}


  					else{

  						echo '<form action="logindatabase.php" method="post">
  				<ul><input type="text" name="loginname" placeholder="Username"></ul>   
  				<input type="password" name="loginpassword" placeholder="password">
  				<button type="submit" name="submit">Login</button>
  			</form>

  			<a href="signup.php">Sign up</a>';


  					}


  				?>
  				

  		
  			<section>
  		<h1>Contacts</h1>
  		<?
  			if(isset($_SESSION['username'])){

  				echo "you are logged in";
  				header("Location: ../Display.html");

  			}


  		?>
  		
  </section>
  		</div> 
  	</nav>
  </header>
  
</body>
</html>