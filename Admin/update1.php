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
    <h2>Update Products</h2>
    
    
    <label for="product name">Existing Product Name :</label>
    <input type="text" id="fname" name="p_name" placeholder="Product name...">

    <label for="lname">New Product name :</label>
    <input type="number" id="lname" name="product_name" placeholder="Product new name...">

    <label for="lname">Enter Price :</label>
    <input type="text"  name="product_price" placeholder="Product rate...">
  
    <input type="submit" value="Submit" value="Update">
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$newname=$_POST['product_name'];
$oldname=$_POST['p_name'];
$newval=$_POST['product_price'];
  $conn=mysqli_connect('localhost','root','','cart_db');
  $query=mysqli_query($conn,"update products set pname='$newname', price='$newval' WHERE pname='$oldname'");
  if($query){
    echo"<script>alert('Values Updated Successfully');</script>";
  }
  else{
    echo"Could not update the values".mysqli_error($conn);
  }
}
?>