<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Simple form</title>
  <link rel="stylesheet" href="style2.css">

</head>
<body>


<div>
  <form method="POST" enctype="multipart/form-data">
    <h2>Delete Products</h2>
    
    
    <label for="product name">Existing Product Name :</label>
    <input type="text" id="fname" name="p_name" placeholder="Product name...">
  
    <input type="submit" value="Delete" name="submit">
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){

$oldname=$_POST['p_name'];

  $conn=mysqli_connect('localhost','root','','cart_db');
  $query=mysqli_query($conn,"delete from products where pname='$oldname'");
  if($query){
    echo"<script>alert('Values Vanished Successfully..!');</script>";
  }
  else{
    echo"Could not update the values".mysqli_error($conn);
  }
}
?>