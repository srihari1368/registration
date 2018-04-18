<?php
include 'connect.php';
$username = $_POST['uname'];
$password = $_POST['psw'];
?> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
body {
background-image: url("qw.jpeg");
}
</style>
<body>
<form method="post" action="vote.html">
<center>
<h2> Login </h2>

      
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required></br></br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required></br></br>
        
      <button type="submit">Login</button></br></br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label></br></br>
   
      <span class="psw">Forgot <a href="#">password?</a></span>
</center>
</body>
</html>
