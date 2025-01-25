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
    <h2>Add New Products</h2>
    
    
    <label for="product name">Product Name :</label>
    <input type="text" id="fname" name="product_name" placeholder="Product name...">

    <label for="lname">Product Rate :</label>
    <input type="number" id="lname" name="product_price" placeholder="Product rate...">

    <label for="lname">Select Product Image :</label>
    <input type="file"  name="img">

    <label for="lname">Enter Path :</label>
    <input type="text"  name="value" value="upload_img/">
  
    <input type="submit" value="Submit" value="Add Item">
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $pname = $_POST['product_name'];
    $pprice=$_POST['product_price'];
    //$pimage=$_POST['img'];
    $filename=$_FILES['img']['name'];
    $destination='upload_img/'.$filename;
    $file=$_FILES['img']['tmp_name'];
    if(empty($pname) || empty($pprice)){
      echo"<script>alert('please fill out all fields');</script>";
    }
    else{
      $conn=mysqli_connect('localhost','root','','cart_db');
      $sql="INSERT INTO `products`(`pname`, `price`, `pimage`) VALUES ('$pname','$pprice','$_POST[value]')";
      $op=mysqli_query($conn,$sql);
      if($op){
        if(move_uploaded_file($file,$destination)){
        echo"<script>alert('item Added Successfully..!');</script>";
      }
    }
      else{
        echo"<h3>Could not able to add items..".mysqli_error($conn);
      }
    }
}



?>