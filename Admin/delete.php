<html>
<fieldset>
<form method="POST">
	<h3>Update products</h3>
	<input type="text" name="p_name" placeholder="Existing Product Name">
	<br>
	<input type="submit" name="submit" value="Update">
</fieldset>
</form>
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