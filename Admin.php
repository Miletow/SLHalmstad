<?php
include 'header.php';
date_default_timezone_set('Europe/Copenhagen');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
 if(!isset($_SESSION['id'])){
?>

<div style="height: 800px;" class="container">
<h2>Login Form</h2>

  <form method="POST" action="includes/login.inc.php">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uid" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pwd" required>
        
    <button class="GreenButton" type="submit" name="loginSubmit">Login</button>
    
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  </form>
  
</div>

<?php
 }else{
?>
<br><br>

<br><br>  

	     
    <div class="container">
        <div class="row">
            
            
            
            
            
<?php

adminGetTeams($conn);

?>
</div>
<?php



echo "<br><br><br> <form method='POST' action='".addLeague($conn)."'>
<input type='text' name='league' placeholder='League name'>
<button class='GreenButton' type='submit' name='LeagueSubmit'>Add League</button>
</form>";
echo "<form method='POST' action='includes/logout.inc.php'>
<button class='GreenButton' type='submit' name='logoutSubmit'>Logout</button>
</form>";


}

?>
 </div>
</div>
</div>
<?php


include 'footer.php';
    ?>
</body>
</html>