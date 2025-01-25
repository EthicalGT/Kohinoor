<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Update Item</title>
  <link rel="stylesheet" href="insert.css">
</head>
<body>
<div>
  <form method="POST">
    <h2>Update Food Item</h2>
    
    <label>Existing Food Name :</label>
    <input type="text" id="fname" name="p_name" placeholder="Food name...">

    <label>New Food name :</label>
    <input type="text" name="product_name" placeholder="Food new name...">

    <label>Enter New Description:</label><br>
    <textarea name="p_desc" required></textarea>

    <label>Enter New Price :</label>
    <input type="number"  name="product_price" placeholder="Food Price...">
  
    <input type="submit" name="submit" value="Update">
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$newname=$_POST['product_name'];
$oldname=$_POST['p_name'];
$newdesc=$_POST['p_desc'];
$newval=$_POST['product_price'];
  $conn=mysqli_connect('localhost','root','','admin login');
  $query=mysqli_query($conn,"update products set pname='$newname',pdesc='$newdesc', price='$newval' WHERE pname='$oldname'");
  if($query){
    echo"<script>alert('Values Updated Successfully');</script>";
  }
  else{
    echo"Could not update the values".mysqli_error($conn);
  }
}
?>