<?php
  include_once 'header.php';
 ?>
 
<body>
 <section>
  		<h1 style="text-align: center;padding-top: 10px">InmarContacts</h1>
  		<form class="signform" action="Signupdatabase.php" method="post">
  		<input type="text" name="signfirst" placeholder="firstname"><br>
  		<input type="text" name="signlast" placeholder="lastname"><br>
  		<input type="text" name="signid" placeholder="Employeeid"><br>
  		<input type="email" name="signemail" placeholder="email"><br>
  		<input type="text" name="signname" placeholder="Username"><br>
  		<input type="text" name="signpassword" placeholder="Password"><br>
  		<button type="submit" name="submit">Sign Up</button>
  	</form>
  </section>
  <?php

   include_once 'footer.php';
  ?>
