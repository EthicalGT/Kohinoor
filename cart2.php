<?php
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-light">
        <h1>My Cart</h1>
        <div class="col-lg-9">
          <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $total=0;
    if(isset($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $key => $value) {
      $sr=$key+1;
      $total=$total+$value['item_price']*$value['Quantity'];
      echo"
      <tr>
      <td>$sr</td>
      <td>$value[item_name]</td>
      <td>$value[item_price]</td>
      <td>
      <form action='cart.php' method='POST'>
      <input class='text-center iquantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' name='modquantity' min='1' max='10'>
      <input type='hidden' name='item_name' value='$value[item_name]'>
      </form>
      </td>
      <td>
      <form action='cart.php' method='POST'>
      <button name='r_item' class='btn-btn-sm btn-outline-danger'>Remove</button>
      <input type='hidden' name='item_name' value='$value[item_name]'>
        </form>
      </td>
      </tr>";

    }
  }
    ?>
    
    
  </tbody>
</table>
        <br>

      </div>
      <div class="col-lg-3">
        <div class="border bg-lite rounded p-4">
        <h4>Total</h4>
        <h5 class="text-right"><?php echo $total ?></h5><br>
        <?php 
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
        {
        ?>
        <form action="pp.php" method="POST">
        	<label>Name :</label>
        	<input type="text" name="tb1" required><br>
        	<label>Phone No :</label>
        	<input type="text" maxlength="10" name="tb2" required><br>
        	<label>Address :</label>
        	<input type="text" name="tb3" required><br>
          <input  type="radio" name="r1" value="CashOnDelivery" required>Cash On delivery<br><br>
          <!--<input  type="radio" name="r1">Via Offline Mode<br>-->
          <input type="submit" name="purchase" value="Make Purchase">
        </form>
        <?php 
        }
        ?>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
  $quantity=$_POST['quantity'];
$conn=mysqli_connect('localhost', 'root', '', 'orders');
//$r=mysqli_fetch_assoc($op1);
//if($r['item_name'])
$op=mysqli_query($conn, "insert into my_orders values
  ('$name','addr','contact','pin','landmark','email','$value[item_name]','$value[item_price]','null')");
if($op){
  echo"<h1>Ordher confirm</h1>";
}
else{
  echo"<h1>Unable to make order</h1>";
}
}
?>