<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
<section class="feedback">
  <div class="container">
    <h1><u>Feedback</u></h1>
    <form action="" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="5" required></textarea>
      </div>
      <button type="submit" name="submit">Send</button>
    </form>
  </div>
</section>
  </body>
  </html>
<!--
create table contacts(id int unsigned auto_increment primary key,
name varchar(45),
email varchar(34),
message varchar(78))
-->
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
$conn=mysqli_connect('localhost','root','','feedbackinfo');
/*if($conn)
{
    echo"<script>alert('database connected');</script>";
}*/

$query=mysqli_query($conn,"insert into feedbacks(name,email,message) values('$name','$email','$message')");
if($query){
  echo"<script>alert('Feedback Submitted successfully..!');</script>";
}
else
{
echo"<script>alert('Feedback was not submited..!');</script>".mysqli_error($conn);
}
mysqli_close($conn);
}
?>