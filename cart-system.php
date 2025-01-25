<?php
session_start();
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="cart-style.css">
</head>
<body>
<h2><span>Cart</span></h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Serial No</th>
            <th>Item Name</th>
            <th>Item Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
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
        <tbody>
    </table>
</div>
</body>
</html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kohinoor-Purchse Form</title>
  <link rel="stylesheet" href="styles.css">

</head>
<body>
	<?php 
        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
        {
        ?>
<div class="container">  
  <form id="contact" action="pp.php" method="post">
    <h3>Admin Login</h3>
    <fieldset>
      <input placeholder="Name" type="text" tabindex="1" name="tb1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Phone No" type="text" name="tb2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Address" type="text" name="tb3" required>
    </fieldset>
    <fieldset>
      <input type="radio" name="r1" value="COD" checked required>Cash On Delivery
    </fieldset>
    
      <button name="purchase" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <fieldset>
    	<b>Total : <?php echo $total ?></b>
    </fieldset>
  </form>
</div>
<?php
}
?>
</body>
</html>
