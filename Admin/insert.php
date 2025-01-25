<html>
<fieldset>
<form method="POST" enctype="multipart/form-data">
	<h3>Add new products</h3>
	<input type="text" name="product_name" placeholder="Enter Product Name">
	<br>
	<input type="number" placeholder="Enter product Rate" name="product_price">
	<br>
	<input type="file" name="img" required>
	<br>
	<input type="text" required="required" name="value" value="upload_img/">
	<br>
	<input type="submit" name="submit" value="Add Item">
</fieldset>
</form>
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