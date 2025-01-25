<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Kohinoor-Login</title>
  <link rel="stylesheet" href="login.css">

</head>
<body>
<div class="container">  
  <form id="contact" action="login.php" method="post">
    <h3>Login</h3>
    <fieldset>
      <input placeholder="username" type="text" name="username"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="password" type="password" name="password"  required>
    </fieldset>
    
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
  
</body>
</html>
<?php
if(isset($_POST['submit'])){

$username=$_POST["username"];
$password=$_POST["password"];
$conn=mysqli_connect("localhost","root","","admin login");
$select="select username, password from login where username='$username' and password='$password'";
$op=mysqli_query($conn,$select);
$r=mysqli_fetch_array($op);
if($username=$r['username'] && $password=$r['password'])
{
  echo"<script>window.location='Admin/index.html';</script>";
}
else
{
  echo"<script>alert('usernamename or password is incorrect');</script>";
}
}
?>